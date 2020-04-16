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
        $his1->insertHistory(1);
        $his2->insertHistory(1);
        $his3->insertHistory(1);

        foreach (range(0,10) as $n ) {
            $his = new History();
            $his->sentence = md5($n);
            $his->insertHistory(2);
        }

        foreach (range(0,10) as $n ) {
            $his = new History();
            $his->sentence = md5($n);
            $his->insertHistory(3);
        }

    }
}
