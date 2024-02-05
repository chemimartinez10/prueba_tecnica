<?php

namespace App\Jobs;

use App\Models\Email;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $email_id;
    /**
     * Create a new job instance.
     */
    public function __construct($email_id)
    {
        $this->email_id = $email_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //send email simulation
        sleep(rand(10, 40));
        $email = Email::find($this->email_id);
        $email->status=true;
        $email->save();
    }
}
