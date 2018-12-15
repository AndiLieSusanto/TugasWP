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
        $user = new User();
        $user->name = 'member';
        $user->email = 'member@email.com';
        $user->password = '123456';
        $user->phone = '123456789';
        $user->address = 'Jalan Sandang D5A';
        $user->profile_picture = 'images/profile_default.jpg';
        $user->birth_date = now();
        $user->role_id = '1';
        $user->gender_id = '1';
        $user->save();

        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@email.com';
        $user->password = '123456';
        $user->phone = '123456789';
        $user->address = 'Jalan Sandang D5A';
        $user->profile_picture = 'images/profile_default.jpg';
        $user->birth_date = now();
        $user->role_id = '2';
        $user->gender_id = '2';
        $user->save();
    }
}
