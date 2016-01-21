<?php

namespace Samovar\FFTConsole;

// https://github.com/thinkingmik/FastFourierTransform
use Samovar\FFTConsole\Wav\Fmt;
use Samovar\FFTConsole\Wav\Data;
use Samovar\FFTConsole\Wav\Riff;
use Samovar\FFTConsole\Wav\WavReader;

/**
 * WavInfo.
 *
 * @author Denis Buzdygar <prototype.denis@gmail.com>
 */
class WavInfo
{
    /**
     * Get wav info.
     *
     * @param resource $resource
     *
     * @return \Samovar\FFTConsole\Wav\WavReaderInterface
     */
    public static function getWavInfo($resource)
    {
        if (!is_resource($resource)) {
            throw new \InvalidArgumentException('Allow only resource');
        }

        $wavReader = new WavReader(
            $resource, new Riff(), new Fmt(), new Data()
        );

        $wavReader->read();

        return $wavReader;
    }
}
