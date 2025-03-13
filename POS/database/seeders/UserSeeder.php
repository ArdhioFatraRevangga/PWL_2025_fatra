<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_user')->insert([
            [
                'username' => 'admin',
                'password' => Hash::make('1234'),
                'level_id' => 1
            ],
            [
                'username' => 'user1',
                'password' => Hash::make('user123'),
                'level_id' => 2
            ],
            [
                'username' => 'manager',
                'password' => Hash::make('manager123'),
                'level_id' => 3
            ]
        ]);
    }
}
