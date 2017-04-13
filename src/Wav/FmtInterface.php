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
interface FmtInterface
{
    /**
     * Get the value of Subchunk.
     *
     * @return mixed
     */
    public function getSubchunk1ID();

    /**
     * Set the value of Subchunk.
     *
     * @param mixed subchunk1ID
     * @param mixed $subchunk1ID
     *
     * @return self
     */
    public function setSubchunk1ID($subchunk1ID);

    /**
     * Get the value of Subchunk Size.
     *
     * @return mixed
     */
    public function getSubchunk1Size();

    /**
     * Set the value of Subchunk Size.
     *
     * @param mixed subchunk1Size
     * @param mixed $subchunk1Size
     *
     * @return self
     */
    public function setSubchunk1Size($subchunk1Size);

    /**
     * Get the value of Audio Format.
     *
     * @return mixed
     */
    public function getAudioFormat();

    /**
     * Set the value of Audio Format.
     *
     * @param mixed audioFormat
     * @param mixed $audioFormat
     *
     * @return self
     */
    public function setAudioFormat($audioFormat);

    /**
     * Get the value of Num Channels.
     *
     * @return mixed
     */
    public function getNumChannels();

    /**
     * Set the value of Num Channels.
     *
     * @param mixed numChannels
     * @param mixed $numChannels
     *
     * @return self
     */
    public function setNumChannels($numChannels);

    /**
     * Get the value of Sample Rate.
     *
     * @return mixed
     */
    public function getSampleRate();

    /**
     * Set the value of Sample Rate.
     *
     * @param mixed sampleRate
     * @param mixed $sampleRate
     *
     * @return self
     */
    public function setSampleRate($sampleRate);

    /**
     * Get the value of Byte Rate.
     *
     * @return mixed
     */
    public function getByteRate();

    /**
     * Set the value of Byte Rate.
     *
     * @param mixed byteRate
     * @param mixed $byteRate
     *
     * @return self
     */
    public function setByteRate($byteRate);

    /**
     * Get the value of Block Align.
     *
     * @return mixed
     */
    public function getBlockAlign();

    /**
     * Set the value of Block Align.
     *
     * @param mixed blockAlign
     * @param mixed $blockAlign
     *
     * @return self
     */
    public function setBlockAlign($blockAlign);

    /**
     * Get the value of Bits Per Sample.
     *
     * @return mixed
     */
    public function getBitsPerSample();

    /**
     * Set the value of Bits Per Sample.
     *
     * @param mixed bitsPerSample
     * @param mixed $bitsPerSample
     *
     * @return self
     */
    public function setBitsPerSample($bitsPerSample);

    /**
     * Get the value of Extra Param Size.
     *
     * @return mixed
     */
    public function getExtraParamSize();

    /**
     * Set the value of Extra Param Size.
     *
     * @param mixed extraParamSize
     * @param mixed $extraParamSize
     *
     * @return self
     */
    public function setExtraParamSize($extraParamSize);

    /**
     * Get the value of Extra Params.
     *
     * @return mixed
     */
    public function getExtraParams();

    /**
     * Set the value of Extra Params.
     *
     * @param mixed extraParams
     * @param mixed $extraParams
     *
     * @return self
     */
    public function setExtraParams($extraParams);
}
