@extends('layouts.master')
@section('content')
<!-- Start Create Doctor Model -->
<div class="row justify-content-center">
    <div class="col-sm-12 m-4">
        <div class="card">
            <h4 class="card-header bg-transparent d-flex justify-content-between">
                <span class="text-dark align-self-center">Create New Doctor</span>
            </h4>
            <div class="card-body f-14">
                <form role="form" action="" class="clearfix" id="formValidation" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-weight-bold">User Role:</label>
                        <div class="col-sm-6">
                            <select name="role" class="form-control">
                                <option value="1">Indoor</option>
                                <option value="2">Outdoor</option>
                                <option value="3">Both</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-weight-bold">Select Depertment</label>
                        <div class="col-sm-6">
                            <select name="department" class="form-control">
                                <option value="1">Sar</option>
                                <option value="2">Medicine</option>
                                <option value="3">New</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-weight-bold">Designation:</label>
                        <div class="col-sm-6">
                            <input type="text" name="designation" id="designation" class="form-control" placeholder="Designation">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-weight-bold">Full Name:</label>
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-weight-bold">Age:</label>
                        <div class="col-sm-6">
                            <input type="date" name="date" class="form-control" placeholder="Age">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-weight-bold">Blood Group:</label>
                        <div class="col-sm-6">
                            <select name="num" class="form-control">
                                <option value="" disabled >Select Your Blood Group........</option>
                                <option value="1">A+</option>
                                <option value="2">A-</option>
                                <option value="3">B+</option>
                                <option value="4">B-</option>
                                <option value="5">O+</option>
                                <option value="6">O-</option>
                                <option value="7">AB</option>
                                <option value="8">AB+</option>
                                <option value="9">AB-</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-weight-bold">Email Address:</label>
                        <div class="col-sm-6">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-weight-bold">Password:</label>
                        <div class="col-sm-6">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-weight-bold">Mobile No:</label>
                        <div class="col-sm-6">
                            <input type="number" name="number" class="form-control" placeholder="Number">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-weight-bold">Sex:</label>
                        <div class="col-sm-6">
                            <div class="form-check form-check-inline">
                                <label for="male">
                                    <input type="radio" id="male" name="gender" value="male">
                                    <span class="mr-sm-2 mt-0">Male</span>
                                </label>
                                <label for="female">
                                    <input type="radio" id="female" name="gender" value="female">
                                    <span class="mr-sm-2">Female</span>
                                </label>
                                <label for="other">
                                    <input type="radio" id="other" name="gender" value="other">
                                    <span class="mr-sm-2">Other</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-weight-bold">Picture:</label>
                        <div class="col-sm-6">
                            <input type="file" class="default" name="pationt_image" placeholder="Picture">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-weight-bold">Address:</label>
                        <div class="col-sm-6">
                            <textarea type="text" name="address" class="form-control" placeholder="Address" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="form-group mb-20 col-sm-4 offset-4">
                        <input type="submit" name="addStaffBtn" id="addStaffBtn" value="Add Now" class="btn btn-success btn-block btn-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Create Doctor Model -->
@endsection
