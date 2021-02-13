@extends('layouts.master')
@section('content')

<!-- Start Birth Report List Model -->
<div class="row justify-content-center">
        <div class="col-lg-12 m-3">
            <div class="card border-success">
                <h4 class="card-header bg-success d-flex justify-content-between">
                    <span class="modal-title text-light align-self-center">Birth Report</span>
                    <a href="#" class="btn btn-light" data-toggle="modal" data-target="#addBirth"><i class="fas fa-plus-circle"></i>&nbsp; ADD Birth</a>
                </h4>
                <div class="card-body f-12">
                    <div class="table-responsive" id="">
                        <table class="table table-striped text-canter table-col-bar">
                            <thead>
                            <tr>
                                <th>NO</th>
                                <th>Child Name</th>
                                <th>Gender</th>
                                <th>Weight</th>
                                <th>Birth Date</th>
                                <th>Mother Name</th>
                                <th>Father Name</th>
                                <th>Blood Group</th>
                                <th>Phone</th>
                                <th>Note</th>
                                <th width="120px;">Option</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>01</td>
                                <td>Rock On</td>
                                <td>Male</td>
                                <td>3.5kg</td>
                                <td>10/25/2020 : 13.40 PM</td>
                                <td>Mrs. X</td>
                                <td>Mr.Y</td>
                                <td>A+</td>
                                <td>0170000000</td>
                                <td>Baby girl, normal delivery</td>
                                <td>
                                    <a href="#" class="btn btn-primary f-10" data-toggle="modal" data-target="#editBirthRecord"><i class="fas fa-plus-circle"></i>&nbsp; Edit</a>

                                    <a href="#" class="btn btn-danger f-10" data-toggle="modal" data-target="#doctorinfo"><i class="fas fa-plus-circle"></i>&nbsp; Delete</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- End Birth Report List Model -->

<!-- Start Add New Birth Report Model -->
@include('birth.create')
<!-- End Add New Birth Report Model -->

<!-- Start Edit Birth Report Model -->
@include('birth.edit')
<!-- End Edit Birth Report Model -->


@endsection
