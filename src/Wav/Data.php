<?php

namespace Samovar\FFTConsole\Wav;

class Data implements DataInterface
{
    /**
     * @var mixed
     */
    private $subchunk2ID;

    /**
     * @var mixed
     */
    private $subchunk2Size;

    /**
     * Get the value of Subchunk
     *
     * @return mixed
     */
    public function getSubchunk2ID()
    {
        return $this->subchunk2ID;
    }

    /**
     * Set the value of Subchunk
     *
     * @param mixed subchunk2ID
     *
     * @return self
     */
    public function setSubchunk2ID($subchunk2ID)
    {
        $this->subchunk2ID = $subchunk2ID;

        return $this;
    }

    /**
     * Get the value of Subchunk Size
     *
     * @return mixed
     */
    public function getSubchunk2Size()
    {
        return $this->subchunk2Size;
    }

    /**
     * Set the value of Subchunk Size
     *
     * @param mixed subchunk2Size
     *
     * @return self
     */
    public function setSubchunk2Size($subchunk2Size)
    {
        $this->subchunk2Size = $subchunk2Size;

        return $this;
    }

}
