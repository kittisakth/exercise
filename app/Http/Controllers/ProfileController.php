<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show() {
        return view('profile.index', [ "user_profile" =>  User::find(Auth::user()->id)]);
    }

    public function detail($id) {
        if (Auth::user()->isAdmin()) {
            return view('profile.index', [ "user_profile" =>  User::find($id)]);
        } else {
            abort(403, 'Access denied');
        }
    }

    public function update(Request $request) {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'firstname' => 'required',
            'lastname' => 'required'
        ]);
        if (Auth::user()->isAdmin() && Auth::user()->id != $request->input('user_id')) {
            $validatedData = $request->validate([
                'type' => 'required'
            ]);
        }
        $profile_img = $request->file('profile_img');
        if (Auth::user()->isAdmin()) {
            $update = User::updateProfile($request->all(), $profile_img);
            if ($update) {
                $request->session()->flash('status', 'Profile saved.');
                return  redirect()->route('profile_detail', [ 'id' => $request->input('user_id')]);
            }
            return $update;
        } else {
            if (Auth::user()->id == $request->input('user_id')) {
                $update = User::updateProfile($request->all(), $profile_img);
                if ($update) {
                    $request->session()->flash('status', 'Profile saved.');
                    return  redirect()->route('profile');
                }
            }
        }
    }
}
