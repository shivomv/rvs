 <!-- head -->
 <?php include 'inc/head.php'; ?>

  <body>
    
    <!--social -->
    <?php include 'inc/socialbar.php'; ?>
    
 <!-- main bar -->
 <?php include 'inc/main.php'; ?>

    <!-- registration modal -->
<?php include 'inc/reg-form.php'; ?>

    <!-- nav-bar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-dark bg-dark">
      <div class="container-fluid">
          <a class="navbar-brand" href="index.php">HOME</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 
                  <li class="nav-item">
                      <a class="nav-link" href="about.php">About</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      Gallery
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="photo.php">Photo Gallery</a></li>
                      <li><a class="dropdown-item" href="video.php">Video Gallery</a></li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="contact.php">Support</a></li>
                      
                  </ul>
                  <li class="nav-item">
                      <a class="nav-link active" href="contact.php">Contact</a>
                  </li>
              </li>
                 
              </ul>
              <form class="d-flex">
                 
              </form>

<div class="mx-2">
<button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#signupModal">JOIN US</button>
</div>

          </div>
      </div>
  </nav>

   
 <!-- CONTACT US-->
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold"><ul>CONTACT US</ul> </h1><br>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">कार्यालय- 18/330, चौक लखनऊ- 226003 (उ.प्र.) </p>
        <p class="lead mb-4"><i class="fas fa fa-mobile-alt text-primary"></i><b> Mobile No.-</b> 9721616231, 9451792000 </p>
        <p class="lead mb-4"><b> Mail.-</b> rastriyavidyarthisabha@gmail.com </p>      
    </div>
  </div>

  <!--footer -->
<?php include 'inc/footer.php'; ?>
  
  </body>
</html>