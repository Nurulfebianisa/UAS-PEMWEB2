<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CostController extends Controller
{
    function costs(){
        return view('kampus/cost');
    }
}