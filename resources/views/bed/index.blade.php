@extends('layouts.master')
@section('content')
<!-- Start Bed Type Model -->
<div class="row justify-content-center">
    <div class="col-lg-12 m-3">
        <div class="card border-success">
            <h4 class="card-header bg-success d-flex justify-content-between">
                <span class="text-light align-self-center"> Bed Assign List</span>
                <a href="#" class="btn btn-light" data-toggle="modal" data-target="#addBed"><i class="fas fa-plus-circle"></i>&nbsp; Add Now</a>
            </h4>
            <div class="card-body f-14">
                <div class="table-responsive" id="">
                    <table class="table table-striped text-canter">
                        <thead>
                        <tr>
                            <th>Patient</th>
                            <th>Bed ID</th>
                            <th>Bed Type</th>
                            <th>Floor</th>
                            <th>Alloted Time</th>
                            <th>Discharge Time</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <a href="admin-patientHistory.php" type="button" class="text-info">Rohan Kadam</a>
                            </td>
                            <td>BD01</td>
                            <td>AC</td>
                            <td>2nd Floor</td>
                            <td>31 December 2020 - 09:30 AM</td>
                            <td>02 February 2021 - 02:45 AM</td>
                            <td>
                                <a href="#" class="btn btn-primary mb-1 f-11" data-toggle="modal" data-target="#editBedType"><i class="fas fa-edit"></i>&nbsp; Edit</a>

                                <a href="#" class="btn btn-danger mb-1 f-11" data-toggle="modal" data-target="#"><i class="fas fa-trash-alt"></i>&nbsp; Delete</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bed Model -->

<!-- Start New Bed Model -->
@include('bed.create')
<!-- End New Bed Type Model -->

<!-- Start Edit Bed Type Model -->
@include('bed.edit')
<!-- End Edit Bed Type Model -->
@endsection
