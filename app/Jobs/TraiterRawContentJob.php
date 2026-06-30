<?php

namespace App\Jobs;

use App\Models\RawContent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class TraiterRawContentJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public RawContent $rawContent)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        sleep(5);

        $this->rawContent->update([
            'statut'=>'traite'
        ]);
    }
}
