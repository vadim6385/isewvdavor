<div class="container" style="width:300px">
    <div class="card mt-3">
        <div class="card-body">
            <form class="form-signin"  action="register.php" method="post">
                <h5 class="form-signin-heading">Sign up</h5>
                <div class="form-group">
                    <input autofocus required class="form-control" name="username" placeholder="Username" type="text"/>
                </div>

                <div class="form-group">
                    <input required class="form-control" name="password" placeholder="Password" type="password"/>
                </div>

                <div class="form-group">
                    <input required class="form-control" name="confirmation" placeholder="Confirm Password" type="password"/>
                </div>

                <div class="form-group">
                    <button class="btn btn-lg btn-dark btn-block" type="submit" style="color: orange;">Sign up</button>
                </div>
            </form>
            <div class="mt-2 text-center">
                or - <a href="login.php" class="btn btn-dark" style="color: orange;">Log in</a>
            </div>
        </div>
    </div>
</div>
