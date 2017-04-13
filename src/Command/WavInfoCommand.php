<?php

/*
 * This file is part of FFTConsole.
 * (c) Samovar <prototype.denis@gmail.com>
 * This source file is subject to the GPL-2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Samovar\FFTConsole\Command;

use Samovar\FFTConsole\WavInfo;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Get base info for wav file.
 *
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
