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
        try
        {

            Employee::create($request->all());

            return redirect('/employees')->with(['status' => 'successfull created', 'alert' => 'success']);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function edit($id)
    {
        try
        {

            $employee = Employee::findOrFail($id);

            return view('employees.edit', compact('employee'));
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try
        {

            $employee = Employee::findOrFail($id);
            $employee->name = $request->name;
            $employee->job_description = $request->job_description;
            $employee->cnum = $request->cnum;
            $employee->email = $request->email;
            $employee->address = $request->address;
            $employee->update();

            return redirect('/employees')->with(['status' => 'successfull updated', 'alert' => 'success']);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function destroy($id)
    {
        try
        {

            Employee::destroy($id);

            return redirect('/employees')->with(['status' => 'successfull deleted', 'alert' => 'danger']);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

}
