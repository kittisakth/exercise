<?php

use Illuminate\Database\Seeder;
use App\user;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Kittisak Tehpsit',
            'firstname' => 'kittisak',
            'lastname' => 'thepsit',
            'email' => 'kittisak.thepsit@gmail.com',
            'password' => Hash::make('123456'),
            'level' => 'Administrator'
        ]);
        User::create([
            'name' => 'test user1',
            'firstname' => 'test',
            'lastname' => 'user1',
            'email' => 'test1@gmail.com',
            'password' => Hash::make('123456'),
            'level' => 'Standard'
        ]);
        User::create([
            'name' => 'test user2',
            'firstname' => 'test',
            'lastname' => 'user2',
            'email' => 'test2@gmail.com',
            'password' => Hash::make('123456'),
            'level' => 'Standard'
        ]);
    }
}
