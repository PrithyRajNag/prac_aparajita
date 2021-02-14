<div class="modal fade" id="addBedType">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-light">Add Pationt</h4>
                <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body row">
                <form role="form" action="" class="clearfix" method="post" enctype="multipart/form-data" style="width: 100%; display: contents;">
                    <div class="form-group col-sm-12">
                        <label>Bed Type</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>

                    <div class="form-group col-sm-12">
                        <label>Status</label>
                        <select name="status" class="form-control">
                            <option value="" disabled >Withdro Type Select........</option>
                            <option value="1">Active</option>
                            <option value="2">Inactive</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-12">
                        <label>Description</label>
                        <input type="text" name="phone" class="form-control" placeholder="Description">
                    </div>

                    <div class="form-group mb-20 col-sm-4 offset-sm-4">
                        <input type="submit" name="addBedTypeBtn" id="addBedTypeBtn" value="Add Now" class="btn btn-success btn-block btn-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
