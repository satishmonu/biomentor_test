<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Tests;
use PDF;
class UpdateLinkTableCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {   
        $tests = Tests::where('scheduled_on', '>', Carbon::now())
        ->where('scheduled_on', '<=', Carbon::now()->addMinutes(15))
        ->whereNull('pdf_link')
        ->get();
       
        dd($tests);
        // foreach ($tests as $test) {
        // Mail::to($test->user->email)->send(new TestReminder($test));
        // $test->reminder_sent = true;
        // $test->
        // save();
        // }
        return Command::SUCCESS;
    }
}
