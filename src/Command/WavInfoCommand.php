<?php
/*
 * This file is part of the Samovar/FFTConsole package.
 *
 * (c) Denis Buzdygar <prototype.denis@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Samovar\FFTConsole\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Samovar\FFTConsole\WavInfo;

/**
 * Get base info for wav file.
 * @author Denis Buzdygar <prototype.denis@gmail.com>
 */
class WavInfoCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('samovar:file:info')
            ->setDescription('Wav file info')
            ->addArgument(
                'filename',
                InputArgument::REQUIRED,
                sprintf('Wav file')
            )
            ->setHelp('
Example:
./app samovar:file:info Resources/sin.wav
            ')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $filename = $input->getArgument('filename');

        if (!$filename) {
            $resource = STDIN;
        } else {
            $resource = fopen($filename, 'rb');
        }

        $wavReader = WavInfo::getWavInfo($resource);

        $riff = $wavReader->getRiff();
        $fmt = $wavReader->getFmt();
        $data = $wavReader->getData();

        $file = new \SplFileInfo($filename);

        $output->writeln('Filename: '.$file->getRealPath());

        if ($riff) {
            $output->writeLn('Format: '.$riff->getFormat());
        }

        if ($fmt) {
            $output->writeLn('AudioFormat: '.$fmt->getAudioFormat());
            $output->writeLn('NumChannels: '.$fmt->getNumChannels());
            $output->writeLn('SampleRate: '.$fmt->getSampleRate());
            $output->writeLn('BitsPerSample: '.$fmt->getBitsPerSample());
        }
    }
}
