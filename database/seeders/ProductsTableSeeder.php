<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Example Product',
            'description' => 'This is an example product',
            'price' => 9.99,
            'category_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
