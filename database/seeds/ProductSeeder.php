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
    public function run()
    {
           DB::table('products')->insert([
              ['name' => 'All Make-Up'],
              ['name' => 'Oogschaduw Kwasten'],
              ['name' => 'Full cover Concealer'],
              ['name' => 'Full cover Foundation'],
              ['name' => 'Eyeshadow pallet']
           ]);
    }
}