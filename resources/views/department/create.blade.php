
<!-- Start Add Doctor Category Model -->
<div class="modal fade" id="add">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-light">Add</h4>
                <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body row">
                <form role="form" action="{{route('department.create')}}" onsubmit="return validation()" method="POST" style="width: 100%; display: contents;">

                    @csrf {{--added--}}
                    <div class="form-group col-sm-12">
                        <label>Departments Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                        <div id="nameError" class="text-danger"></div>
                    </div>

                    <div class="form-group col-sm-12">
                        <label>Description</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Write Your Profile Information....." rows="2"></textarea>
                    </div>

                    <div class="form-group mb-20 col-sm-4 offset-4">
                        <button type="submit" name="add" value="Save" class="btn btn-success btn-block btn-lg">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Add Doctor Category Model -->
