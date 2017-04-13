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
