<?php
namespace Mindweb\TrackerKernel\Subscriber;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

interface Loader
{
    /**
     * @param EventDispatcherInterface $dispatcher
     * @param array $subscribers
     */
    public function load(EventDispatcherInterface $dispatcher, array $subscribers);
} 