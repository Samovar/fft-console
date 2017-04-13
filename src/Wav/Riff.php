<?php

/*
 * This file is part of FFTConsole.
 * (c) Samovar <prototype.denis@gmail.com>
 * This source file is subject to the GPL-2.0 license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Samovar\FFTConsole\Wav;

/**
 * @author Denis Buzdygar <prototype.denis@gmail.com>
 */
class Riff implements RiffInterface
{
    /**
     * @var mixed
     */
    private $chunkID;

    /**
     * @var mixed
     */
    private $chunkSize;

    /**
     * @var mixed
     */
    private $format;

    /**
     * {@inheritdoc}
     */
    public function getChunkID()
    {
        return $this->chunkID;
    }

    /**
     * {@inheritdoc}
     */
    public function setChunkID($chunkID)
    {
        $this->chunkID = $chunkID;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getChunkSize()
    {
        return $this->chunkSize;
    }

    /**
     * {@inheritdoc}
     */
    public function setChunkSize($chunkSize)
    {
        $this->chunkSize = $chunkSize;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * {@inheritdoc}
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }
}
