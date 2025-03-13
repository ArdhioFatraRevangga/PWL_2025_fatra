<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_level')->insert([
            ['level_name' => 'Admin'],
            ['level_name' => 'User'],
            ['level_name' => 'Manager'],
            ['level_name' => 'Staff']
        ]);
    }
}

