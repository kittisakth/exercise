<?php

namespace App\Http\Controllers;
use App\history;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AlphabetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function insert() {
        return view('alphabet.index');
    }

    public function count(Request $request) {
        $validatedData = $request->validate([
            'sentence' => 'required',
        ]);
        $sentence = $request->input('sentence');
        $new_history = new history();
        $new_history->sentence = $sentence;
        $id = $new_history->insertHistory(Auth::user()->id);
        return redirect()->route('show', [ 'id' => $id]);
    }

    public function detail_history($id) {
        $history = history::getById($id);
        if ($history) {
            return view('alphabet.count', $history->getCounting());
        } else {
            abort(403, 'Access denied');
        }
    }

    public static function history() {
        $histories = history::getHitories();
        return view('alphabet.history', [ "histories" => $histories]);
    }
}
