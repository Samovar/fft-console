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
     * {@inheritdoc}
     */
    public function getSubchunk2ID()
    {
        return $this->subchunk2ID;
    }

    /**
     * {@inheritdoc}
     */
    public function setSubchunk2ID($subchunk2ID)
    {
        $this->subchunk2ID = $subchunk2ID;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSubchunk2Size()
    {
        return $this->subchunk2Size;
    }

    /**
     * {@inheritdoc}
     */
    public function setSubchunk2Size($subchunk2Size)
    {
        $this->subchunk2Size = $subchunk2Size;

        return $this;
    }

}
