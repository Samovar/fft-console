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

use Samovar\FFTConsole\BinaryReader;

/**
 * @author Denis Buzdygar <prototype.denis@gmail.com>
 */
class WavReader implements WavReaderInterface
{
    /**
     * @var RiffInterface
     */
    private $riff;

    /**
     * @var FmtInterface
     */
    private $fmt;

    /**
     * @var DataInterface
     */
    private $data;

    /**
     * @var resource
     */
    private $resource;

    /**
     * {@inheritdoc}
     */
    public function __construct($resource, RiffInterface $riff, FmtInterface $fmt, DataInterface $data)
    {
        $this->riff = $riff;
        $this->fmt = $fmt;
        $this->data = $data;
        $this->resource = $resource;
    }

    /**
     * {@inheritdoc}
     */
    public function read()
    {
        $chunkID = BinaryReader::read($this->resource, 'a*', 4);

        if ($chunkID !== 'RIFF') {
            return false;
        }

        $this->riff->setChunkID($chunkID);
        $this->riff->setChunkSize(BinaryReader::read($this->resource, 'V', 4));
        $this->riff->setFormat(BinaryReader::read($this->resource, 'a*', 4));

        $this->fmt->setSubchunk1ID(BinaryReader::read($this->resource, 'a*', 4));
        $this->fmt->setSubchunk1Size(BinaryReader::read($this->resource, 'V', 4));
        $this->fmt->setAudioFormat(BinaryReader::read($this->resource, 'v', 2));
        $this->fmt->setNumChannels(BinaryReader::read($this->resource, 'v', 2));
        $this->fmt->setSampleRate(BinaryReader::read($this->resource, 'V', 4));
        $this->fmt->setByteRate(BinaryReader::read($this->resource, 'V', 4));
        $this->fmt->setBlockAlign(BinaryReader::read($this->resource, 'v', 2));
        $this->fmt->setBitsPerSample(BinaryReader::read($this->resource, 'v', 2));
        $this->fmt->setExtraParamSize(0);
        $this->fmt->setExtraParams(null);

        if ($this->fmt->getAudioFormat() != 1) {
            $this->fmt->setExtraParamSize(BinaryReader::read($this->resource, 'v', 2));
            $this->fmt->setExtraParams(BinaryReader::read($this->resource, 'a*', $this->fmt->getExtraParamSize()));
        }

        $this->data->setSubchunk2ID(BinaryReader::read($this->resource, 'a*', 4));
        $this->data->setSubchunk2Size(BinaryReader::read($this->resource, 'V', 4));

        switch ($this->fmt->getAudioFormat()) {
            case 1:
                $this->fmt->setAudioFormat('PCM');
                break;
            case 2:
                $this->fmt->setAudioFormat('Microsoft ADPCM');
                break;
            case 6:
                $this->fmt->setAudioFormat('ITU G.711 a-law');
                break;
            case 7:
                $this->fmt->setAudioFormat('ITU G.711 µ-law');
                break;
            case 17:
                $this->fmt->setAudioFormat('IMA ADPCM');
                break;
            case 20:
                $this->fmt->setAudioFormat('ITU G.723 ADPCM (Yamaha)');
                break;
            case 49:
                $this->fmt->setAudioFormat('GSM 6.10');
                break;
            case 64:
                $this->fmt->setAudioFormat('ITU G.721 ADPCM');
                break;
            case 80:
                $this->fmt->setAudioFormat('MPEG');
                break;
            case 65536:
                $this->fmt->setAudioFormat('Experimental');
                break;
        }

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getRiff()
    {
        return $this->riff;
    }

    /**
     * {@inheritdoc}
     */
    public function setRiff(RiffInterface $riff = null)
    {
        $this->riff = $riff;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFmt()
    {
        return $this->fmt;
    }

    /**
     * {@inheritdoc}
     */
    public function setFmt(FmtInterface $fmt = null)
    {
        $this->fmt = $fmt;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * {@inheritdoc}
     */
    public function setData(DataInterface $data = null)
    {
        $this->data = $data;

        return $this;
    }
}
