<?php
/*
 * This file is part of the Samovar/FFTConsole package.
 *
 * (c) Denis Buzdygar <prototype.denis@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
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
     *
     * @return RiffInterface
     */
    public function setFormat($format);
}
