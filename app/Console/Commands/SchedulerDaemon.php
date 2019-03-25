<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

/**
 * Runs the scheduler every 60 seconds as expected to be done by cron.
 */
class SchedulerDaemon extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'schedule:daemon {--sleep=60}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Call the scheduler every minute.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        while (true) {
            $this->info('Calling scheduler');

            $this->call('schedule:run');

            sleep($this->option('sleep'));
        }
    }
}