<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Advancepayment;

class AdvancepaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	$advancepayments = Advancepayment::orderBy('id', 'desc')->get();
    	return view('pages.advancepayments.index')->with('advancepayments', $advancepayments);
    }

    public function store(Request $req){
        $advancepayments = new Advancepayment();
        $advancepayments->order_id =  $req->order_id;
        $advancepayments->narration =  $req->narration;
        $advancepayments->amount =  $req->amount;
        $advancepayments->date =  $req->date;
        $advancepayments->save();
        session()->flash('success', 'Advance payment entry added successfully.');
        return back();
    }
}
