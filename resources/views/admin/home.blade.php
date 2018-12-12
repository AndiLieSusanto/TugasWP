@extends('components.master')

@section('title','home')

@section('content')
	<div class="container search-box  ">
		<div class="row mb-5">
			<input type="text" name="search" class="col-lg-11" style="margin: 0;" placeholder="Search Title add Category Name">
			<span class="col-lg-1 btn btn-primary text-light">Search</span>
		</div>
	
		{{-- per items --}}
		
		<div class="row jumbotron" style="padding: 0; padding: 10px;">
			
				<h4 class="col-lg-11">Header</h4>
				<span class="col-lg-1 bg-success text-light rounded text-lg-center ">Status</span>
				<p class="col-lg-12">Category:</p>
				<p class="col-lg-12">Posted at:</p>
				<div class="col-lg-12 bg-light rounded" style="padding: 10px;">Discuss issues related to launching rocket</div>
		</div>
		
		<btn class="btn btn-add-forum bg-secondary text-light">
				+
		</btn>
	</div>
@stop