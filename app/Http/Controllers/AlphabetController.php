<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlphabetController extends Controller
{
    public function index() {
        return view('alphabet.index');
    }

    public function count(Request $request) {
        $validatedData = $request->validate([
            'sentence' => 'required',
        ]);
        $alpha_counts = [];
        $sentence = $request->input('sentence');
        $total_alpha = 0;
        $length = strlen($sentence);
        for ($i=0; $i<$length; $i++) {
            if (ctype_alpha($sentence[$i]) ) {
                $total_alpha++;
                $upper_char = strtoupper($sentence[$i]);
                if (!isset($alpha_counts[$upper_char])) {
                    $alpha_counts[$upper_char] = 1;
                } else {
                    $alpha_counts[$upper_char]++;
                }
            }
        }
        ksort($alpha_counts);
        return view('alphabet.count', [ "alpha_counts" => $alpha_counts, "total_alpha" => $total_alpha ]);
    }

}
