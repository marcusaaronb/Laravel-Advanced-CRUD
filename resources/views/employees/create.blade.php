@extends('layouts.master');

@section('title')
    Create
@endsection

@section('links')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection

@section('brand')
    BASIC
@endsection

@section('content')
    <div class="col-md-6 col-md-offset-3">
         <div class="panel panel-default">
            <div class="panel-heading">
                Create
            </div>
            <div class="panel-body">
                <form action="{{ url('employees') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <label for="job_description">Current Job</label>
                        <input type="text" class="form-control" name="job_description" placeholder="Enter current job" required>
                    </div>
                    <div class="form-group">
                        <label for="cnum">Contact</label>
                        <input type="text" class="form-control" name="cnum" placeholder="Enter contact" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <textarea name="address" class="form-control" placeholder="Enter Address" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success pull-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
   
@endsection