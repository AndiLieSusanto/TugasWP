<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie; // untuk set cookie
class LoginController extends Controller
{
    public function login(Request $request)
    {
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
