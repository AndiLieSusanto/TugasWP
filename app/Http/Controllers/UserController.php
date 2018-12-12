<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Redirect;
use App\User;
use Carbon\Carbon;
use App\Rules\containStreet;

class UserController extends Controller
{
    public function create()
    {
    	return view('register');
    }

    public function store(Request $request){
        $year = date('Y-m-d', strtotime('-12 years'));

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' =>'required|same:password',
            'phone' => 'required|numeric',
            'address' => ['required',new containStreet],
            'gender' => 'required',
            'photo' => 'required|mimes:jpeg,png,jpg',
            'birthday' => 'required|date|before:-13 years' ,
            'agree' => 'required|accepted'
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput(Input::all());
        }

        //image
        $image = $request->file('photo');
        $fileName = uniqid('img_'); // for unique
        $path = public_path('images');
        $image->move($path,$fileName);
        //----

        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
        $user->profile_picture = $fileName;
        $temp = Carbon::parse($request->get('birthday'));
        $temp = $temp->format('Y-m-d');
        $user->birth_date = $temp;
        $user->role_id = 1;
        $user->gender_id = 1;
        $user->save();

        return redirect(url('/'));

    }
}
