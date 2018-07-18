@extends('layouts.master');

@section('title')
    Basic Crud
@endsection

@section('links')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection

@section('brand')
    BASIC
@endsection

@section('content')

<h3>Total Employee ({{ $employees->total() }})</h3>
<small>Total Employee in this page ({{ $employees->count() }})</small>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title pull-left">
            Employee List
        </h3>
        <a href="{{ url('employees/create') }}" class="btn btn-success pull-right"><i class="glyphicon glyphicon-plus"></i> Create</a>
        <div class="clearfix"></div>
    </div>
    <div class="table-responsive">
        <table id="students-table" class="table">
            <thead>
                <td>Name</td>
                <td>Job</td>
                <td>Contact</td>
                <td>Email</td>
                <td>Address</td>
                <td>Action</td>
            </thead>
            <tbody>
                @foreach($employees  as $employee)
                    <tr>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->job_description }}</td>
                        <td>{{ $employee->cnum }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->address }}</td>
                        <td>
                            <a href="/employees/{{ $employee->id }}/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a> 
                            <form action="employees/{{ $employee->id }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
                            </form>
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="pull-right">
        <nav aria-label="Page navigation">
            {{ $employees->links() }}
        </nav>
    </div>
</div>
@endsection