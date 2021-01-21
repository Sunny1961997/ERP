<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Officepurchage;

class OfficepurchageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	$officepurchages = Officepurchage::orderBy('id', 'desc')->get();
    	return view('pages.officepurchage.index')->with('officepurchages', $officepurchages);
    }

    public function store(Request $req){
        $Officepurchage = new Officepurchage();
        $Officepurchage->item_name =  $req->item;
        $Officepurchage->amount =  $req->amount;
        $Officepurchage->date =  $req->date;
        $Officepurchage->narration =  $req->narration;
        $Officepurchage->save();
        session()->flash('success', 'Office purchage added successfully.');
        return back();
        //return response()->json(['success'=>'Data is successfully added']);
        //return response()->json($request->all());
    }
}
