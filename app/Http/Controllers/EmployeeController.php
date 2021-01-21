<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	$employees = Employee::orderBy('id', 'desc')->get();
    	return view('pages.employees.index')->with('employees', $employees);
    }
    public function getData(){
        // get records from database
     
            $employee['data'] = Employee::orderBy('id', 'asc')->get(); 
        
            echo json_encode($employee);
            exit;
      }
    public function store(Request $req){
    	// $employee = new Employee();
    	// $employee->name =  $_POST['name'];
    	// $employee->address =  $_POST['address'];
    	// $employee->phone =  $_POST['phone'];
    	// $employee->role =  $_POST['role'];
    	// $employee->save();
    	//return back();
        //echo "test";
        $employee = new Employee();
        $employee->name =  $req->emp_name;
        $employee->address =  $req->emp_address;
        $employee->phone =  $req->emp_phone;
        $employee->role =  $req->emp_role;
        $employee->save();
        session()->flash('success', 'Employee added successfully.');
        return back();
        //return response()->json(['success'=>'Data is successfully added']);
        //return response()->json($request->all());
    }

}
