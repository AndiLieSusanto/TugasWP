<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $category = new Category();
        $category->description = 'K-pop';
        $category->save();

        $category = new Category();
        $category->description = 'Rocket Science';
        $category->save();

        $category = new Category(); 
        $category->description = 'Laravel Programming';
        $category->save();
    }
}
