<?php

/*
 * This file is part of FFTConsole.
 * (c) Samovar <prototype.denis@gmail.com>
 * This source file is subject to the GPL-2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Samovar\FFTConsole;

/**
 * @author Denis Buzdygar <prototype.denis@gmail.com>
 */
interface BinaryReaderInterface
{
    /**
     * unpack function.
     *
     * @param resource $resource
     * @param string   $type
     * @param int      $length
     *
     * @return string | mixed
     */
    public static function read($resource, $type, $length);
}
