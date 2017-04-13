<?php

/*
 * This file is part of FFTConsole.
 * (c) Samovar <prototype.denis@gmail.com>
 * This source file is subject to the GPL-2.0 license that is bundled
 * with this source code in the file LICENSE.
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
     * @param mixed $displayPoint
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
     * @param mixed $displayEmptyPoint
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
     * @param mixed $displayColor
     *
     * @return self
     */
    public function setDisplayColor($displayColor);
}
