<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;

class PrepareJob implements ShouldQueue
{
    protected string $message;
    /**
     * Create a new job instance.
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        sleep(3);
        info($this->message);
    }
}
