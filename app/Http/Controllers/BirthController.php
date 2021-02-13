<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BirthController extends Controller
{
    public function index(){
        return view('birth.index');
    }
}
