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
interface DataInterface
{

    /**
     * Get the value of Subchunk
     *
     * @return mixed
     */
    public function getSubchunk2ID();

    /**
     * Set the value of Subchunk
     *
     * @param mixed subchunk2ID
     *
     * @return self
     */
    public function setSubchunk2ID($subchunk2ID);

    /**
     * Get the value of Subchunk Size
     *
     * @return mixed
     */
    public function getSubchunk2Size();

    /**
     * Set the value of Subchunk Size
     *
     * @param mixed subchunk2Size
     *
     * @return self
     */
    public function setSubchunk2Size($subchunk2Size);

}
