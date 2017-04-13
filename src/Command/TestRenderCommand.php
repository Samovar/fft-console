<?php

/*
 * This file is part of FFTConsole.
 * (c) Samovar <prototype.denis@gmail.com>
 * This source file is subject to the GPL-2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Samovar\FFTConsole\Command;

use Samovar\FFTConsole\TestRenderConsole;
use Samovar\FFTConsole\VisualizationEqualizer;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Render square.
 *
 * @author Denis Buzdygar <prototype.denis@gmail.com>
 */
class TestRenderCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('samovar:render:test')
            ->setDescription('The render square. (Test speed)')
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
            ->setHelp('
Example:
./app samovar:render:test
            ')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $render = new TestRenderConsole();

        $width = $input->getArgument('width');
        $height = $input->getArgument('height');

        if (!$width) {
            $width = TestRenderConsole::WIDTH_DEFAULT;
        }

        if (!$height) {
            $height = TestRenderConsole::HEIGHT_DEFAULT;
        }

        $render->process((int) $width, (int) $height);
    }
}
