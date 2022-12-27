
<?php


// Include file which makes the
// Database Connection.
include 'conn.php';

  $mobile = strtoupper($_GET["id"]);



//	$num = mysqli_num_rows($result);

$id = $_GET["id"];

    
$sql = "SELECT * FROM `memberdata` WHERE  jmobile = {$id}  ";
$result = mysqli_query($conn, $sql) or die("query failed");

if(mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result) ) {

       
// This sql query is use to check if
// the username is already present
    
$name_len = strlen($row['jname']);
      ?>

 <!-- head -->
 <?php include 'inc/head.php'; ?>

  <body>
    
    <!-- social bar  -->
    <?php include 'inc/socialbar.php'; ?>

 <!-- main bar -->
 <?php include 'inc/main.php'; ?>

 <!-- registration modal -->
<?php include 'inc/reg-form.php'; ?>

    <!-- nav-bar2 -->
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
<!-- form submission -->



<center>
      <br>
      <h3>Certificate Generator</h3>
      <br>

    <?php 
     
          //designed certificate picture
          $image = "img/certi.png";

          $createimage = imagecreatefrompng($image);

          //this is going to be created once the generate button is clicked
          $output = "certificate.png";

          //then we make use of the imagecolorallocate inbuilt php function which i used to set color to the text we are displaying on the image in RGB format
          $white = imagecolorallocate($createimage, 205, 245, 255);
          $black = imagecolorallocate($createimage, 0, 0, 0);

          //Then we make use of the angle since we will also make use of it when calling the imagettftext function below
          $rotation = 0;

          //we then set the x and y axis to fix the position of our text name
          $origin_x = 200;
          $origin_y=260;

          //we then set the x and y axis to fix the position of our text occupation
          $origin1_x = 120;
          $origin1_y=90;

          //we then set the differnet size range based on the lenght of the text which we have declared when we called values from the form
          if($name_len<=7){
            $font_size = 25;
            $origin_x = 280;
          }
          elseif($name_len<=12){
            $font_size = 30;
            $origin_x = 280;
          }
          elseif($name_len<=15){
            $font_size = 26;
          }
          elseif($name_len<=20){
             $font_size = 18;
          }
          elseif($name_len<=22){
            $font_size = 15;
          }
          elseif($name_len<=33){
            $font_size=11;
          }
          else {
            $font_size =10;
          }

          $certificate_no = "RVS".date("Ym").$row['SN'];
          $certificate_name = $row['jname'];

          //font directory for name
          $drFont = dirname(__FILE__)."/font/developer.ttf";

          // font directory for occupation name
          $drFont1 = dirname(__FILE__)."/font/Gotham-black.otf";

          //function to display name on certificate picture
          $text1 = imagettftext($createimage, $font_size, $rotation, $origin_x, $origin_y, $black,$drFont1, $certificate_name);

          //function to display occupation name on certificate picture
          $text2 = imagettftext($createimage,10, $rotation, $origin1_x+2, $origin1_y, $black, $drFont1,$certificate_no );

          // $str=imagecreatefrompng("img/premdeep.png");
          // imagecopy($createimage,$str, 60, 310 , 0, 0, 100, 100);

          imagepng($createimage,$output,3);

 ?>
        <!-- this displays the image below -->
        <img src="<?php echo $output; ?>" style="width:60% ; height:auto ;">
        <br> 
        <br>

        <!-- this provides a download button -->
      <div class="clear">
        <div class="container text-center" >
       <a href="<?php echo $output; ?>" download="<?php echo "RVS".date("Ym").$row['SN'] ?>"> <button type="submit" class="btn btn-danger" onclick="document.location='index.php'"><i class="fa fa-download" ></i> Download Certificate</button></a>
        </div>
</div>
    </center>
    <?php
     }}
     ?>
 

<!--footer -->
<?php include 'inc/footer.php'; ?>

  </body>
</html>
