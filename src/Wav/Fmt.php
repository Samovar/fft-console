<?php

namespace Samovar\FFTConsole\Wav;

class Fmt implements FmtInterface
{
    /**
     * @var mixed
     */
    private $subchunk1ID;

    /**
     * @var mixed
     */
    private $subchunk1Size;

    /**
     * @var mixed
     */
    private $audioFormat;

    /**
     * @var mixed
     */
    private $numChannels;

    /**
     * @var mixed
     */
    private $sampleRate;

    /**
     * @var mixed
     */
    private $byteRate;

    /**
     * @var mixed
     */
    private $blockAlign;

    /**
     * @var mixed
     */
    private $bitsPerSample;

    /**
     * @var mixed
     */
    private $extraParamSize;

    /**
     * @var mixed
     */
    private $extraParams;

    /**
     * Get the value of Subchunk
     *
     * @return mixed
     */
    public function getSubchunk1ID()
    {
        return $this->subchunk1ID;
    }

    /**
     * Set the value of Subchunk
     *
     * @param mixed subchunk1ID
     *
     * @return self
     */
    public function setSubchunk1ID($subchunk1ID)
    {
        $this->subchunk1ID = $subchunk1ID;

        return $this;
    }

    /**
     * Get the value of Subchunk Size
     *
     * @return mixed
     */
    public function getSubchunk1Size()
    {
        return $this->subchunk1Size;
    }

    /**
     * Set the value of Subchunk Size
     *
     * @param mixed subchunk1Size
     *
     * @return self
     */
    public function setSubchunk1Size($subchunk1Size)
    {
        $this->subchunk1Size = $subchunk1Size;

        return $this;
    }

    /**
     * Get the value of Audio Format
     *
     * @return mixed
     */
    public function getAudioFormat()
    {
        return $this->audioFormat;
    }

    /**
     * Set the value of Audio Format
     *
     * @param mixed audioFormat
     *
     * @return self
     */
    public function setAudioFormat($audioFormat)
    {
        $this->audioFormat = $audioFormat;

        return $this;
    }

    /**
     * Get the value of Num Channels
     *
     * @return mixed
     */
    public function getNumChannels()
    {
        return $this->numChannels;
    }

    /**
     * Set the value of Num Channels
     *
     * @param mixed numChannels
     *
     * @return self
     */
    public function setNumChannels($numChannels)
    {
        $this->numChannels = $numChannels;

        return $this;
    }

    /**
     * Get the value of Sample Rate
     *
     * @return mixed
     */
    public function getSampleRate()
    {
        return $this->sampleRate;
    }

    /**
     * Set the value of Sample Rate
     *
     * @param mixed sampleRate
     *
     * @return self
     */
    public function setSampleRate($sampleRate)
    {
        $this->sampleRate = $sampleRate;

        return $this;
    }

    /**
     * Get the value of Byte Rate
     *
     * @return mixed
     */
    public function getByteRate()
    {
        return $this->byteRate;
    }

    /**
     * Set the value of Byte Rate
     *
     * @param mixed byteRate
     *
     * @return self
     */
    public function setByteRate($byteRate)
    {
        $this->byteRate = $byteRate;

        return $this;
    }

    /**
     * Get the value of Block Align
     *
     * @return mixed
     */
    public function getBlockAlign()
    {
        return $this->blockAlign;
    }

    /**
     * Set the value of Block Align
     *
     * @param mixed blockAlign
     *
     * @return self
     */
    public function setBlockAlign($blockAlign)
    {
        $this->blockAlign = $blockAlign;

        return $this;
    }

    /**
     * Get the value of Bits Per Sample
     *
     * @return mixed
     */
    public function getBitsPerSample()
    {
        return $this->bitsPerSample;
    }

    /**
     * Set the value of Bits Per Sample
     *
     * @param mixed bitsPerSample
     *
     * @return self
     */
    public function setBitsPerSample($bitsPerSample)
    {
        $this->bitsPerSample = $bitsPerSample;

        return $this;
    }

    /**
     * Get the value of Extra Param Size
     *
     * @return mixed
     */
    public function getExtraParamSize()
    {
        return $this->extraParamSize;
    }

    /**
     * Set the value of Extra Param Size
     *
     * @param mixed extraParamSize
     *
     * @return self
     */
    public function setExtraParamSize($extraParamSize)
    {
        $this->extraParamSize = $extraParamSize;

        return $this;
    }

    /**
     * Get the value of Extra Params
     *
     * @return mixed
     */
    public function getExtraParams()
    {
        return $this->extraParams;
    }

    /**
     * Set the value of Extra Params
     *
     * @param mixed extraParams
     *
     * @return self
     */
    public function setExtraParams($extraParams)
    {
        $this->extraParams = $extraParams;

        return $this;
    }

}
