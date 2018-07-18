<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::paginate(10);

        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        Employee::create($request->all());

        return redirect('/employees')->with(['status' => 'successfull created', 'alert' => 'success']);
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);

        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->name = $request->name;
        $employee->job_description = $request->job_description;
        $employee->cnum = $request->cnum;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->update();

        return redirect('/employees')->with(['status' => 'successfull updated', 'alert' => 'success']);
    }

    public function destroy($id)
    {
        Employee::destroy($id);

        return redirect('/employees')->with(['status' => 'successfull deleted', 'alert' => 'danger']);
    }

}
