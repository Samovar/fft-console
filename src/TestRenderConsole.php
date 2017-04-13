<?php

/*
 * This file is part of FFTConsole.
 * (c) Samovar <prototype.denis@gmail.com>
 * This source file is subject to the GPL-2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Samovar\FFTConsole;

/**
 * TestRenderConsole.
 *
 * @author Denis Buzdygar <prototype.denis@gmail.com>
 *
 * Fast fourier transform
 *
 * Terminal
 * +--------------------------------------------------------------------------+
 * |  ********                                                                |
 * |  ********                                                                |
 * |  ********                                                                |
 * |  ********                                                                |
 * |  ***|                                                                    |
 * |                                                                          |
 * |                                                                          |
 * +--------------------------------------------------------------------------+
 *
 * Blink?
 */
class TestRenderConsole
{
    /**
     * Console width.
     *
     * @var int
     */
    const WIDTH_DEFAULT = 15;

    /**
     * Console height.
     *
     * @var int
     */
    const HEIGHT_DEFAULT = 15;

    /**
     * @param int $w Default self::WIDTH_DEFAULT
     * @param int $h Default self::HEIGHT_DEFAULT
     */
    public function process($w = self::WIDTH_DEFAULT, $h = self::HEIGHT_DEFAULT)
    {
        while (true) {
            for ($y = 0; $y < $h; ++$y) {
                for ($x = 0; $x < $w; ++$x) {
                    echo '*';
                }
                echo "\n";
            }
            usleep(10000);
            echo chr(27).'[2J'.chr(27).'[;H';
        }
    }
}
