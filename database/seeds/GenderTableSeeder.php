<?php

use Illuminate\Database\Seeder;
use App\Gender;
class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gender = new Gender();
        $gender->description = 'Male';
        $gender->save();

        $gender = new Gender(); 
        $gender->description = 'Female';
        $gender->save();
    }
}
