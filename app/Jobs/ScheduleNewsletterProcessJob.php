<?php

namespace App\Jobs;

use App\Models\Newsletter;
use App\Models\Subscriber;
use App\Mail\Weeklyletters;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ScheduleNewsletterProcessJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $subject;
    public $content;
    public $status;
    public $publisheddate;

    /**
     * Create a new job instance.
     */
    public function __construct($subject, $content, $status, $publisheddate)
    {
        $this->subject          = $subject;
        $this->content          = $content;
        $this->status           = $status;
        $this->publisheddate    = $publisheddate;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
            $subscriber = Subscriber::where('subscribed', 'subscribed')->get();

            foreach($subscriber as $subscribed) {
                  Mail::to($subscribed->email)->later(now()->addMinutes(5), new Weeklyletters($this->subject, $this->content)); 
            }
    }
}
