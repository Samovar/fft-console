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

    /**
     * Render line.
     *
     * @param string $line
     */
    public function renderLine($line);

    /**
     * Get the value of Display Point.
     *
     * @return string
     */
    public function getDisplayPoint();

    /**
     * Set the value of Display Point.
     *
     * @param string displayPoint
     *
     * @return self
     */
    public function setDisplayPoint($displayPoint);

    /**
     * Get the value of Display Empty Point.
     *
     * @return string
     */
    public function getDisplayEmptyPoint();

    /**
     * Set the value of Display Empty Point.
     *
     * @param string displayEmptyPoint
     *
     * @return self
     */
    public function setDisplayEmptyPoint($displayEmptyPoint);

    /**
     * Get the value of Display Color.
     *
     * @return bool
     */
    public function getDisplayColor();

    /**
     * Set the value of Display Color.
     *
     * @param bool displayColor
     *
     * @return self
     */
    public function setDisplayColor($displayColor);
}
