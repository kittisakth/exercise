<?php

use Illuminate\Database\Seeder;
use App\history;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $his1 = new History();
        $his2 = new History();
        $his3 = new History();
        $his1->sentence = "Test Sentence";
        $his2->sentence = "This is my sentence";
        $his3->sentence = "I&I Group Public Company Limited";
        $his1->insertHistory();
        $his2->insertHistory();
        $his3->insertHistory();
    }
}
