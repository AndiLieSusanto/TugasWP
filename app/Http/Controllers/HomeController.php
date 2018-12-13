<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$threads = Thread::with('category')->paginate(5);
        return view('home',compact('threads'));
    }
    public function indexMember()
    {
    	$threads = Thread::with('category')->paginate(5);
        return view('member.home',compact('threads'));
    }
    public function indexAdmin()
    {
    	$threads = Thread::with('category')->paginate(5);
        return view('admin.home',compact('threads'));
    }
}
