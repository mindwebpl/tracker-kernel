<?php
namespace Mindweb\TrackerKernel\Configuration;

use SplFileInfo;

interface File
{
    /**
     * @param SplFileInfo $fileInfo
     */
    public function __construct(SplFileInfo $fileInfo);

    /**
     * @return string
     */
    public function getPath();

    /**
     * @param string $env
     * @return string
     */
    public function getFile($env);
} 