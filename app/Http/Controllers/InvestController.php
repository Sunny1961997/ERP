<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Invest;

class InvestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	$invests = Invest::orderBy('id', 'desc')->get();
    	return view('pages.invests.index')->with('invests', $invests);
    }

    public function store(Request $req){
        $invest = new Invest();
        $invest->investor_name =  $req->name;
        $invest->amount =  $req->amount;
        $invest->date =  $req->date;
        $invest->phone =  $req->phone;
        $invest->used_amount =  0;
        $invest->save();
        session()->flash('success', 'Invest added successfully.');
        return back();
    }
}
