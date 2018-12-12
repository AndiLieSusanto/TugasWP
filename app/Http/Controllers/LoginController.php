<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;
class LoginController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        //Cookie::queue(Cookie::make('name', 'value', 'minutes')); set cookies
        // session(['key' => 'value']); set session

        session(['name' => 'Andi']);
        session(['role' => 'Admin']);
        session(['user_id' => '1']);
    }

    public function index()
    {
    	return view('login');
    }
}
