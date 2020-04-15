<?php

namespace App\Http\Controllers;
use App\history;

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
        $sentence = $request->input('sentence');
        $new_history = new history();
        $new_history->sentence = $sentence;
        $id = $new_history->insertHistory();
        return redirect()->route('show', [ 'id' => $id]);
    }

    public function detail_history($id) {
        $history = history::find($id);
        return view('alphabet.count', $history->getCounting());
    }

    public static function history() {
        $histories = history::get();
        return view('alphabet.history', [ "histories" => $histories]);
    }
}
