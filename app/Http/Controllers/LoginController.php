<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Cookie;
class LoginController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $data = User::where('email',$email)->first();

        if(!empty ($data))
        {
            if($data->password == $password)
            {
                $role = $data->role();

                session(['name' => $data->name]);
                session(['role' => $role->description]);
                session(['user_id' => $data->id]);
            }
            else
            {
                return redirect()->back()->with('alert','Invalid Password!');
            }
        }
        else
        {
            return redirect()->back()->with('alert','Invalid Password!');
        }

        //Cookie::queue(Cookie::make('name', 'value', 'minutes')); set cookies
        // session(['key' => 'value']); set session

        
    }

    public function index()
    {
    	return view('login');
    }
}
