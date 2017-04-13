<?php

/*
 * This file is part of FFTConsole.
 * (c) Samovar <prototype.denis@gmail.com>
 * This source file is subject to the GPL-2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Samovar\FFTConsole\Command;

use Samovar\FFTConsole\SinusAnimate;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Example sinus animation command.
 *
 * @author Denis Buzdygar <prototype.denis@gmail.com>
 */
class SinusAnimateCommand extends Command
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('samovar:animate:sinus')
            ->setDescription('Example sinus animation')
            ->addArgument('width', InputArgument::REQUIRED, 'Window width')
            ->addArgument('height', InputArgument::REQUIRED, 'Window height')
            ->addOption('iterations', null, InputOption::VALUE_OPTIONAL, 'If set, break on iteration')
            ->setHelp('
Example:
./app samovar:animate:sinus
            ')
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        new SinusAnimate($input, $output);
    }
}
