<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'=> 'Chadie Gil S. Augis',
                'email'=> 'chad@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('test123456')
            ],
            [
                'name'=> 'Will Smith',
                'email'=> 'smith@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('smith123456')
            ],

            [
                'name'=> 'Beluga Cat',
                'email'=> 'beluga@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('beluga123456')
            ],
            [
                'name'=> 'Tree Cat',
                'email'=> 'catd@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password'=> bcrypt('cat123456')
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
