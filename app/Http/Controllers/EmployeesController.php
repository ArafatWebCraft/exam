<?php

namespace App\Http\Controllers;


use App\Models\Employees;
use App\Http\Requests\StoreEmployeesRequest;
use App\Http\Requests\UpdateEmployeesRequest;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function employee_store(Request $request)
    {
        $employee = new Employees();
        $employee->employee_id = $request->employee_id;
        $employee->name = $request->name;
        $employee->phone = $request->phone;
        $employee->eamil = $request->email;
        $employee->address = $request->address;
        $employee->salary = $request->salary;
        $employee->save();
        return redirect()->back();
    }
    public function emoloyee_list()
    {
        $employee = Employees::all();
        return view('employee_list', compact('employee'));
    }
    public function employee_edit($id)
    {
        $employee = Employees::find($id);
        return view('employee_edit', compact('employee', 'id'));
    }
    public function employee_update(Request $request, $id)
    {

        $employee = Employees::find($id);
        $employee->employee_id = $request->employee_id;
        $employee->name = $request->name;
        $employee->phone = $request->phone;
        $employee->eamil = $request->email;
        $employee->address = $request->address;
        $employee->salary = $request->salary;
        $employee->save();
        return redirect()->route('employee.list');
    }
    public function employee_delete($id)
    {
        $employee = Employees::destroy($id);
        return redirect()->route('employee.list', $id);
    }
}
