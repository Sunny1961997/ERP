<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Officecost;

class OfficecostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	$officecosts = Officecost::orderBy('id', 'desc')->get();
    	return view('pages.costs.officecost')->with('officecosts', $officecosts);
    }

    public function store(Request $req){
        $Officepurchage = new Officecost();
        $Officepurchage->aspect =  $req->aspect;
        $Officepurchage->amount =  $req->amount;
        $Officepurchage->date =  $req->date;
        $Officepurchage->save();
        session()->flash('success', 'Office purchage added successfully.');
        return back();
        //return response()->json(['success'=>'Data is successfully added']);
        //return response()->json($request->all());
    }
}
