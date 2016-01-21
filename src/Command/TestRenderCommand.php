<?php

namespace Samovar\FFTConsole\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Samovar\FFTConsole\TestRenderConsole;
use Samovar\FFTConsole\VisualizationEqualizer;

/**
 * Render square.
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
