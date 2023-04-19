<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Dompdf\Dompdf;

use Illuminate\Support\Facades\Storage;

class UpdateLinkTableJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {    
        
        $questions = Tests::where('scheduled_on', '>', Carbon::now())
        ->where('scheduled_on', '<=', Carbon::now()->addMinutes(15))
        ->whereNull('pdf_link')
        ->get();
       dd("Hey");
        // Create a new PDF instance
        $pdf = new Dompdf();

        // Render the view into HTML
        $pdf->loadView('test.question-pdf', compact('questions'));

        // Generate the PDF file
        $pdfFile = 'question-' . time() . '.pdf';
        Storage::put('public/' . $pdfFile, $pdf->output());

        // Update the question data in the database
        DB::table('tests')->update(['pdf_link' => $pdfFile]);

        return true;

    }
}
