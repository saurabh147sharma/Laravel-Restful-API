<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([[
            'productName' => 'A',
            'brand' => 'Apple'
        ],[
            'productName' => 'S',
            'brand' => 'Samsung'
        ],[
            'productName' => 'L',
            'brand' => 'LG'
        ]]);
    }
}
