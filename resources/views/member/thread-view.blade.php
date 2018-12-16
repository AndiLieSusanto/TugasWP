@extends('components.master')

@section('title','Thread Forum')

@section('content')

	<div class="card mb-5">
		<div class="container card-header">
			<div class="row " style="padding: 0; padding: 10px;">
				<h4 class="col-lg-11 mb-0">{{$thread->name}}</h4>
				@if($thread->status == 0)
					<span class="col-lg-1 badge badge-danger text-light rounded text-lg-center ">Closed</span>
				@elseif($thread->status == 1)
					<span class="col-lg-1 badge badge-success text-light rounded text-lg-center ">Open</span>
				@endif
				<p class="col-lg-12 mb-0">Category: {{$thread->category->description}}</p>
				<p class="col-lg-12 mb-0">Owner: {{$thread->user[0]->name}}</p>
				<p class="col-lg-12 ">Posted at: {{$thread->created_at}}</p>
				<p class="col-lg-12 mb-0">Description:</p>
				<p class="col-lg-12 ">{{ $thread->description }}</p>
				<div class="row col-lg-12  rounded">
					<input type="text" name="search" class="col-lg-11" style="margin: 0;" placeholder="Search This Forum's Thread By Content or Owner">
					<span class="col-lg-1 btn btn-primary text-light">Search</span>
				</div>
			</div>
		</div>
		<div class="container card-body">
			@if($thread->post->isEmpty())
				<p class="col-lg-12">This forum doesnt have any thread</p>
			@else
				@foreach($thread->post as $p)
					<div class="card mb-3">
						<div class="card-header">
							<a href="{{ url('member/profile/'.$p->user[0]->id)}}">
								<h4 class="col-lg-12 mb-0">{{ $p->user[0]->name }}</h4>
							</a>
							<p class="col-lg-12 mb-0">{{ $p->user[0]->role->description }}</p>
							<p class="col-lg-12 mb-0">Posted at: {{ $p->created_at }}</p>
						</div>
						<div class="card-body">
							<p class="col-lg-12 mb-0">{{ $p->description }}</p>
						</div>
					</div>
				@endforeach
			@endif
		</div>
	</div>
	@if($thread->status == 1)
		@if($thread->post->isEmpty())
		<div class="card">
			<div class="card-header ">
				<h4 class="mb-0">Post New Thread</h4>
			</div>
			<form class="card-body" method="post" action="{{ url('member/thread-add-post')}}">
				<div class="container row">
					{{ @csrf_field() }}
					<p class="col-lg-12 mb-0">Content</p>
					<input type="text" name="thread_id" value="{{$thread->id}}" class="d-none">
					<textarea name="post" class="col-lg-12 rounded border-dark"></textarea>
					<div class="col-lg-12 ">
						<button type="submit" class="btn btn-primary py-2 px-4">
							Post
						</button>
					</div>
				</div>
			</form>
		</div>
		@else
		<div class="card">
			<div class="card-header ">
				<h4 class="mb-0">Edit Current Thread</h4>
			</div>
			<form class="card-body" method="post" action="{{ url('member/thread-add-post')}}">
				<div class="container row">
					{{ @csrf_field() }}
					<p class="col-lg-12 mb-0">Content</p>
					<input type="text" name="thread_id" value="{{$thread->id}}" class="d-none">
					<textarea name="post" class="col-lg-12 rounded border-dark"></textarea>
					<div class="col-lg-12 ">
						<button type="submit" class="btn btn-primary py-2 px-4">
							Edit
						</button>
					</div>
				</div>
			</form>
		</div>
		@endif
	@endif
@stop
