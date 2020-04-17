<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use App\User;

class UsersController extends Controller
{
    public function all() {
        if (Auth::user()->isAdmin()) {
            return view('users.lists', [ "users" => User::paginate(10) ]);
        }
        else {
            abort(403, 'Access denied');
        }
    }
}
