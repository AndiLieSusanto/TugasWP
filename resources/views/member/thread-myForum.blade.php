@extends('components.master')

@section('title','My Forum Page')

@section('content')

    <div class="card mb-3">
        <div class="card-header relative">
            <div class="row absolute absolute-right-top">
                <button class="btn btn-warning" type="button" name="edit">Edit</button>
                <button class="btn btn-danger" type="button" name="close">Close</button>
            </div>
            <h4 class="col-lg-12 mb-0">Foodtech</h4>
            <p class="col-lg-12 mb-0">Status: <span class="p-status bg-success text-light rounded text-lg-center">Open</span></p>
        </div>
        <div class="card-body">
            <p class="col-lg-12 mb-0">Discuss something something fucked</p>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header relative">
            <h4 class="col-lg-12 mb-0">Foodtech</h4>
            <p class="col-lg-12 mb-0">Status: <span class="p-status bg-danger text-light rounded text-lg-center">Closed</span></p>
        </div>
        <div class="card-body">
            <p class="col-lg-12 mb-0">Discuss something something fucked</p>
        </div>
    </div>


@stop
