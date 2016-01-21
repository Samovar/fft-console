<?php

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
