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
class ConsoleRender implements ConsoleRenderInterface
{
    /**
     * @var OutputInterface
     */
    private $output;

    /**
     * @var string
     */
    private $displayPoint;

    /**
     * @var string
     */
    private $displayEmptyPoint;

    /**
     * @var bool
     */
    private $displayColor;

    /**
     * @param OutputInterface $output
     */
    public function __construct(OutputInterface $output)
    {
        $this->output = $output;

        $this->displayPoint = '|';
        $this->displayEmptyPoint = ' ';
        $this->displayColor = false;
    }

    /**
     * @param array $matrix 2D array
     * @param int   $height
     * @param int   $width
     */
    public function render($matrix, $height, $width)
    {
        for ($y = 0; $y < $height; ++$y) {
            for ($x = 0; $x < $width; ++$x) {

                $point = $matrix[$y][$x]
                    ? $this->getDisplayPoint()
                    : $this->getDisplayEmptyPoint();

                $level = $y / $height * 100;

                $color = '%s';
                if ($level < 10) {
                    $color = '<fg=white>%s</>';
                } elseif ($level < 25) {
                    $color = '<fg=green>%s</>';
                } elseif ($level < 50) {
                    $color = '<fg=yellow>%s</>';
                } elseif ($level <= 100) {
                    $color = '<fg=red>%s</>';
                }

                $this->output->write(sprintf($color, $point));
            }
            $this->output->writeLn('');
        }

        return;
    }

    public function renderLine($line)
    {
        $this->output->writeLn($line);
    }

    /**
     * Get the value of Display Point.
     *
     * @return string
     */
    public function getDisplayPoint()
    {
        return $this->displayPoint;
    }

    /**
     * Set the value of Display Point.
     *
     * @param string displayPoint
     *
     * @return self
     */
    public function setDisplayPoint($displayPoint)
    {
        $this->displayPoint = $displayPoint;

        return $this;
    }

    /**
     * Get the value of Display Empty Point.
     *
     * @return string
     */
    public function getDisplayEmptyPoint()
    {
        return $this->displayEmptyPoint;
    }

    /**
     * Set the value of Display Empty Point.
     *
     * @param string displayEmptyPoint
     *
     * @return self
     */
    public function setDisplayEmptyPoint($displayEmptyPoint)
    {
        $this->displayEmptyPoint = $displayEmptyPoint;

        return $this;
    }

    /**
     * Get the value of Display Color.
     *
     * @return bool
     */
    public function getDisplayColor()
    {
        return $this->displayColor;
    }

    /**
     * Set the value of Display Color.
     *
     * @param bool displayColor
     *
     * @return self
     */
    public function setDisplayColor($displayColor)
    {
        $this->displayColor = $displayColor;

        return $this;
    }
}
