<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Regularcost;
class RegularcostController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	public function regular(){
	    $regularcosts = Regularcost::orderBy('id', 'desc')->get();
	    return view('pages.costs.regularcost')->with('regularcosts',$regularcosts);
	}
	public function regularstore(Request $req){
		$regularcost = new Regularcost();
        $regularcost->aspect =  $req->aspect;
        $regularcost->cost =  $req->cost;
        $regularcost->date =  $req->date;
        $regularcost->narration =  $req->narration;
        $regularcost->save();
        session()->flash('success', 'Regularcost added successfully.');
        return back();
	}
}
