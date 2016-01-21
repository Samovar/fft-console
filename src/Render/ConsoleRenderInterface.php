<?php
/*
 * This file is part of the Samovar/FFTConsole package.
 *
 * (c) Denis Buzdygar <prototype.denis@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Samovar\FFTConsole\Render;

use Symfony\Component\Console\Output\OutputInterface;

/**
 * @author Denis Buzdygar <prototype.denis@gmail.com>
 */
interface ConsoleRenderInterface
{
    /**
     * @param OutputInterface $output
     */
    public function __construct(OutputInterface $output);

    /**
     * @param array $matrix 2D array
     * @param int   $height
     * @param int   $width
     */
    public function render($matrix, $height, $width);
}
