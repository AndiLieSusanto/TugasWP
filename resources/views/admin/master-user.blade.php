@extends('components.master')

@section('title','Master User Page')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>List Of User</h3>
            <a href="#" class="btn btn-success">Add New User</a>
        </div>
        <div class="card-body">
            <table class="table">
      <thead class="thead-dark">
                <tr>
                  <th>Photo</th>
                  <th>Name</th>
                  <th>Role</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Birthday</th>
                  <th>Gender</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>a</td>
                  <td>a</td>
                  <td>asd</td>
                  <td>asd</td>
                  <td>asd</td>
                  <td class="row">
                      <a href="#" class="col-lg-6 btn btn-warning">Edit</a>
                      <a href="#" class="col-lg-6 btn btn-danger">Delete</a>
                  </td>


                </tr>

              </tbody>
            </table>`
        </div>
    </div>
@stop
