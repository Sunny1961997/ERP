<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	$suppliers = Supplier::orderBy('id', 'desc')->get();
    	return view('pages.suppliers.index')->with('suppliers', $suppliers);
    }
    public function store(Request $req){
        $supplier = new Supplier();
        $supplier->name =  $req->supplier_name;
        $supplier->address =  $req->supplier_address;
        $supplier->phone =  $req->supplier_phone;
        $supplier->shop_name =  $req->supplier_shop;
        $supplier->save();
        session()->flash('success', 'Supplier added successfully.');
        return back();
    }

}
