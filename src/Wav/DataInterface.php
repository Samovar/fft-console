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
interface DataInterface
{
    /**
     * Get the value of Subchunk.
     *
     * @return mixed
     */
    public function getSubchunk2ID();

    /**
     * Set the value of Subchunk.
     *
     * @param mixed subchunk2ID
     * @param mixed $subchunk2ID
     *
     * @return self
     */
    public function setSubchunk2ID($subchunk2ID);

    /**
     * Get the value of Subchunk Size.
     *
     * @return mixed
     */
    public function getSubchunk2Size();

    /**
     * Set the value of Subchunk Size.
     *
     * @param mixed subchunk2Size
     * @param mixed $subchunk2Size
     *
     * @return self
     */
    public function setSubchunk2Size($subchunk2Size);
}
