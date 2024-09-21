<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'email' => 'murat@gmail.com',
                'password' => 12345,
            ],
            [
                'email' => 'murat2@gmail.com',
                'password' => 12345,
            ],
            [
                'email' => 'murat3@gmail.com',
                'password' => 12345,
            ]
        ];
        DB::table('users')->insert($users);
    }
}
