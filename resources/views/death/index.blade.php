@extends('layouts.master')
@section('content')
<!-- Start Death Report List Model -->
<div class="row justify-content-center">
    <div class="col-sm-12 m-3">
        <div class="card border-success">
            <h4 class="card-header bg-success d-flex justify-content-between">
                <span class="modal-title text-light align-self-center">Death Report</span>
                <a href="#" class="btn btn-light" data-toggle="modal" data-target="#addDeathRecord"><i class="fas fa-plus-circle"></i>&nbsp; ADD Death</a>
            </h4>
            <div class="card-body f-12">
                <div class="table-responsive" id="">
                    <table class="table table-striped text-canter">
                        <thead>
                        <tr>
                            <th>Patient ID</th>
                            <th>Patient Name</th>
                            <th>Gender</th>
                            <th>Death Date</th>
                            <th>Guardian Phone</th>
                            <th>Report</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>01</td>
                            <td>Rock On</td>
                            <td>Male</td>
                            <td>10/25/2020 : 13.40 PM</td>
                            <td>0170000000</td>
                            <td>Death Due To Fever</td>
                            <td>
                                <a href="#" class="btn btn-primary f-10" data-toggle="modal" data-target="#editDeathRecord"><i class="fas fa-plus-circle"></i>&nbsp; Edit</a>

                                <a href="#" class="btn btn-danger f-10" data-toggle="modal" data-target="#"><i class="fas fa-plus-circle"></i>&nbsp; Delete</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Death Report List Model -->

<!-- Start Add New Death Report Model -->
@include('death.create')
<!-- End Add New Death Report Model -->

<!-- Start Edit Death Report Model -->
@include('death.edit')
<!-- End Edit Death Model -->

@endsection
