<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Tests;
use PDF;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
class UpdateLinkTableCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:pdflink';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test Pdf link updated';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {   
        $questions = Tests::where('pdf_link', '=', NULL)
                    ->get()
                    ->all();
      
        $currdatetime= Carbon::now()->format('Y-m-d H:i:s');
       
        foreach($questions as $question){
            
             $to = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $question->scheduled_on);
             $from = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $currdatetime);

            $diff_in_minutes = $to->diffInMinutes($from);
            Log::info($diff_in_minutes);

            if($diff_in_minutes < 15){

                // share data to view
                view()->share('question',$question);
                $pdf = PDF::loadView('pdf.test-question-pdf', compact('question'));
                // download PDF file with download method
                $pdfFile = 'question-' . time() . '.pdf';

                $path= Storage::put('public/pdf/'.$pdfFile, $pdf->output());

                $url = Storage::path('public/pdf/'.$pdfFile);
             
                //Update the question data in the database
                $quest_id =$question['id'];
                $Update = Tests::find($quest_id);
                $Update->pdf_link = $url;
                $Update->save();
              
                return true;
                
                
            }
            
            
        }

       
    }
}
