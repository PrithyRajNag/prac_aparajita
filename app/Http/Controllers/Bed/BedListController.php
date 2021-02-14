<?php

namespace App\Http\Controllers\Bed;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BedListController extends Controller
{
    public function index(){
        return view('bed.bed_list.index');
    }
}
