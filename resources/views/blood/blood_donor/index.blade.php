@extends('layouts.master')
@section('content')
<!-- Start Blood Donor Model -->
<div class="row justify-content-center">
    <div class="col-lg-12 m-3">
        <div class="card border-success">
            <h4 class="card-header bg-success d-flex justify-content-between">
                <span class="text-light align-self-center">Blood Donor List</span>
                <a href="#" class="btn btn-light" data-toggle="modal" data-target="#addDonor"><i class="fas fa-plus-circle"></i>&nbsp; ADD</a>
            </h4>
            <div class="card-body f-12">
                <div class="table-responsive" id="">
                    <table class="table table-striped text-canter">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Blood Group</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Last Donation Date</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>01</td>
                            <td>Rony Mondal</td>
                            <td>A+</td>
                            <td>Male</td>
                            <td>25</td>
                            <td>03-12-2020</td>
                            <td>0170000000</td>
                            <td>admin@admin.com</td>
                            <td>
                                <a href="#" class="btn btn-primary f-10" data-toggle="modal" data-target="#editDonor"><i class="fas fa-plus-circle"></i>&nbsp; Edit</a>

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
<!-- End Blood Donor List Model -->

<!-- Start New Blood Donor Model -->
@include('blood.blood_donor.create')
<!-- End New Blood Donor Model -->

<!-- Start Edit Blood Donor Model -->
@include('blood.blood_donor.edit')
<!-- End Edit Blood Donor Model -->
@endsection
