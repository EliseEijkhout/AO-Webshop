<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('category')->insert([
              ['name' => 'Make-Up'],
              ['name' => 'Make-Up Kwasten'],
              ['name' => 'Concealer'],
              ['name' => 'Foundation'],
              ['name' => 'Eyeshadow']
           ]);
    }
}