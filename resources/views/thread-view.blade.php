@extends('components.master')

@section('title','Thread Forum')

@section('content')

	<div class="card mb-5">
		<div class="container card-header">


			<div class="row " style="padding: 0; padding: 10px;">

					<h4 class="col-lg-11 mb-0">Header</h4>
					<span class="col-lg-1 badge badge-success text-light rounded text-lg-center ">Status</span>
					<p class="col-lg-12 mb-0">Category:</p>
					<p class="col-lg-12 mb-0">Owner:</p>
					<p class="col-lg-12 ">Posted at:</p>
					<p class="col-lg-12 mb-0">Description:</p>
					<p class="col-lg-12 ">blabla</p>
					<div class="row col-lg-12  rounded">
						<input type="text" name="search" class="col-lg-11" style="margin: 0;" placeholder="Search Title add Category Name">
						<span class="col-lg-1 btn btn-primary text-light">Search</span>
					</div>
			</div>

		</div>
		<div class="container card-body">
			<p class="col-lg-12">This forum doesnt have any thread</p>
			<div class="card mb-3">
				<div class="card-header">
					<h4 class="col-lg-12 mb-0">Header</h4>
					<p class="col-lg-12 mb-0">Role</p>
					<p class="col-lg-12 mb-0">Posted at:</p>
				</div>
				<div class="card-body">
					<p class="col-lg-12 mb-0">Mantap</p>
				</div>
			</div>

		</div>
	</div>
	<div class="card">
		<div class="card-header ">
			<h4 class="mb-0">Post New Thread</h4>
		</div>
		<div class="card-body">
			<div class="container row">
				<p class="col-lg-12 mb-0">Content</p>
				<textarea name="name" class="col-lg-12 rounded border-dark"></textarea>
				<div class="col-lg-12 ">
					<button type="submit" class="btn btn-primary py-2 px-4">
						Post
					</button>

				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-header ">
			<h4 class="mb-0">Edit Current Thread</h4>
		</div>
		<div class="card-body">
			<div class="container row">
				<p class="col-lg-12 mb-0">Content</p>
				<textarea name="name" class="col-lg-12 rounded border-dark"></textarea>
				<div class="col-lg-12 ">
					<button type="submit" class="btn btn-primary py-2 px-4">
						Edit
					</button>

				</div>
			</div>
		</div>
	</div>


@stop
