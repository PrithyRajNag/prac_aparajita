@extends('layouts.master')
@section('content')
<!-- Start Bed Type Model -->
<div class="row justify-content-center">
    <div class="col-lg-12 m-3">
        <div class="card border-success">
            <h4 class="card-header bg-success d-flex justify-content-between">
                <span class="text-light align-self-center"> Bed Type</span>
                <a href="#" class="btn btn-light" data-toggle="modal" data-target="#addBedType"><i class="fas fa-plus-circle"></i>&nbsp; Add</a>
            </h4>
            <div class="card-body f-14">
                <div class="table-responsive" id="">
                    <table class="table table-striped text-canter">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Bed Type</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>01</td>
                            <td>AC</td>
                            <td>Good Condition</td>
                            <td>Active</td>
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
<!-- End Bed Type Model -->

<!-- Start New Bed Type Model -->
@include('bed.bed_type.create')
<!-- End New Bed Type Model -->

<!-- Start Edit Bed Type Model -->
@include('bed.bed_type.edit')
<!-- End Edit Bed Type Model -->
@endsection
