<?php
namespace Mindweb\TrackerKernel\Subscriber;

use Mindweb\TrackerKernel\Configuration\Config;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

interface Loader
{
    /**
     * @param EventDispatcherInterface $dispatcher
     * @param array $subscribers
     * @param Config $configuration
     */
    public function load(EventDispatcherInterface $dispatcher, array $subscribers, Config $configuration);
} 