<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VariablesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
