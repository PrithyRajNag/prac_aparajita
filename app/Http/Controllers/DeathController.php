<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeathController extends Controller
{
    public function index(){
        return view('death.index');
    }
}
