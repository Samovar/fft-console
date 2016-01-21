<?php

namespace Samovar\FFTConsole\Wav;

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
     * Get the value of Chunk
     *
     * @return mixed
     */
    public function getChunkID()
    {
        return $this->chunkID;
    }

    /**
     * Set the value of Chunk
     *
     * @param mixed chunkID
     *
     * @return self
     */
    public function setChunkID($chunkID)
    {
        $this->chunkID = $chunkID;

        return $this;
    }

    /**
     * Get the value of Chunk Size
     *
     * @return mixed
     */
    public function getChunkSize()
    {
        return $this->chunkSize;
    }

    /**
     * Set the value of Chunk Size
     *
     * @param mixed chunkSize
     *
     * @return self
     */
    public function setChunkSize($chunkSize)
    {
        $this->chunkSize = $chunkSize;

        return $this;
    }

    /**
     * Get the value of Format
     *
     * @return mixed
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set the value of Format
     *
     * @param mixed format
     *
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

}
