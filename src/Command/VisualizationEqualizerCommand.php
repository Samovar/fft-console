<?php

/*
 * This file is part of FFTConsole.
 * (c) Samovar <prototype.denis@gmail.com>
 * This source file is subject to the GPL-2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Samovar\FFTConsole\Command;

use Samovar\FFTConsole\Render\ConsoleRender;
use Samovar\FFTConsole\VisualizationEqualizer;
use Samovar\FFTConsole\Wav\Data;
use Samovar\FFTConsole\Wav\Fmt;
use Samovar\FFTConsole\Wav\Riff;
use Samovar\FFTConsole\Wav\WavReader;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Visualization.
 *
 * @author Denis Buzdygar <prototype.denis@gmail.com>
 */
class VisualizationEqualizerCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('samovar:visualization:equalizer')
            ->setDescription('Visualize wav file')
            ->addArgument(
                '-',
                InputArgument::OPTIONAL,
                'Standard linux pipe argument or filename'
            )
            ->addArgument(
                'width',
                InputArgument::OPTIONAL,
                sprintf('Console width (default "%s")', VisualizationEqualizer::WIDTH_DEFAULT)
            )
            ->addArgument(
                'height',
                InputArgument::OPTIONAL,
                sprintf('Console height (default "%s")', VisualizationEqualizer::HEIGHT_DEFAULT)
            )
            ->addArgument(
                'dim',
                InputArgument::OPTIONAL,
                sprintf('FFT dim (default "%s")', VisualizationEqualizer::DIM_DEFAULT)
            )
            ->addOption(
               'filename',
               null,
               InputOption::VALUE_OPTIONAL,
               'filename'
            )
            ->setHelp('
<question>Files:</question>

<info>By default (height = 24, width = 80)</info>
cat Resources/sin.wav | php app '.$this->getName().' -

<info>\'echo -e "lines\ncols"|tput -S\' - height and width this terminal.</info>
cat Resources/sin.wav | php app '.$this->getName().' - $(echo -e "lines\ncols"|tput -S)

<question>Streams:</question>

<info>arecord -t wav | php app '.$this->getName().' -</info>

<comment>
    Please use php7
</comment>
            ')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $filename = $input->getOption('filename');

        if (!$filename) {
            $resource = STDIN;
        } else {
            try {
                $file = new \SplFileInfo($filename);
            } catch (\Exception $e) {
                throw new \InvalidArgumentException('Bad filename');
            }

            $resource = fopen($file->getRealPath(), 'rb');
        }

        $width = $input->getArgument('width');
        $height = $input->getArgument('height');
        $dim = $input->getArgument('dim');

        if (!$width) {
            $width = VisualizationEqualizer::WIDTH_DEFAULT;
        }

        if (!$height) {
            $height = VisualizationEqualizer::HEIGHT_DEFAULT;
        }

        if (!$dim) {
            $dim = VisualizationEqualizer::DIM_DEFAULT;
        }

        $render = new ConsoleRender($output);
        $render->setDisplayColor(true);

        $wavReader = new WavReader($resource, new Riff(), new Fmt(), new Data());

        $visualizationEqualizer = new VisualizationEqualizer($resource,
                                                    $dim, $wavReader, $render);

        $visualizationEqualizer->run((int) $width, (int) $height);
    }
}
