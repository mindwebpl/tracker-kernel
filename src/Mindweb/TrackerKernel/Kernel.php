<?php
namespace Mindweb\TrackerKernel;

interface Kernel
{
    /**
     * @param string $env
     * @param bool $debug
     */
    public function __construct($env, $debug = false);

    /**
     * @param Configuration\File $config
     * @param Configuration\Cache $cache
     */
    public function loadConfiguration(Configuration\File $config, Configuration\Cache $cache);

    /**
     * @param Subscriber\Loader $loader
     * @param Configuration\Cache $cache
     */
    public function registerSubscribers(Subscriber\Loader $loader, Configuration\Cache $cache);

    public function registerEndPoint();

    public function run();
} 