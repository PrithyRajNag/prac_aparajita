<?php

namespace App\Http\Controllers\Bed;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BedTypeController extends Controller
{
    public function index(){
        return view('bed.bed_type.index');
    }
}
