<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$threads = Thread::paginate(5);
        return view('home',compact('threads'));
    }
}
