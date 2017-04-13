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
interface RiffInterface
{
    /**
     * Get the value of Chunk.
     *
     * @return mixed
     */
    public function getChunkID();

    /**
     * Set the value of Chunk.
     *
     * @param mixed chunkID
     * @param mixed $chunkID
     *
     * @return RiffInterface
     */
    public function setChunkID($chunkID);

    /**
     * Get the value of Chunk Size.
     *
     * @return mixed
     */
    public function getChunkSize();

    /**
     * Set the value of Chunk Size.
     *
     * @param mixed chunkSize
     * @param mixed $chunkSize
     *
     * @return RiffInterface
     */
    public function setChunkSize($chunkSize);

    /**
     * Get the value of Format.
     *
     * @return mixed
     */
    public function getFormat();

    /**
     * Set the value of Format.
     *
     * @param mixed format
     * @param mixed $format
     *
     * @return RiffInterface
     */
    public function setFormat($format);
}
