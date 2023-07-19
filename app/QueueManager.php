<?php

namespace App;

class QueueManager
{
    public static function dispatchTask($job):void
    {
        dispatch($job);
    }
}
