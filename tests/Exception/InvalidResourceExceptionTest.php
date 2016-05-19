<?php

namespace tests\Exception;

use Samovar\FFTConsole\Exception\InvalidResourceException;

class InvalidResourceExceptionTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        $exception = new InvalidResourceException('foobar');

        $this->assertSame('Type "string" not supported. Allow only resource', $exception->getMessage());
    }

    public function testExtendClass()
    {
        $exception = new InvalidResourceException();

        $this->assertInstanceOf('InvalidArgumentException', $exception);
    }
}
