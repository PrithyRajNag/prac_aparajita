<div class="modal fade" id="editBirthRecord">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h4 class="modal-title text-light">Edit Birth Record</h4>
                <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body row">
                <form role="form" action="" class="clearfix" method="post" style="width: 100%; display: contents;">
                    <div class="form-group col-md-4">
                        <label>Child Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Gender</label>
                        <select name="gender" class="form-control">
                            <option value="" disabled >Withdro Type Select........</option>
                            <option value="1">Mam</option>
                            <option value="2">Woman</option>
                            <option value="3">Other</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Weight</label>
                        <input type="text" name="weight" class="form-control" placeholder="Weight" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Date & Time</label>
                        <input type="datetime-local" id="birthdaytime" name="birthdaytime" class="form-control">
                    </div>

                    <div class="form-group col-md-4">
                        <label>Mother Name</label>
                        <input type="text" name="mother" class="form-control" placeholder="Mother" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label>Father Name</label>
                        <input type="text" name="father" class="form-control" placeholder="Father">
                    </div>

                    <div class="form-group col-md-4">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="+880" >
                    </div>

                    <div class="form-group col-md-4">
                        <label>Blood Group</label>
                        <select name="num" class="form-control">
                            <option value=""  ></option>
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

                    <div class="form-group col-md-4">
                        <label>Note</label>
                        <textarea type="text" name="note" class="form-control" placeholder="Note....."></textarea>
                    </div>

                    <div class="form-group mt-5 col-md-4 offset-md-4">
                        <input type="submit" name="editBabyBtn" id="" value="Update" class="btn btn-success btn-block btn-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
