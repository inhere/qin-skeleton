<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2017/12/3
 * Time: 下午11:03
 */

namespace App\Listener;

use Inhere\Event\EventInterface;

/**
 * Class AppListener
 * @package App\Listener
 */
class AppListener
{
    public function start(EventInterface $event): void
    {
        $pos = __METHOD__;

        app('logger')->info("handle the event {$event->getName()} on the: $pos");
    }

    public function beforeRequest(EventInterface $event): void
    {
        $pos = __METHOD__;
        app('logger')->info("handle the event {$event->getName()} on the: $pos");
    }

    public function afterRequest(EventInterface $event): void
    {
        $pos = __METHOD__;

        app('logger')->info("handle the event {$event->getName()} on the: $pos");
    }

    public function stop(EventInterface $event): void
    {
        $pos = __METHOD__;

        app('logger')->info("handle the event {$event->getName()} on the: $pos");
    }

    public static function endOfRun(): void
    {

    }
}
