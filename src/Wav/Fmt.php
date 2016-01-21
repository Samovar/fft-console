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
     * {@inheritdoc}
     */
    public function getSubchunk1ID()
    {
        return $this->subchunk1ID;
    }

    /**
     * {@inheritdoc}
     */
    public function setSubchunk1ID($subchunk1ID)
    {
        $this->subchunk1ID = $subchunk1ID;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSubchunk1Size()
    {
        return $this->subchunk1Size;
    }

    /**
     * {@inheritdoc}
     */
    public function setSubchunk1Size($subchunk1Size)
    {
        $this->subchunk1Size = $subchunk1Size;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getAudioFormat()
    {
        return $this->audioFormat;
    }

    /**
     * {@inheritdoc}
     */
    public function setAudioFormat($audioFormat)
    {
        $this->audioFormat = $audioFormat;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getNumChannels()
    {
        return $this->numChannels;
    }

    /**
     * {@inheritdoc}
     */
    public function setNumChannels($numChannels)
    {
        $this->numChannels = $numChannels;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSampleRate()
    {
        return $this->sampleRate;
    }

    /**
     * {@inheritdoc}
     */
    public function setSampleRate($sampleRate)
    {
        $this->sampleRate = $sampleRate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getByteRate()
    {
        return $this->byteRate;
    }

    /**
     * {@inheritdoc}
     */
    public function setByteRate($byteRate)
    {
        $this->byteRate = $byteRate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockAlign()
    {
        return $this->blockAlign;
    }

    /**
     * {@inheritdoc}
     */
    public function setBlockAlign($blockAlign)
    {
        $this->blockAlign = $blockAlign;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBitsPerSample()
    {
        return $this->bitsPerSample;
    }

    /**
     * {@inheritdoc}
     */
    public function setBitsPerSample($bitsPerSample)
    {
        $this->bitsPerSample = $bitsPerSample;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getExtraParamSize()
    {
        return $this->extraParamSize;
    }

    /**
     * {@inheritdoc}
     */
    public function setExtraParamSize($extraParamSize)
    {
        $this->extraParamSize = $extraParamSize;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getExtraParams()
    {
        return $this->extraParams;
    }

    /**
     * {@inheritdoc}
     */
    public function setExtraParams($extraParams)
    {
        $this->extraParams = $extraParams;

        return $this;
    }

}
