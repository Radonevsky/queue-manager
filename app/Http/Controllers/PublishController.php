<?php

namespace App\Http\Controllers;

use App\Jobs\PublishJob;
use App\QueueManager;

class PublishController extends Controller
{
    public function publish(): void
    {
        $prepare = new PublishJob('Publishing...');
        QueueManager::dispatchTask($prepare);
    }
}
