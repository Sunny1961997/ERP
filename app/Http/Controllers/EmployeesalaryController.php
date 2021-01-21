<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employeesalary;

use App\Employee;

class EmployeesalaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	$employees = Employee::orderBy('id', 'desc')->get();
    	$employeesalaries = Employeesalary::orderBy('id', 'desc')->get();
    	return view('pages.employeesalaries.index')->with(['employees'=>$employees, 'employeesalaries'=> $employeesalaries]);
    }

    public function store(Request $req){
        $employeesalary = new Employeesalary();
        $employeesalary->employee_id =  $req->employee_id;
        $employeesalary->amount =  $req->amount;
        $employeesalary->date =  $req->date;
        $employeesalary->save();
        session()->flash('success', 'Employee salary added successfully.');
        return back();
    }
}
