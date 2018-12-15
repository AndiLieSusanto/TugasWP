<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'member',
            'email' => 'member@email.com',
            'password' => '123456',
            'phone' => '123456789',
            'address' => 'Jalan sandang D5a',
            'profile_picture' => 'images/profile_default',
            'birth_date' => now(),
            'role_id' => '1',
            'gender_id' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => '123456',
            'phone' => '123456789',
            'address' => 'Jalan KH Syahdan',
            'profile_picture' => 'images/profile_default',
            'birth_date' => now(),
            'role_id' => '2',
            'gender_id' => '1',
        ]);
    }
}
