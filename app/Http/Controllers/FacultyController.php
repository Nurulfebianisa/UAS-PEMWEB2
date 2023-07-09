<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacultyController extends Controller
{
    function facu(){
        return view('kampus/faculty');
    }
}