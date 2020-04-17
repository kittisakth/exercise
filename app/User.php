<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin() {
        return $this->level == 'Administrator';
    }
    
    public function getHobby() {
        return json_decode($this->hobby);
    }

    public static function updateProfile($update_detail, $profile_img) {
        $user = User::find($update_detail['user_id']);

        // Detail Update
        $user->firstname = $update_detail["firstname"];
        $user->lastname = $update_detail["lastname"];
        if (Auth::user()->isAdmin() && Auth::user()->id != $update_detail['user_id']) {
            $user->level = $update_detail["type"];
        }
        $user->birthdate = $update_detail["birthdate"];
        $user->address = $update_detail["address"];

        // Hobby Update
        $hobby = [
            "sport" => isset($update_detail["sport"]) && $update_detail["sport"] == 'on' ? true: false,
            "game" => isset($update_detail["game"]) && $update_detail["game"] == 'on' ? true: false,
            "reading" => isset($update_detail["reading"]) && $update_detail["reading"] == 'on' ? true: false,
            "gardening" => isset($update_detail["gardening"]) && $update_detail["gardening"] == 'on' ? true: false,
            "movie" => isset($update_detail["movie"]) && $update_detail["movie"] == 'on' ? true: false,
        ];
        $user->hobby = json_encode($hobby);

        // Image update
        if ($profile_img != null && $profile_img != '') {
            Storage::delete($user->img_path);
            $path = $profile_img->store('public');
            $user->img_path = $path;
        }

        $result = $user->save();
        return $result;
    }
}
