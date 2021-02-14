@extends('layouts.master')
@section('content')
<div class="row justify-content-center">
    <div class="col-sm-12 m-3">
        <div class="card border-success">
            <h4 class="card-header bg-success d-flex justify-content-between">
                <span class="text-light align-self-center">Doctor List</span>
            </h4>
            <div class="card-body f-14">
                <div class="table-responsive" id="showDoctorList">
                    <table class="table table-striped text-canter">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Department</th>
                            <th>Profile</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>701</td>
                            <td>Rock</td>
                            <td>rock@rock.com</td>
                            <td>0170000000</td>
                            <td>Cardiology</td>
                            <td>Cardiac Specialized</td>
                            <td>
                                <a href="#" class="btn btn-primary f-11 mb-1" data-toggle="modal" data-target="#editDoctor"><i class="fas fa-edit"></i>&nbsp; Edit</a>


                                <a href="admin-doctorHistory.php" class="btn btn-warning f-11 mb-1"><i class="fas fa-calendar-check"></i>&nbsp; Appointments &Time Schedule</a>

                                <a href="admin-doctorHistory.php" class="btn btn-secondary f-11 mb-1"><i class="fas fa-gift"></i>&nbsp;  Holiday</a>

                                <a href="#" class="btn btn-danger f-11 mb-1" data-toggle="model" data-target="#doctorinfo"><i class="fas fa-trash-alt"></i>&nbsp; Delete</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Edit Doctor Model -->
@include('doctor.doctor_appointment.edit')
<!-- End Edit Doctor Model -->

@endsection
