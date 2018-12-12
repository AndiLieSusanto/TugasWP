<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(0,100) as $i) {
            \Illuminate\Support\Facades\DB::table('products')->insert([
                'id' => random_int(0,100),
                'name' => str_random(100),
                'price' => random_int(1,10000)
            ]);
        }
    }
}
