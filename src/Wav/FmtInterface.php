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
     *
     * @return self
     */
    public function setExtraParams($extraParams);
}
