<?php
namespace Mindweb\TrackerKernel\Configuration;

use ArrayAccess;
use Serializable;

interface Config extends ArrayAccess, Serializable
{
    /**
     * @return array
     */
    public function asArray();
} 