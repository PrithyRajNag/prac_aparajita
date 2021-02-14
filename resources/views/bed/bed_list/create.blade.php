<div class="modal fade" id="addBedList">
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
                        <select name="type" class="form-control">
                            <option value="1">VIP</option>
                            <option value="2">Standard</option>
                            <option value="3">ICU</option>
                            <option value="4">AC</option>
                            <option value="5">Normal</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-12">
                        <label>Floor</label>
                        <input type="text" name="floor" class="form-control" placeholder="Floor" required>
                    </div>

                    <div class="form-group col-sm-12">
                        <label>Charge</label>
                        <input type="text" name="charge" class="form-control" placeholder="Charge">
                    </div>

                    <div class="form-group col-sm-12">
                        <label>Description</label>
                        <input type="text" name="description" class="form-control" placeholder="description">
                    </div>

                    <div class="form-group mb-20 col-sm-6 offset-3">
                        <input type="submit" name="addBedListBtn" id="" value="Add Now" class="btn btn-success btn-block btn-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
