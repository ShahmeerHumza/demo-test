<?php include_once "header.php" ?>

<section class="custom-main-body custom-signin-main">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center vh-100">
            <div class="col-lg-6 pl-lg-5">
                <div class="custom-signin shadow-sm bg-white p-4 rounded">
                    <div class="p-3">
                        <h2 class="my-0">Welcome Back</h2>
                        <p class="small mb-4">Sign in to Continue.</p>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input placeholder="Enter Email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input placeholder="Enter Password" type="password" class="form-control" id="exampleInputPassword1" />
                            </div>
                            <button type="submit" class="btn bg-custom btn-lg rounded btn-block">
                                Sign in
                            </button>
                        </form>
                        <p class="text-muted text-center small m-0 py-3">or</p>
                        <a href="#" class="btn btn-dark btn-block rounded btn-lg btn-apple">
                            <i class="icofont-brand-apple mr-2"></i> Sign up with Apple
                        </a>
                        <a href="#" class="btn btn-light border btn-block rounded btn-lg btn-google">
                            <i class="icofont-google-plus text-danger mr-2"></i> Sign up with Google
                        </a>
                        <p class="text-center mt-3 mb-0">
                            <a href="#" class="text-dark">Don't have an account? <b class="hover-me">Sign up</b></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once "footer.php" ?>