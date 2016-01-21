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
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Samovar\FFTConsole\SinusAnimate;

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
        new SinusAnimate();
    }
}
