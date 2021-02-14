<?php

namespace App\Http\Controllers\Blood;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BloodDonorController extends Controller
{
    public function index(){
        return view('blood.blood_donor.index');
    }
}
