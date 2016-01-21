<?php

namespace Samovar\FFTConsole;

/**
 * @author Denis Buzdygar <prototype.denis@gmail.com>
 */
class SinusAnimate
{
    /**
     * Dummy code
     */
    public function __construct()
    {
        $map = [];

        $h = isset($argv[1]) ? (int) $argv[1] : 24;
        $w = isset($argv[2]) ? (int) $argv[2] : 60;

        if ($h < 1) {
            $h = 1;
        }
        if ($w < 1) {
            $w = 1;
        }

        $offset = 0;
        while (true) {
            if ($offset > $w) {
                $offset = 0;
            }

            for ($y = 0; $y < $h; $y++) {
                for ($x = 0; $x < $w; $x++) {
                    $map[$y][$x] = ' ';
                }
            }

            for ($x = 0; $x < $w; $x++) {
                $y = (sin(1.0 * ($x + $offset)  * 2 * M_PI / $w) + 1) / 2 * $h;
                if (($y >= 0) && ($y < $h)) {
                    $map[$y][$x] = '*';
                }
            }
            ++$offset;

            for ($y = 0; $y < $h; $y++) {
                for ($x = 0; $x < $w; $x++) {
                    fwrite(STDOUT, $map[$y][$x]);
                }
                fwrite(STDOUT, "\n");
            }
            fwrite(STDOUT, "\033c");

            usleep(3000);
        }
    }
}
