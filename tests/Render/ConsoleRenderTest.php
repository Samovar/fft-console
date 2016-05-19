<?php

namespace tests\Render;

use Samovar\FFTConsole\Render\ConsoleRender;
use Symfony\Component\Console\Output\OutputInterface;

/**
 *
 */
class ConsoleRenderTest extends \PHPUnit_Framework_TestCase
{
    private $output;

    public function setUp()
    {
        $this->output = $this
            ->getMockBuilder(OutputInterface::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    public function testRenderLine()
    {
        $this->output->expects($this->once())
            ->method('writeLn')
            ->will($this->returnValue('string'));

        $object = new ConsoleRender($this->output);

        $this->assertEquals(null, $object->renderLine('string'));
    }

    public function testGetDisplayPoint()
    {
        $object = new ConsoleRender($this->output);

        $object->setDisplayPoint(256);

        $this->assertEquals(256, $object->getDisplayPoint());
    }

    public function testGetDisplayColor()
    {
        $object = new ConsoleRender($this->output);

        $object->setDisplayColor('red');

        $this->assertEquals('red', $object->getDisplayColor());
    }
}
