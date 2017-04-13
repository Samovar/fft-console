<?php

/*
 * This file is part of FFTConsole.
 * (c) Samovar <prototype.denis@gmail.com>
 * This source file is subject to the GPL-2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Samovar\FFTConsole;

// https://github.com/thinkingmik/FastFourierTransform
use Samovar\FFTConsole\Exception\InvalidResourceException;
use Samovar\FFTConsole\Wav\Data;
use Samovar\FFTConsole\Wav\Fmt;
use Samovar\FFTConsole\Wav\Riff;
use Samovar\FFTConsole\Wav\WavReader;

/**
 * WavInfo.
 *
 * @author Denis Buzdygar <prototype.denis@gmail.com>
 */
class WavInfo
{
    /**
     * Get wav info.
     *
     * @param resource $resource
     *
     * @throws InvalidResourceException If argument not resource
     *
     * @return \Samovar\FFTConsole\Wav\WavReaderInterface
     */
    public static function getWavInfo($resource)
    {
        if (!is_resource($resource)) {
            throw new InvalidResourceException($resource);
        }

        $wavReader = new WavReader(
            $resource, new Riff(), new Fmt(), new Data()
        );

        $wavReader->read();

        return $wavReader;
    }
}
