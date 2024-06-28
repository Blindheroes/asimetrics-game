<?php
global $title;
global $seperator;
global $description;
?>


        <!-- header/navbar -->
            <?php require_once("frontend/pages/components/navbar.php"); ?>
        <!-- end of header/navbar -->
        <main>
            <h1>Register</h1>
             <!--regiter form-->
<section class="pattern-square  bg-opacity-10 d-flex justify-content-end">
    <div class="container position-relative z-1 py-xl-9 py-6">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 col-12 order-2">
                        <div class="me-xl-7">
                            <div class="mb-5">
                                <h2 class="h1 mb-4">Register and Play Now!</h2>
                                <p class="mb-0">
                                    Register now and get access to the best
                                    games and the best community. We are
                                    waiting for you!
                                </p>
                            </div>                           
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 order-lg-2">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <form action="backend\account\registration-api.php" method="post" class="row needs-validation g-3" 
                                    >
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <h3 class="mb-0">Register</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <label for="ScheduleUserNameInput"
                                            class="form-label">
                                            Username
                                            <span
class="text-danger">*</span>
                                        </label>
                                        <input type="text"
                                            class="form-control"
                                            id="ScheduleUserNameInput"
                                            name="username"
                                            required />
                                        <div class="invalid-feedback">Please
                                            enter user name.</div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <label for="scheduleEmailInput"
                                            class="form-label">
                                            Email
                                            <span
class="text-danger">*</span>
                                        </label>
                                        <input type="email"
                                            class="form-control"
                                            id="scheduleEmailInput" name    ="email"
                                            required />
                                        <div class="invalid-feedback">Please
                                            enter email.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="schedulePasswordInput"
                                            class="form-label">
                                            Password
                                            <span
class="text-danger">*</span>
                                        </label>
                                        <input type="password"
                                            class="form-control"
                                            id="schedulePasswordInput" name="password"
                                            required />
                                        <div class="invalid-feedback">Please
                                            enter Password.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="scheduleConfirmPasswordInput"
                                            class="form-label">
                                            Confirm Password
                                            <span class="text-danger">*</span>
                                        </label>
                                        <input type="password"
                                            class="form-control"
                                            id="scheduleConfirmPasswordInput"
                                            required />
                                        <div class="invalid-feedback">Please
                                            enter Confirm Password.</div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-check
                                            form-switch">
                                            <input class="form-check-input"
                                                type="checkbox"
                                                id="flexSwitchCheckDefault"
                                                required />
                                            <label class="form-check
                                                form-check-label"
                                                for="flexSwitchCheckDefault">
                                                I agree to the <a
                                                    href="#!">Terms of
                                                    Service</a> and <a
                                                    href="#!">Privacy
                                                    Policy</a>
                                            </label>
                                            <div class="invalid-feedback">You
                                                must agree before
                                                submitting.</div>
                                        </div>
                                    </div>

                                    <div class="d-grid">
                                        <button class="btn btn-primary" type="submit">Let’s play!</button>
                                    </div>
                                    <div class="text-center mt-3">
                                        Already have an account? <a href="auth-login.html">Login</a>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--regiter form end-->
        </main>
      <!-- footer -->
            <?php require_once("frontend/pages/components/footer.php"); ?>
     <!-- end of footer -->
