<div class="modal fade" id="editDoctor">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-light">Add Doctor</h4>
                <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body row">
                <form role="form" action="" class="clearfix" method="post" enctype="multipart/form-data" style="width: 100%; display: contents;">
                    <div class="form-group col-md-6">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="*****" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Address" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Number</label>
                        <input type="text" name="number" class="form-control" placeholder="Number">
                    </div>

                    <div class="form-group col-md-6">
                        <label>Category</label>
                        <select name="num" class="form-control">
                            <option value="" disabled >Withdraw Type Select........</option>
                            <option value="1">Head Top 1200x150</option>
                            <option value="2">Middle 728x90</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Profile</label>
                        <textarea name="profile" class="form-control" placeholder="Write Your Profile Information....." rows="2"></textarea>
                    </div>

                    <div class="form-group col-md-6">
                        <label>Doctor Images</label>
                        <input type="file" class="default" name="doctor_images">
                    </div>

                    <div class="form-group mb-20 col-md-6">
                        <input type="submit" name="addAdvertising" id="addAdvertisingBtn" value="Add Doctor" class="btn btn-success btn-block btn-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
