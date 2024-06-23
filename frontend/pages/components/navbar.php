<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary mb-5 ">
  <div class="container-fluid">
    <div class="brand-logo">
  <a class="" href="index.php?page=index">
    <img src="assets/images/logo/logo.svg" alt />
  </a>
    <button
      data-mdb-collapse-init
      class="navbar-toggler"
      type="button"
      data-mdb-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >

    
      <i class="fas fa-bars"></i>
    </button>
    </div>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?page=index">Home</a>
        </li>
        <?php if(isset($_SESSION['loggedin'])){?> 
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=dashboard">Dashboard</a>          
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=persona">Persona</a>          
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=trade">Trade</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=reserch">Reserch</a>
        </li>
          <?php } ?>
        <div class="mt-3 mt-lg-0 d-flex align-items-center">
          <?php
          if(isset($_SESSION['loggedin'])){?>
            <a href="index.php?page=logout" class="btn btn-primary">Logout</a>
          
          <?php }else { ?>
            <a href="index.php?page=login" class="btn mx-2">Login</a>
            <a href="index.php?page=register" class="btn btn-primary">Create account</a>
          <?php } ?>
                  </div>
      </ul>
    </div>
  </div>
</nav>