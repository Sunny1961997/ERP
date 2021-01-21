<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Supplierpayment;
use App\Supplier;

class SupplierpaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	$supplierpayments = Supplierpayment::orderBy('id', 'desc')->get();
    	$suppliers = Supplier::orderBy('id', 'desc')->get();
    	return view('pages.suppliers.payment')->with(['supplierpayments' =>$supplierpayments, 'suppliers' =>$suppliers]);
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
        $payment = new Supplierpayment();
        $payment->supplier_id =  $req->supplier_id;
        $payment->amount =  $req->amount;
        $payment->date =  $req->date;
        $payment->narration =  $req->narration;
        $payment->save();
        session()->flash('success', 'Supplier payment added successfully.');
        return back();
        //return response()->json(['success'=>'Data is successfully added']);
        //return response()->json($request->all());
    }
}
