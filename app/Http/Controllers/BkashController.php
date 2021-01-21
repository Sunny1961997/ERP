<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Bkash;

class BkashController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	$bkashes = Bkash::orderBy('id', 'desc')->get();
    	return view('pages.bkashes.index')->with('bkashes', $bkashes);
    }

    public function store(Request $req){
        $bkashes = new Bkash();
        $bkashes->trx_id =  $req->trx_id;
        $bkashes->current_balance =  $req->current_balance;
        $bkashes->in_or_out =  $req->in_or_out;
        $bkashes->amount =  $req->amount;
        $bkashes->date =  $req->date;
        $bkashes->save();
        session()->flash('success', 'Bkash entry added successfully.');
        return back();
    }
}
