<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;


class MasterThreadController extends Controller
{
    //
    public function index()
    {

        $threads = Thread::paginate(5);
        return view('admin.master-thread',compact('threads'));
    }
}
