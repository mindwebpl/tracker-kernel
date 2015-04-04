<?php
namespace Mindweb\TrackerKernel\Subscriber;

use Mindweb\TrackerKernel\Configuration\Config;

interface Loader
{
    public function __construct(Config $config);

    public function load();
} 