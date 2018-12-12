<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;
use App\Category;

class ThreadController extends Controller
{
    public function create()
    {
    	$categories = Category::get();
        return view('thread-add',compact('categories'));
    }

    public function store(Request $request)
    {
        $thread = new Thread;
        $thread->create($request->all());

        return redirect('/');;
    }

    public function show(){

        return view('thread-view');
    }

}
