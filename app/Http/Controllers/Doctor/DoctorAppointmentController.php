<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorAppointmentController extends Controller
{
    public function index(){
        return view('doctor.doctor_appointment.index');
    }
}
