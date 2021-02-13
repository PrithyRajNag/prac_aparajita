@extends('layouts.master')
@section('content')

    <!-- Start Ambulance Service Model -->
    <div class="row justify-content-center">
        <div class="col-lg-12 m-3">
            <div class="card border-success">
                <h4 class="card-header bg-success d-flex justify-content-between">
                    <span class="text-light align-self-center">Ambulance List</span>
                    <a href="#" class="btn btn-light" data-toggle="modal" data-target="#addAmbulance"><i class="fas fa-plus-circle"></i>&nbsp; Add Ambulance</a>
                </h4>
                <div class="card-body f-14">
                    <div class="table-responsive" id="showDoctorList">
                        <table class="table table-striped text-canter">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Vehicle Number</th>
                                <th>Vehicle Model</th>
                                <th>Driver Name</th>
                                <th>Driver License</th>
                                <th>Driver Contact</th>
                                <th>Address</th>
                                <th>Option</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>701</td>
                                <td>MPSC1564712</td>
                                <td>BS6</td>
                                <td>Mohan</td>
                                <td>2145454</td>
                                <td>985742151</td>
                                <td>Rampura</td>
                                <td>
                                    <a href="#" class="btn btn-primary f-12" data-toggle="modal" data-target="#editAmbulance"><i class="fas fa-edit"></i>&nbsp; Edit</a>

                                    <a href="#" class="btn btn-danger f-12" data-toggle="modal" data-target="#"><i class="fas fa-trash-alt"></i>&nbsp; Delete</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Ambulance Service Model -->

<!-- Start Add Ambulance Model -->
@include('ambulance.create')
<!-- End Add Ambulance Model -->

<!-- Start Edit Ambulance Model -->
@include('ambulance.edit')
<!-- End Edit Ambulance Model -->

@endsection


