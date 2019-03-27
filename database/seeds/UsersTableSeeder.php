<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(User::class, 10)->create();   
        // DB::table('users')->insert([
        //     'name' => 'user2',
        //     'email' => 'user2@email.com',
        //     'password' => bcrypt('password'),
        //     'avatar' => 'https://www.w3schools.com/csS/paris.jpg'
        // ]);
         DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'avatar' => 'https://www.w3schools.com/csS/paris.jpg',
            'role' => config('setting.admin') || 1
        ]);

    }
}
