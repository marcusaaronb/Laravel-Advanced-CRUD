@extends('layouts.master')

@section('title')
    Datatable
@endsection

@section('links')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection

@section('brand')
    ADVANCED
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title pull-left">
                Student List
            </h3>
            <button class="btn btn-success pull-right create"><i class="glyphicon glyphicon-plus"></i> Create</button>
            <div class="clearfix"></div>
        </div>
        <div class="table-responsive">
            <table id="students-table" class="table">
                <thead>
                    <td>Name</td>
                    <td>Contact</td>
                    <td>Email</td>
                    <td>Address</td>
                    <td>Action</td>
                </thead>
            </table>  
        </div>
         
    </div>
    
    
    {{-- modal for add --}}
    <div id="modalAdd" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <form id="store">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control name" name="name" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="cnum">Contact</label>
                            <input type="number" class="form-control cnum" name="cnum" placeholder="Enter contact">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control email" name="email" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control address" name="address" placeholder="Enter address" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    {{-- modal for edit --}}
    <div id="modalEdit" class="modal fade" role="dialog">
        <div class="modal-dialog">            
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <form id="update">
                    <div class="modal-body">
                        <input type="hidden" name="id" class="id">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control name" name="name" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="cnum">Contact</label>
                            <input type="text" class="form-control cnum" name="cnum" placeholder="Enter contact">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control email" name="email" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control address" name="address" placeholder="Enter address" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
@endsection

@push('scripts')
    <script src="{{ asset('js/students/student_function.js') }}"></script>
@endpush

