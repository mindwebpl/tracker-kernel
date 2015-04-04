<?php
namespace Mindweb\TrackerKernel\Configuration;

use SplFileInfo;

interface Cache
{
    /**
     * @param SplFileInfo $fileInfo
     */
    public function __construct(SplFileInfo $fileInfo);

    /**
     * @return string
     */
    public function getPath();
} 