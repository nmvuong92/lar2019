<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //reference to model and create 50 records in database
         factory(App\Category::class, 5)->create(); 
    }
}
