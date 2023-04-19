<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'subject' => 'chemistry',
                'topic' => 'Atom',
                'questions' => '1.Are two atoms of the same element identical?

                2.Can water stay liquid below zero degrees Celsius?
                
                3.Can you light a diamond on fire?
                
                4.How bad of an alcoholic do you 5.have to be to have your brain affected?
                
                6.How can glass be a liquid if it\'s so hard?
                
                7.How do I know if something is an acid so I can avoid eating it?',
                'pdf_link' => NULL,
                'scheduled_on' => '2023-05-19 09:00:00',
                'created_at' => now(),
            ],
            [
                'subject' => 'Mathematics',
                'topic' => 'Algebra',
                'questions' => 'What is a quadratic equation?',
                'pdf_link' => NULL,
                'scheduled_on' => '2023-05-20 09:00:00',
                'created_at' => now(),
            ],
            [
                'subject' => 'Science',
                'topic' => 'Cells',
                'questions' => 'What is cells?',
                'pdf_link' => NULL,
                'scheduled_on' => '2023-05-21 10:30:00',
                'created_at' => now(),
            ],
           
        ];
    
        DB::table('test')->insert($data);
    
    }
}
