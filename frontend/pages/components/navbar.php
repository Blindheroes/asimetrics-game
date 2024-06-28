

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                    <!-- Color modes -->
      <script src="assets/js/vendors/color-modes.js"></script>
              <!-- Libs CSS -->
      <link href="assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />
      <link href="assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
        
        <!-- Scroll Cue -->
      <!-- <link rel="stylesheet" href="assets/libs/scrollcue/scrollCue.css" /> -->
              <!-- Box icons -->
      <link rel="stylesheet" href="assets/fonts/css/boxicons.min.css" />
        <!-- Theme CSS -->
        <link rel="stylesheet" href="assets/css/theme.min.css" />
        
        <title><?= $title.$seperator.$description?></title>
    </head>
    <body>

    <header>
    
         <nav class="navbar navbar-expand-lg navbar-light w-100">
            <div class="container px-3 ">
            <a class="" href="index.php?page=index">
    <img src="assets/images/logo/logo.svg" alt />
  </a>
                <button class="navbar-toggler offcanvas-nav-btn" type="button">
                    <i class="bi bi-list"></i>
                </button>
         
                <div class="offcanvas offcanvas-start offcanvas-nav " style="width: 20rem">
                    <div class="offcanvas-header">
                    <a class="" href="index.php?page=index">
    <img src="assets/images/logo/logo.svg" alt />
  </a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body pt-0 align-items-center">
                        <ul class="navbar-nav mx-auto align-items-lg-center">

<?php if(!isset($_SESSION['loggedin'])){?>
                        <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#Pageheader">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#features">Features</a>
                        </li>
                        
                        <li class="nav-item ">
                            <a class="nav-link" href="#benefit">Benefit</a>  
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#price">Pricing</a>  
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#FAQ">FAQ</a>  
                        </li>
        <?php } else{ ?> 
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=main">Beranda</a>          
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=dashboard">Dashboard</a>          
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=trade">Trade</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=reserch">Reserch</a>
        </li>
        <?php } ?>               
                     
                  </ul>
                    
                    <div class="mt-3 mt-lg-0 d-flex align-items-center">
                    <?php
          if(isset($_SESSION['loggedin'])){?>
            <a href="index.php?page=logout" class="btn btn-primary">Logout</a>
          
          <?php }else { ?>
            <a href="index.php?page=login" class="btn mx-2">Login</a>
            <a href="index.php?page=register" class="btn btn-primary">Create account</a>
          <?php } ?>
                  </div>
                    
                </div>
            </div>
         </nav>
         
               </header>

