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
        DB::table('products')->delete();
  
        DB::table('products')->insert([
            'title' => 'T-Shirt The BOOS',
            'image' => 'https://placeimg.com/640/480/tech',
            'description' => 'A lovely t-shirt',
            'price' => '10.00'
        ]);
        DB::table('products')->insert([
            'title' => 'T-Shirt Im a programmer',
            'image' => 'https://placeimg.com/640/480/tech',
            'description' => 'A lovely programmer t-shirt',
            'price' => '22.00',
        ]);
        
        DB::table('products')->insert([
            'title' => 'Lamb',
            'image' => 'https://placeimg.com/640/480/tech',
            'description' => 'The Lamb',
            'price' => '5.00',
        ]);
        
        DB::table('products')->insert([
            'title' => 'Mouse',
            'image' => 'https://placeimg.com/640/480/tech',
            'description' => 'The mouse',
            'price' => '2.00',
        ]);
        
        DB::table('products')->insert([
            'title' => 'Computer',
            'image' => 'https://placeimg.com/640/480/tech',
            'description' => 'The Computer',
            'price' => '1322.00',
        ]);
    }
}
