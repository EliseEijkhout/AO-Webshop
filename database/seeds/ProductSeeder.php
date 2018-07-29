<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    /** 
Producten worden niet meer uitgelezen.. Catergories wel
    */
    public function run()
    {
      $products = new \App\Product{[
          'imagePath' => ...,
          'name' => 'Make-up',
          'price' => 10
      ]};
           DB::table('products')->insert([
              ['name' => 'All Make-Up',
               'price' => 10],
              ['name' => 'Oogschaduw Kwasten',
                'price' => 15],
              ['name' => 'Full cover Concealer',
               'price' => 25],
              ['name' => 'Full cover Foundation',
                'price' => 20],
              ['name' => 'Eyeshadow pallet']
           ]);
    }
}