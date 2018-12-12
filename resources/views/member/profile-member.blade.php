@extends('components.master')

@section('title','Profile')

@section('content')
	<div class="container">
        <div class="row border border-secondary p-3 rounded">
            <div class="col-lg-3">
                <img class="img-thumbnail" src="{{url('/images/profile_default.jpg')}}" >
            </div>
            <div class="col-lg-9 container ">
                <div class="row relative">
                    <div class="form-group">

                            <button type="submit" class="btn btn-primary py-2 px-4 absolute profile-edit-btn">
                                Edit
                            </button>

                    </div>

                    <div class="col-lg-2 mb-3 font-weight-bold">Name</div>
                    <div class="col-lg-10">asd</div>
                    <div class="col-lg-2 mb-3 font-weight-bold">Popularity</div>
                    <div class="col-lg-10">
                        <span class="badge badge-success px-2 py-1">+0</span>
                        <span class="badge badge-danger px-2 py-1">-0</span>
                    </div>
                    <div class="col-lg-2 mb-3 font-weight-bold">Email</div>
                    <div class="col-lg-10">asdasd</div>
                    <div class="col-lg-2 mb-3 font-weight-bold">Phone</div>
                    <div class="col-lg-10">123</div>
                    <div class="col-lg-2 mb-3 font-weight-bold">Birthday</div>
                    <div class="col-lg-10">asd</div>
                    <div class="col-lg-2 mb-3 font-weight-bold">Gender</div>
                    <div class="col-lg-10">asd</div>
                    <div class="col-lg-2 mb-3 font-weight-bold">Address</div>
                    <div class="col-lg-10">asd</div>
                </div>
            </div>
        </div>

    </div>
@stop
