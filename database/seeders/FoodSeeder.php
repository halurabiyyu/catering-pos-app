<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $foods = [
            ['FOOD001', 'Apple', 1.20, 'Fresh red apples', 1],
            ['FOOD002', 'Banana', 0.50, 'Ripe yellow bananas', 1],
            ['FOOD003', 'Carrot', 0.80, 'Fresh orange carrots', 2],
            ['FOOD004', 'Broccoli', 1.50, 'Fresh green broccoli', 2],
            ['FOOD005', 'Chicken Breast', 5.00, 'Boneless chicken breast', 3],
            ['FOOD006', 'Beef Steak', 10.00, 'Juicy beef steak', 3],
            ['FOOD007', 'Salmon', 12.00, 'Fresh Atlantic salmon', 4],
            ['FOOD008', 'Shrimp', 15.00, 'Jumbo shrimp', 4],
            ['FOOD009', 'Milk', 1.50, 'Whole milk', 5],
            ['FOOD010', 'Cheese', 2.50, 'Cheddar cheese', 5],
            ['FOOD011', 'Rice', 1.00, 'White rice', 6],
            ['FOOD012', 'Pasta', 1.20, 'Italian pasta', 6],
            ['FOOD013', 'Chips', 1.00, 'Potato chips', 7],
            ['FOOD014', 'Chocolate', 2.00, 'Dark chocolate', 7],
            ['FOOD015', 'Cola', 1.00, 'Carbonated soft drink', 8],
            ['FOOD016', 'Orange Juice', 2.00, 'Fresh orange juice', 8],
            ['FOOD017', 'Pepper', 0.80, 'Black pepper', 9],
            ['FOOD018', 'Cinnamon', 0.70, 'Ground cinnamon', 9],
            ['FOOD019', 'Ketchup', 1.00, 'Tomato ketchup', 10],
            ['FOOD020', 'Mustard', 1.00, 'Yellow mustard', 10],
            ['FOOD021', 'Strawberry', 2.00, 'Fresh strawberries', 1],
            ['FOOD022', 'Lettuce', 1.00, 'Fresh lettuce', 2],
            ['FOOD023', 'Pork Chops', 6.00, 'Tender pork chops', 3],
            ['FOOD024', 'Tuna', 11.00, 'Canned tuna', 4],
            ['FOOD025', 'Butter', 1.50, 'Creamy butter', 5],
        ];
        foreach ($foods as $food) {
            DB::table('food')->insert([
                'food_code' => $food[0],
                'food_name' => $food[1],
                'food_price' => $food[2],
                'food_desc' => $food[3],
                'category_id' => $food[4],
                'created_at' => now(),
                'updated_at' => null,
            ]);
        }
    }
}
