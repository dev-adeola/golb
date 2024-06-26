<?php

namespace App\Console;

use App\Models\Newsletter;
use App\Models\Subscriber;
use App\Mail\Weeklyletters;
use Illuminate\Support\Facades\Mail;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function() {
            $latest = Newsletter::where('status', 'published')->latest()->first();
            $subscriber = Subscriber::where('subscribed', 'subscribed')->get();

            foreach($subscriber as $subscribed) {
                  Mail::to($subscribed->email)->later(now()->addMinutes(5), new Weeklyletters($latest->subject, $latest->content)); 
            }

        })->fridays('8:00');

        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
