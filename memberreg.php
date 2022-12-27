 <!-- head -->
 <?php include 'inc/head.php'; ?>

  <body>
    
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
                      <a class="nav-link active" href="about.php">About</a>
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
                      <a class="nav-link" href="contact.php">Contact</a>
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

<!--footer -->
<?php include 'inc/footer.php'; ?>

  </body>
</html>


<?php
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	// Include file which makes the
	// Database Connection.
	include 'conn.php';
	
    $jname = $_POST["jname"];
	$jfname = $_POST["jfname"];
	$jdob = $_POST["jdob"];
	$jvname = $_POST["jvname"];
	$jpost = $_POST["jpost"];
	$jtehsil = $_POST["jtehsil"];
	$jdistrict = $_POST["jdistrict"];
	$jstate = $_POST["jstate"];
	$jmobile = $_POST["jmobile"];
			
	//	$num = mysqli_num_rows($result);
  $existSql = "SELECT * FROM `memberdata` WHERE jmobile='$jmobile'";
  $result = mysqli_query($conn, $existSql);
  $numExistRows = mysqli_num_rows($result);
  
  if($numExistRows > 0){
  $showError = true;
  
  }
  else {
	// This sql query is use to check if
	// the username is already present
    	
    $sql= "INSERT INTO memberdata (`SN`, `jname`, `jfname`, `jdob`, `jvname`, `jpost`, `jtehsil`, `jdistrict`, `jstate`, `jmobile`) VALUES ('[value-1]','$jname','$jfname','$jdob ','$jvname','$jpost','$jtehsil','$jdistrict','$jstate','$jmobile')"; 

    $result1 = mysqli_query($conn, $sql);

	if ($result1) {
        ?>

		<div class="popup popup--icon -success js_success-popup popup--visible">
		<div class="popup__background"></div>
		<div class="popup__content">
		  <h3 class="popup__content__title">
			Success 
		  </h1>
		  <p>You have successfully registered.</p>
		  <p>
		   
		   <?php echo "<script>setTimeout(\"location.href='certificate.php?id=" . $jmobile  ."';\",2000);</script>"; ?>
		  </p>
		</div>
	  </div>
		
<?php
    }
    else {
      echo  '<div class="popup popup--icon -error js_error-popup popup--visible">
      <div class="popup__background"></div>
      <div class="popup__content">
        <h3 class="popup__content__title">
          Error 
        </h1>
        <p>Registration failed. plz. try again.</p>
        <p>
          <a href="index.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
        </p>
      </div>
    </div>
         ' ;
    }
}
}	
?>
 <?php
   if($showError){
       
    echo  '<div class="popup popup--icon -error js_error-popup popup--visible">
    <div class="popup__background"></div>
    <div class="popup__content">
      <h3 class="popup__content__title">
        Error 
      </h1>
      <p>This mobile no. is already registered. Plz. use different no.</p>
      <p>
        <a href="index.php"><button class="button button--error" data-for="js_error-popup">Close</button></a>
      </p>
    </div>
  </div>
       ' ;
    }
    ?>

