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
