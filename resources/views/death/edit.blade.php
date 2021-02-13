<div class="modal fade" id="editDeathRecord">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h4 class="modal-title text-light">Edit Death Record</h4>
                <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body row">
                <form role="form" action="" class="clearfix" method="post" style="width: 100%; display: contents;">
                    <div class="form-group col-sm-6">
                        <label>Patient Name</label>
                        <select name="patient" class="form-control">
                            <option value="1">Zm(SM001)</option>
                            <option value="2">Xm(SM001)</option>
                            <option value="3">Ym(SM001)</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-6">
                        <label>Date & Time</label>
                        <input type="datetime-local" id="birthdaytime" name="birthdaytime" class="form-control">
                    </div>

                    <div class="form-group col-sm-6">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="+880" >
                    </div>

                    <div class="form-group col-sm-6">
                        <label>Report</label>
                        <textarea type="text" name="report" class="form-control" placeholder="Report....."></textarea>
                    </div>

                    <div class="form-group mt-5 col-sm-4 offset-4">
                        <input type="submit" name="editDeathBtn" id="" value="Update" class="btn btn-success btn-block btn-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
