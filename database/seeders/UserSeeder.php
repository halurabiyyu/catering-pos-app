<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'level_id' => 1,
                'email' => 'admin1@test.com',
                'username' => 'admin1',
                'nama' => 'Admin 1',
                'password' => Hash::make('admin123'),
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'level_id' => 2,
                'email' => 'kasir1@test.com',
                'username' => 'kasir1',
                'nama' => 'Kasir 1',
                'password' => Hash::make('kasir123'),
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'level_id' => 3,
                'email' => 'cust1@test.com',
                'username' => 'cust1',
                'nama' => 'Customer 1',
                'password' => Hash::make('cust123'),
                'created_at' => now(),
                'updated_at' => null,
            ],
        ];
        DB::table('users')->insert($users);
    }
}
