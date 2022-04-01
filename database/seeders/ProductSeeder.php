<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        DB::table('products')->insert([

            [
                'name' => 'TV',
                'description' => 'Best TV',
                'image' => 'game.png',
                'price' => '1000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'name' => 'iPhone',
                'description' => 'Best iPhone',
                'image' => 'safe.png',
                'price' => '999',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'name' => 'Chromecast',
                'description' => 'Best Chromecast',
                'image' => 'submarine.png',
                'price' => '30',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [
                'name' => 'Glasses',
                'description' => 'Best Glasses',
                'image' => 'game.png',
                'price' => '100',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);    
    }
}
