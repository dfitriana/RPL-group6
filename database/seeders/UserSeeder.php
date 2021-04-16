<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Administrator',
            'level' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234'),
            'remember_token' => Str::random(60),
        ]);
    }
}
