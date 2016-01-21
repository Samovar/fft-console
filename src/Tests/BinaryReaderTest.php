<?php

namespace Samovar\FFTConsole\Tests;

use Samovar\FFTConsole\BinaryReader;

/**
 *
 */
class BinaryReaderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test read
     */
    public function testRead()
    {
        // Start wav file
        //          R   I   F   F        integer (4 byte)     WAVE            fmt             16  PCM
        $string = "\x52\x49\x46\x46\x14\x60\x28\x00\x57\x41\x56\x45\x66\x6D\x74\x20\x10\x00\x00\x00\x01\x00";


        $data = sprintf('data://text/plain;base64,%s', base64_encode($string));

        $resource = fopen($data, 'rb');

        // RIFF (ASCII)
        $this->assertEquals('RIFF', BinaryReader::read($resource, 'a*', 4));

        // Size (4 bytes (Any value in test))
        $this->assertEquals(2646036, BinaryReader::read($resource, 'V', 4));

        // WAVE
        $this->assertEquals('WAVE', BinaryReader::read($resource, 'a*', 4));

        // fmt
        $this->assertEquals('fmt ', BinaryReader::read($resource, 'a*', 4));

        // 16 for PCM
        $this->assertEquals(16, BinaryReader::read($resource, 'V', 4));

        // PCM
        $this->assertEquals(1, BinaryReader::read($resource, 'v', 2));

        fclose($resource);
    }
}
