<?php
/*
 * This file is part of the Samovar/FFTConsole package.
 *
 * (c) Denis Buzdygar <prototype.denis@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Samovar\FFTConsole;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @author Denis Buzdygar <prototype.denis@gmail.com>
 */
class SinusAnimate
{
    /**
     * Dummy code.
     */
    public function __construct(InputInterface $input, OutputInterface $output)
    {
        $map = [];

        $iterations = $input->getOption('iterations');
        $output->writeLn('');

        if (null === $iterations) {
            $iterationCounter = 1;
        } else {
            $iterations = abs($iterations);
            $iterationCounter = $iterations;
        }

        $h = isset($argv[1]) ? (int) $input->getArgument('height') : 24;
        $w = isset($argv[2]) ? (int) $input->getArgument('width') : 60;

        if ($h < 1) {
            $h = 1;
        }
        if ($w < 1) {
            $w = 1;
        }

        $offset = 0;
        while ($iterationCounter) {
            if ($iterations !== 1) {
                $output->write("\033c");
            }

            if ($offset > $w) {
                $offset = 0;
            }

            for ($y = 0; $y < $h; ++$y) {
                for ($x = 0; $x < $w; ++$x) {
                    $map[$y][$x] = ' ';
                }
            }

            for ($x = 0; $x < $w; ++$x) {
                $y = (sin(1.0 * ($x + $offset)  * 2 * M_PI / $w) + 1) / 2 * $h;
                if (($y >= 0) && ($y < $h)) {
                    $map[$y][$x] = '*';
                }
            }
            ++$offset;

            for ($y = 0; $y < $h; ++$y) {
                for ($x = 0; $x < $w; ++$x) {
                    $output->write($map[$y][$x]);
                }
                $output->writeLn('');
            }

            usleep(3000);

            if (null !== $iterations) {
                --$iterationCounter;
            }
        }
    }
}
