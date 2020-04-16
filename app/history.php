<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use App\User;

class history extends Model
{
    protected $table = 'histories';

    public function insertHistory($id) {
        $total_alpha = 0;
        $alpha_counts = [];
        $length = strlen($this->sentence);
        for ($i=0; $i<$length; $i++) {
            if (ctype_alpha($this->sentence[$i]) ) {
                $total_alpha++;
                $upper_char = strtoupper($this->sentence[$i]);
                if (!isset($alpha_counts[$upper_char])) {
                    $alpha_counts[$upper_char] = 1;
                } else {
                    $alpha_counts[$upper_char]++;
                }
            }
        }
        ksort($alpha_counts);
        $this->alpha_count = $total_alpha;
        $this->result = json_encode($alpha_counts);
        $this->user_id = $id;
        $this->save();
        return $this->id;
    }

    public function getStringResult() {
        $results = json_decode($this->result);
        $string_result = "";
        end($results);
        $last_key = key($results);
        foreach ($results as $alpha=>$count) {
            if ($alpha != $last_key)
                $string_result = $string_result.$alpha.' = '.$count.', ';
            else
            $string_result = $string_result.$alpha.' = '.$count;     
        }
        return $string_result;
    }

    public function getCounting() {
        return [ "alpha_counts" => json_decode($this->result), "total_alpha" => $this->alpha_count ];
    }

    public static function getHitories() {
        if (Auth::user()->isAdmin()) {
            return history::paginate(10);
        } else {
            return history::where('user_id', '=', Auth::user()->id)->paginate(10);
        }
    }

    public function getUsername() {
        return User::select('name')->find($this->user_id)->name;
    }

    public static function getById($id) {
        if (Auth::user()->isAdmin()) {
            return history::find($id);;
        } else {
            return history::where('user_id', '=', Auth::user()->id)
                            ->where('id', '=', $id)
                            ->first();
        }

    }
}
