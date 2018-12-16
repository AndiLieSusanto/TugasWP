<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;
use App\Category;
use App\Post;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
class ThreadController extends Controller
{
    public function create()
    {
    	$categories = Category::get();

        if(session('role') == 'member')
        {
            return view('member.thread-add',compact('categories'));
        }
        else if(session('role') == 'admin')
        {
            return view('admin.thread-add',compact('categories'));
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'category' => 'required'
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput(Input::all());
        }

        $thread = new Thread;
        $thread->name = $request->name;
        $thread->description = $request->description;
        $thread->category_id = $request->category;
        $thread->status = 1;
        $thread->save();
        $user_id = Session('user_id');
        $thread->user()->sync([$user_id]);

        if(session('role') == 'member')
        {
            return redirect('member/');
        }
        else if(session('role') == 'admin')
        {
            return redirect('admin/');
        }
    }

    public function show(){

        return view('thread-view');
    }

    public function threadShow(Request $request){
        $thread = Thread::where('id','=',$request->id)->first();

        $role = session('role','guess');
        if($role == 'guess')
        {
            return view('thread-view',compact('thread'));
        }
        else if($role == 'member')
        {
            return view('member.thread-view',compact('thread'));
        }
    }

    public function addPost(Request $request)
    {
        $post = new Post;
        $post->description = $request->post;
        $post->thread_id = $request->thread_id;
        $post->save();
        $post->user()->sync([session('user_id')]);

        return redirect()->back();
    }
}
