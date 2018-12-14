@extends('components.master')

@section('title','Profile')

@section('content')
	<div class="container">
        <div class="row border border-secondary p-3 rounded">
            <div class="col-lg-3">
                <img class="img-thumbnail" src="{{URL::asset($user->profile_picture)}}" >
            </div>
            <div class="col-lg-9 container ">
                <div class="row relative">
                    <div class="form-group">
                        @if($user->id == session('user_id'))
                            <button type="submit" class="btn btn-primary py-2 px-4 absolute profile-edit-btn">
                                Edit
                            </button>
                        @else
                            <button type="submit" class="btn btn-danger absolute offset-lg-10 col-lg-1">
                                -
                            </button>
                            <button type="submit" class="btn btn-success absolute offset-lg-11 col-lg-1">
                                +
                            </button>
                        @endif
                    </div>

                    <div class="col-lg-2 mb-3 font-weight-bold">Name</div>
                    <div class="col-lg-10">{{ $user->name}}</div>
                    <div class="col-lg-2 mb-3 font-weight-bold">Popularity</div>
                    <div class="col-lg-10">
                        <span class="badge badge-success px-2 py-1">+{{$ratingPositive}}</span>
                        <span class="badge badge-danger px-2 py-1">-{{$ratingPositive}}</span>
                    </div>
                    <div class="col-lg-2 mb-3 font-weight-bold">Email</div>
                    <div class="col-lg-10">{{ $user->email }}</div>
                    <div class="col-lg-2 mb-3 font-weight-bold">Phone</div>
                    <div class="col-lg-10">{{ $user->phone }}</div>
                    <div class="col-lg-2 mb-3 font-weight-bold">Birthday</div>
                    <div class="col-lg-10">{{ $user->birth_date }}</div>
                    <div class="col-lg-2 mb-3 font-weight-bold">Gender</div>
                    <div class="col-lg-10">{{ $user->gender->description }}</div>
                    <div class="col-lg-2 mb-3 font-weight-bold">Address</div>
                    <div class="col-lg-10">{{ $user->address }}</div>
                </div>
            </div>
        </div>
    
        @if($user->id != session('user_id'))
            <div class="card mt-4">
                <div class="card-body">
                    <div class="container row">
                        <p class="col-lg-12 mb-0">Message</p>
                        <textarea name="name" class="col-lg-12 rounded border-dark"></textarea>
                        <div class="col-lg-12 ">
                            <button type="submit" class="btn btn-primary py-2 px-4">
                                Send
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@stop
