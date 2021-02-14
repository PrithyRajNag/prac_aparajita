@extends('layouts.master')
@section('content')
<!-- Start Bed List Model -->
<div class="row justify-content-center">
    <div class="col-lg-12 m-3">
        <div class="card border-success">
            <h4 class="card-header bg-success d-flex justify-content-between">
                <span class="text-light align-self-center"> Bed List</span>
                <a href="#" class="btn btn-light" data-toggle="modal" data-target="#addBedList"><i class="fas fa-plus-circle"></i>&nbsp; Add</a>
            </h4>
            <div class="card-body f-14">
                <div class="table-responsive" id="">
                    <table class="table table-striped text-canter">
                        <thead>
                        <tr>
                            <th>Bed ID</th>
                            <th>Bed Type</th>
                            <th>Floor</th>
                            <th>Description</th>
                            <th>Charge</th>
                            <th>Status</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>BD01</td>
                            <td>AC</td>
                            <td>2nd Floor</td>
                            <td>This Is test</td>
                            <td>2500/=</td>
                            <td>Available</td>
                            <td>
                                <a href="#" class="btn btn-primary mb-1 f-11" data-toggle="modal" data-target="#editBedList"><i class="fas fa-edit"></i>&nbsp; Edit</a>

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
<!-- End Bed List Model -->

<!-- Start Add New Bed Model -->
@include('bed.bed_list.create')
<!-- End Add New Bed Model -->

<!-- Start Edit Bed Model -->
@include('bed.bed_list.edit')
<!-- End Edit Bed Model -->
@endsection
