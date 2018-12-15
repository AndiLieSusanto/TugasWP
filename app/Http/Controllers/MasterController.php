<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;

class MasterController extends Controller
{


    public function index()
    {
        //
        $users = User::paginate(5);
        return view('admin.master-user',compact('users'));
    }
    //
    public function create()
    {
    	$roles = Role::get();
        return view('admin.master-add-user',compact('roles'));
    }

    public function store()
    {
        echo "ok";
    }

    public function edit($id)
    {
        //
        $old = User::find($id);
        return view('admin.master-update-user',compact('old'));
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

}
