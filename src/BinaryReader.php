<?php

namespace Samovar\FFTConsole;

/**
 * @author Denis Buzdygar <prototype.denis@gmail.com>
 */
class BinaryReader implements BinaryReaderInterface
{
    /**
     * {@inheritdoc}
     */
    public static function read($resource, $type, $length)
    {
        $data = unpack($type, fread($resource, $length));

        return $data[1];
    }
}
