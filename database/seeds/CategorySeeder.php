<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(        
    		DB::table('category')->insert([
           ('name' => 'Make-up'),
           ('name' => 'Make-up kwasten'),
           ('name' => 'Concealers'),
           ('name' => 'Foundation'),
           ('name' => 'Eyeshadow pallet'),

           )
    {
        //
    }
}
