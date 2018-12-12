<?php

use Illuminate\Database\Seeder;

class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('threads')->insert([
            'name' => 'The most beautiful k-drama artist',
            'description' => 'This forum discuss about all k-drama artist',
            'status' => random_int(0, 1),
            'category_id' => random_int(1,50),
            'created_at' => now(),
          	'updated_at' => now()
        ]);
        DB::table('threads')->insert([
            'name' => 'Foodtech',
            'description' => 'Discuss about food technology',
            'status' => random_int(0, 1),
            'category_id' => random_int(1,50),
            'created_at' => now(),
          	'updated_at' => now()
        ]);
        DB::table('threads')->insert([
            'name' => 'Brain Work',
            'description' => 'Discuss about how brain work',
            'status' => random_int(0, 1),
            'category_id' => random_int(1,50),
            'created_at' => now(),
          	'updated_at' => now()
        ]);
        DB::table('threads')->insert([
            'name' => 'Fortnite Week 8 Challenges Guide',
            'description' => 'Guides about week 8 challenges',
            'status' => random_int(0, 1),
            'category_id' => random_int(1,50),
            'created_at' => now(),
          	'updated_at' => now()
        ]);
        DB::table('threads')->insert([
            'name' => 'Issues with launching rocket',
            'description' => 'Discuss issues related to launching rocket',
            'status' => random_int(0, 1),
            'category_id' => random_int(1,50),
            'created_at' => now(),
          	'updated_at' => now()
        ]);
        DB::table('threads')->insert([
            'name' => 'Fortnite Bugs',
            'description' => 'Discuss about any bugs in fortnite',
            'status' => random_int(0, 1),
            'category_id' => random_int(1,50),
            'created_at' => now(),
          	'updated_at' => now()
        ]);
    }
}
