<?php

/*
 * This file is part of FFTConsole.
 * (c) Samovar <prototype.denis@gmail.com>
 * This source file is subject to the GPL-2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Samovar\FFTConsole;

// https://github.com/thinkingmik/FastFourierTransform
use FFT;
use Samovar\FFTConsole\Render\ConsoleRenderInterface;
use Samovar\FFTConsole\Wav\RiffInterface;
use Samovar\FFTConsole\Wav\WavReader;
use Samovar\FFTConsole\Wav\WavReaderInterface;

/**
 * FFTConsole.
 *
 * @author Denis Buzdygar <prototype.denis@gmail.com>
 *
 * Fast fourier transform
 *
 *                                                               +---| Terminal
 *                                                               V
 * +--------------------------------------------------------------------------+
 * |  ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| |
 * |  ||||||||||||||| ||||||   |||||   ||||||||  |  | ||        |   |  |    | |
 * |  |||| |||||||||| |||      ||| |   |||          |  |        |             |
 * |  ||||  ||||||| |   |                                                     |
 * |  |||    ||| |  |                                                         |
 * |  |||    ||| |                                                            |
 * |  | |        |                                                            |
 * |  |          |                                                            |
 * |  |          |                                                            |
 * |  |          |                                                            |
 * |  |          |                      + - - - - - - - - - - - - - - - - - - +
 * |  |                                 |                                     |
 * |  |                                                                       |
 * |  |                                 |                                     |
 * |  |                                          This area no paint           |
 * |  |                                 |        PHP - please spead!          |
 * |  |                                                                       |
 * |                                    |                                     |
 * +------------------------------------+-------------------------------------+
 *
 * cat sound.wav  | php index.php -
 * arecord -t wav | php index.php -
 * cat ../60sound.wav | php index.php - $(echo -e "lines\ncols"|tput -S).
 *
 * Delay ~ 0.5 sec (PHP please spead) !
 */
class VisualizationEqualizer
{
    /**
     * Default terminal width.
     */
    const WIDTH_DEFAULT = 80;

    /**
     * Default terminal height.
     */
    const HEIGHT_DEFAULT = 24;

    /**
     * Dim.
     */
    const DIM_DEFAULT = 256;

    /**
     * (2^N).
     *
     * @var int
     */
    private $dim;

    /**
     * @var resource
     */
    private $resource;

    /**
     * @var RiffInterface
     */
    private $wavReader;

    /**
     * @var ConsoleRenderInterface
     */
    private $render;

    /**
     * @param resource               $resource
     * @param int                    $dim
     * @param WavReaderInterface     $wavReader
     * @param ConsoleRenderInterface $render
     */
    public function __construct($resource, $dim, WavReaderInterface $wavReader, ConsoleRenderInterface $render)
    {
        if (!is_resource($resource)) {
            throw new \InvalidArgumentException('Allow only resource');
        }

        if (log($dim, 2) % 2 !== 0) {
            throw new \InvalidArgumentExceprtion('2 ^ $dim');
        }

        $this->resource = $resource;
        $this->wavReader = $wavReader;
        $this->dim = $dim;
        $this->render = $render;
    }

    /**
     * @param int $width
     * @param int $height
     */
    public function run($width = self::WIDTH_DEFAULT, $height = self::HEIGHT_DEFAULT)
    {
        if (PHP_SAPI !== 'cli') {
            throw new \RuntimeException('Only cli');
        }

        $this->wavReader->read();
        $wavInfo = '';
        if ($fmt = $this->wavReader->getFmt()) {
            $wavInfo = vsprintf("AudioFormat: %s\tNumChannels: %s\tSampleRate: %s\tBitsPerSample:%s", [
                $fmt->getAudioFormat(),
                $fmt->getNumChannels(),
                $fmt->getSampleRate(),
                $fmt->getBitsPerSample(),
            ]);
        }

        $fourier = new FFT($this->dim);

        $peak = 2147483648; // pow(256, 4) / 2;
        $half = $this->dim / 2; // optimize cycle

        while (true) {
            $function = [];
            for ($dimCounter = 0; $dimCounter < $this->dim; ++$dimCounter) {
                $function[] = BinaryReader::read($this->resource, 'V', 4) / $peak;
            }

            $FFT = $fourier->fft($function);
            $absFFT = $fourier->getAbsFFT($FFT);

            $display = [];

            // clear terminal
            $this->render->renderLine("\033c");

            // Wav information
            $this->render->renderLine($wavInfo);

            // Build matrix
            // Scale only height
            //
            // ^            ^
            // |  *         |  *
            // | * *   to   | ***
            // |*   *       |*****
            // +------>     +------->
            for ($y = 0; $y < $height; ++$y) {
                for ($x = 0; $x < $half; ++$x) {
                    // scale by height
                    $value = (int) $absFFT[$x] / (max($absFFT) + 0.00001) * $height;
                    $display[$y][$x] = false;
                    for ($m = 0; $m <= $value; ++$m) {
                        $display[$m][$x] = true;
                    }
                }
            }

            // TODO: Width scale
            $this->render->render($display, $height, $half /*$width*/);
        }
    }

    /**
     * Correct pow 2.
     * Add 0 to array if no correct.
     *
     * @param array $array
     *
     * @return array
     */
    private function correctPow(&$array)
    {
        $log = log(count($array), 2);  // 7.8853165
        $border = (float) intval($log);   // 7.8514484 > 7 > 7.000000

        if ($border !== $log) {
            $array += array_fill(0, pow(2, ($border + 1)), 0);
        }
    }
}
