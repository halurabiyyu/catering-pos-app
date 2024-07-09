<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $levels = [
            [
                'level_kode' => 'ADM',
                'level_nama' => 'Admin',
                'created_at' => now(),
                'updated_at' => null
            ],
            [
                'level_kode' => 'CSHR',
                'level_nama' => 'Cashier',
                'created_at' => now(),
                'updated_at' => null
            ],
            [
                'level_kode' => 'CUST',
                'level_nama' => 'Customer',
                'created_at' => now(),
                'updated_at' => null
            ],
        ];

        DB::table('levels')->insert($levels);
    }
}
