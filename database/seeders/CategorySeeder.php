<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category')->insert([
            [
                'category_code' => 'FRU',
                'category_name' => 'Fruits',
                'created_at' => now()
            ],
            [
                'category_code' => 'VEG',
                'category_name' => 'Vegetables',
                'created_at' => now()
            ],
            [
                'category_code' => 'MT',
                'category_name' => 'Meat',
                'created_at' => now()
            ],
            [
                'category_code' => 'SEA',
                'category_name' => 'Seafood',
                'created_at' => now(),
            ],
            [
                'category_code' => 'DIA',
                'category_name' => 'Dairy',
                'created_at' => now()
            ],
            [
                'category_code' => 'GRN',
                'category_name' => 'Grains',
                'created_at' => now()
            ],
            [
                'category_code' => 'SNK',
                'category_name' => 'Snacks',
                'created_at' => now()
            ],
            [
                'category_code' => 'BEV',
                'category_name' => 'Beverages',
                'created_at' => now(),
            ],
            [
                'category_code' => 'SPC',
                'category_name' => 'Spices',
                'created_at' => now()
            ],
            [
                'category_code' => 'CON',
                'category_name' => 'Condiments',
                'created_at' => now()
            ]
        ]);
    }
}
