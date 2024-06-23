<?php
global $title;
global $seperator;
global $description;
?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title><?= $title.$seperator.$description?></title>
    </head>
    <body>
        <!-- header/navbar -->
            <?php require_once("frontend/pages/components/navbar.php"); ?>
        <!-- end of header/navbar -->
        <main>
            <h1>Login</h1>
             <!--regiter form-->
<section class="pattern-square  bg-opacity-10 d-flex justify-content-end">
    <div class="container position-relative z-1 py-xl-9 py-6">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 col-12 order-2">
                        <div class="me-xl-7">
                            <div class="mb-5">
                                <h2 class="h1 mb-4">User Login </h2>
                                <p class="mb-0">    
                                    <span class="text-primary">Login</span> to your account and start exploring the world of trading.
                                </p>
                            </div>                           
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 order-lg-2">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <form action="backend\account\login-api.php" method="post" class="row needs-validation g-3" 
                                    >
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <h3 class="mb-0">Login</h3>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <label for="scheduleEmailInput"
                                            class="form-label">
                                            Username
                                            <span
class="text-danger">*</span>
                                        </label>
                                        <input type="text"
                                            class="form-control"
                                            id="scheduleUsernameInput" name    ="username"
                                            required />
                                        <div class="invalid-feedback">Please
                                            enter username.</div>
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
                                    

                                    <div class="d-grid">
                                        <button class="btn btn-primary" type="submit">Let’s play!</button>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <a href="auth-register.html">Create an account</a>
                                    
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </html>
