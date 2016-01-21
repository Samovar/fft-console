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
interface WavReaderInterface
{
    /**
     * Constructor.
     *
     * @param resource      $resource
     * @param RiffInterface $riff
     * @param FmtInterface  $fmt
     * @param DataInterface $data
     */
    public function __construct($resource, RiffInterface $riff, FmtInterface $fmt, DataInterface $data);

    /**
     * Read data.
     *
     * @return WavReaderInterface
     */
    public function read();

    /**
     * Get the value of Riff.
     *
     * @return RiffInterface
     */
    public function getRiff();

    /**
     * Set the value of Riff.
     *
     * @param RiffInterface riff
     *
     * @return WavReaderInterface
     */
    public function setRiff(RiffInterface $riff = null);

    /**
     * Get the value of Fmt.
     *
     * @return FmtInterface
     */
    public function getFmt();

    /**
     * Set the value of Fmt.
     *
     * @param FmtInterface fmt
     *
     * @return WavReaderInterface
     */
    public function setFmt(FmtInterface $fmt = null);

    /**
     * Get the value of Data.
     *
     * @return DataInterface
     */
    public function getData();

    /**
     * Set the value of Data.
     *
     * @param DataInterface data
     *
     * @return WavReaderInterface
     */
    public function setData(DataInterface $data = null);
}
