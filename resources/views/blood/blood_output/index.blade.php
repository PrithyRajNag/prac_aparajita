@extends('layouts.master')
@section('content')
<!-- Start Blood Input Status Model -->
<div class="row justify-content-center">
    <div class="col-sm-12 m-3">
        <div class="card border-success">
            <h4 class="card-header bg-success d-flex justify-content-between">
                <span class="text-light align-self-center">Blood Bank Status</span>
            </h4>
            <div class="card-body f-14">
                <div class="table-responsive" id="">
                    <table class="table table-striped text-canter" border=".5">
                        <thead class="bg-warning">
                        <tr>
                            <th>Status</th>
                            <th>A+</th>
                            <th>A-</th>
                            <th>B+</th>
                            <th>B-</th>
                            <th>O+</th>
                            <th>O-</th>
                            <th>AB+</th>
                            <th>AB-</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Available</td>
                            <td>110</td>
                            <td>10</td>
                            <td>10</td>
                            <td>10</td>
                            <td>10</td>
                            <td>10</td>
                            <td>10</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>Out</td>
                            <td>5</td>
                            <td>5</td>
                            <td>5</td>
                            <td>5</td>
                            <td>5</td>
                            <td>5</td>
                            <td>5</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>15</td>
                            <td>15</td>
                            <td>15</td>
                            <td>15</td>
                            <td>15</td>
                            <td>15</td>
                            <td>15</td>
                            <td>15</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="card border-success">
            <h4 class="card-header bg-success d-flex justify-content-between">
                <span class="text-light align-self-center">Output Blood List</span>
                <a href="#" class="btn btn-light" data-toggle="modal" data-target="#addBloodInput"><i class="fas fa-plus-circle"></i>&nbsp; Output Blood</a>
            </h4>
            <div class="card-body f-13">
                <div class="table-responsive" id="">
                    <table class="table table-striped text-canter table-col-bar">
                        <thead class="bg-secondary">
                        <tr>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Group</th>
                            <th>Quantity</th>
                            <th>Serial</th>
                            <th>Phone</th>
                            <th width="170px">Remarks</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>0025</td>
                            <td>Ms. Papia</td>
                            <td>A+</td>
                            <td>2</td>
                            <td>SB0D10</td>
                            <td>017000000</td>
                            <td class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                            <td>
                                <a href="#" class="btn btn-info mb-1 f-11" data-toggle="modal" data-target="#infoPationt"><i class="fas fa-info"></i>&nbsp; Info</a>

                                <a href="#" class="btn btn-primary mb-1 f-11" data-toggle="modal" data-target="#editPatient"><i class="fas fa-edit"></i>&nbsp; Edit</a>

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
<!-- End Blood Input Status Model -->

<!-- Start Edit Blood Input Status Model -->
@include('blood.blood_output.edit')
<!-- End Edit Blood Input Status Model -->
@endsection
