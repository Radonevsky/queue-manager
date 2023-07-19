<?php

namespace App\Http\Controllers;

use App\Jobs\PrepareJob;
use App\QueueManager;

class PrepareController extends Controller
{
    public function prepare(): void
    {
        $prepare = new PrepareJob('Preparing...');
        QueueManager::dispatchTask($prepare);
    }
}
