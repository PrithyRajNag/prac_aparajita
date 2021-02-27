
<!-- Start Edit Doctor Category Model -->
<div class="modal fade" id="editDepartment">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h4 class="modal-title text-light">Edit Doctor Category</h4>
                <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body row">
                <form role="form" method="POST" action="" class="clearfix"  style="width: 100%; display: contents;">
{{--                    @csrf--}}
{{--                    @method('PUT')--}}

                    <input type="hidden" name="id">

                    <div class="form-group col-sm-12">
                        <label>Departments Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="form-group col-sm-12">
                        <label>Description</label>
                        <textarea name="description" id="description" class="form-control" rows="2"></textarea>
                    </div>

                    <div class="form-group mb-20 col-sm-4 offset-4">
{{--                        <input type="submit" name="editBtn" id="editBtn" value="Save Now" class="btn btn-primary btn-block btn-lg">--}}
                        <button type="submit" name="editBtn" id="editBtn" value="Save Now" onclick="editData(e.target)" class="btn btn-primary btn-block btn-lg">Save Now</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Edit Doctor Category Model -->
