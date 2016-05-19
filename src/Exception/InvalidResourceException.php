<?php
/*
 * This file is part of the Samovar/FFTConsole package.
 *
 * (c) Denis Buzdygar <prototype.denis@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Samovar\FFTConsole\Exception;

/**
 * @author Denis Buzdygar <prototype.denis@gmail.com>
 */
class InvalidResourceException extends \InvalidArgumentException
{
    /**
     * Constructor.
     *
     * @param mixed      $invalidArgument
     * @param string     $message
     * @param int        $code
     * @param \Exception $previous
     */
    public function __construct($invalidArgument = null, $message = '', $code = 0, \Exception $previous = null)
    {
        $message = sprintf('Type "%s" not supported. Allow only resource', gettype($invalidArgument));

        parent::__construct($message, $code, $previous);
    }
}
