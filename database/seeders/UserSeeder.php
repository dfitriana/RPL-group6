<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

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
        // User::create([
        //     'name' => 'Administrator',
        //     'level' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('1234'),
        //     'remember_token' => Str::random(60),
        // ]);
        DB::table('users')->insert([
            [
                'name' => 'Purwanto',
                'nip' => '0',
                'level' => 'Administrator',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('1234'),
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'Alfat Motorik',
                'nip' => '0',
                'level' => 'Operator',
                'email' => 'operator@gmail.com',
                'password' => bcrypt('1234'),
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'Prof. Dr. Susilo, M.',
                'nip' => '130529515',
                'level' => 'Evaluator',
                'email' => 'evaluator@gmail.com',
                'password' => bcrypt('1234'),
                'remember_token' => Str::random(60),
            ],
            [
                'name' => 'Dra. DWI YULIANTI, M. Si.',
                'nip' => '131404299',
                'level' => 'Evaluator',
                'email' => 'evaluator2@gmail.com',
                'password' => bcrypt('1234'),
                'remember_token' => Str::random(60),
            ]
            ]);
    }
}
