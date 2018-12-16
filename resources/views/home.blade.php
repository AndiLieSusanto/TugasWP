@extends('components.master')

@section('title','home')

@section('content')
	<div class="container search-box  ">
		<div class="row mb-5">
			<input type="text" name="search" class="col-lg-11" style="margin: 0;" placeholder="Search Forum by Title and Category Name">
			<span class="col-lg-1 btn btn-primary text-light">Search</span>
		</div>
	
		{{-- per items --}}
		
		@foreach($threads as $thread)
		<div class="row jumbotron" style="padding: 0; padding: 10px;">
					<a href="{{ url('thread/'.$thread->id)}}" style="text-decoration: none;" class="col-lg-11">
						<h4 >{{ $thread->name}} </h4>
					</a>
					@if ($thread->status == 0)
						<span class="col-lg-1 bg-danger text-light rounded text-lg-center ">Closed</span>
					@elseif ($thread->status == 1)
						<span class="col-lg-1 bg-success text-light rounded text-lg-center ">Open</span>
					@endif
					<p class="col-lg-12">Category : {{ $thread->category->description }}</p>
					<p class="col-lg-12">Posted at : {{ date('d M Y H:i:s', strtotime($thread->created_at)) }}</p>
					<div class="col-lg-12 bg-light rounded" style="padding: 10px;">
						{{ $thread->description }}
					</div>
				
		</div>
		@endforeach
		{{$threads->links("pagination::bootstrap-4")}}

	</div>
@stop