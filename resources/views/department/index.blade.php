@extends('layouts.master')
@section('content')
<!-- Start Department List Model -->
<div class="row justify-content-center">
    <div class="col-lg-12 m-3">
        <div class="card border-success">
            <h4 class="card-header bg-success d-flex justify-content-between">
                <span class="text-light align-self-center">Departments List</span>
                <a href="#" class="btn btn-light" data-toggle="modal" data-target="#add"><i class="fas fa-plus-circle"></i>&nbsp; Add</a>
            </h4>
            <div class="card-body f-14">
                <div class="table-responsive" id="showDepartmentList">
                    <table class="table table-striped text-center">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Departments Name</th>
                            <th>Description</th>
                            <th>Option</th>
                        </tr>
                        </thead>
                        <tbody>

                            @foreach($departments as $department)
                                <tr>
                                    <td>{{$department->id}}</td>
                                    <td>{{$department->name}}</td>
                                    <td>{{$department->description}}</td>
                                    <td>
                                       <a href="#" class="btn btn-primary f-12" data-toggle="modal" data-target="#editDepartment"><i class="fas fa-edit"></i>&nbsp; Edit</a>

                                       <a href="#" class="btn btn-danger f-12" data-toggle="modal" data-target="#"><i class="fas fa-trash-alt"></i>&nbsp; Delete</a>
                                    </td>
                                </tr>
                            @endforeach

{{--                        <tr>--}}
{{--                            <td>701</td>--}}
{{--                            <td>Surgery 1</td>--}}
{{--                            <td>Surgery Department</td>--}}
{{--                            <td>--}}
{{--                                <a href="#" class="btn btn-primary f-12" data-toggle="modal" data-target="#editDepartment"><i class="fas fa-edit"></i>&nbsp; Edit</a>--}}

{{--                                <a href="#" class="btn btn-danger f-12" data-toggle="modal" data-target="#"><i class="fas fa-trash-alt"></i>&nbsp; Delete</a>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Department List Model -->

<!-- Start Add New Department Model -->
@include('department.create')
<!-- End Add New Department Model -->

<!-- Start Edit Department Model -->
@include('department.edit')
<!-- End Edit Department Model -->

@endsection
