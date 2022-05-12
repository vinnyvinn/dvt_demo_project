<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
           'name' =>'John',
           'email' => 'john@test.com',
           'password' => Hash::make('12345678')
       ]);
        User::create([
            'name' =>'James',
            'email' => 'james@test.com',
            'password' => Hash::make('12345678')
        ]);

        User::create([
            'name' =>'Peter',
            'email' => 'peter@test.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
