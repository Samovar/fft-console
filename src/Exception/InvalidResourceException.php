<?php

/*
 * This file is part of FFTConsole.
 * (c) Samovar <prototype.denis@gmail.com>
 * This source file is subject to the GPL-2.0 license that is bundled
 * with this source code in the file LICENSE.
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
