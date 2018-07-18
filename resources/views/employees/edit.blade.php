@extends('layouts.master')

@section('title')
    Edit
@endsection

@section('links')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection

@section('brand')
    BASIC
@endsection

@section('content')
    
@section('content')
    <div class="col-md-6 col-md-offset-3">
         <div class="panel panel-default">
            <div class="panel-heading">
                Create
            </div>
            <div class="panel-body">
                <form action="{{ url('employees') }}/{{ $employee->id }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{ $employee->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="job_description">Current Job</label>
                        <input type="text" class="form-control" name="job_description" placeholder="Enter current job" value="{{ $employee->job_description }}" required>
                    </div>
                    <div class="form-group">
                        <label for="cnum">Contact</label>
                        <input type="text" class="form-control" name="cnum" placeholder="Enter contact" value="{{ $employee->cnum }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{ $employee->email }}" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <textarea name="address" class="form-control" placeholder="Enter Address" required>{{ $employee->address }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update</button>
                </form>
            </div>
        </div>
    </div>

@endsection