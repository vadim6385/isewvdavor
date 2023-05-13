<div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <form class="form-signin" action="../php/change_pass.php" method="post">
                <div class="form-group row">
                    <label for="old" class="col-sm-2 col-form-label">Old password</label>
                    <div class="col-sm-6">
                        <input id="old" class="form-control" name="old_pass" placeholder="Old Password" type="password" required="" autofocus=""/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="new" class="col-sm-2 col-form-label">New password</label>
                    <div class="col-sm-6">
                        <input id="new" class="form-control" name="new_pass" placeholder="New Password" type="password" required="" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="conf" class="col-sm-2 col-form-label">Confirm new password</label>
                    <div class="col-sm-6">
                        <input id="conf" class="form-control" name="confirmation" placeholder="Confirm New Password" type="password" required="" />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-dark" style="color: orange;">Change Password</button>
                    </div>
                </div>
            </form>
         </div>
      </div>
</div>