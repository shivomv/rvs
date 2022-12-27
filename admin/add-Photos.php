<?php

$sweetAlert = false;
	$pass=false;
  $showError=false;
session_start();
error_reporting(0);

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
    }
    else{
   


$conn = mysqli_connect("localhost", "root", "", "rvs");
mysqli_select_db($conn,'image');

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$dis = $_POST["dis"];
	$files = $_FILES["uploadfile"];


    $filename = $files['name'];
    $filetype = $files['type'];
    $filetmp_name = $files['tmp_name'];
    
    $filetext = explode('.',$filename);
    $filetcheck = strtolower(end($filetext));
    
    $fileextstored = array('png','jpg','jpeg');


    if (in_array($filetcheck,$fileextstored)) {
        $destinationfile = 'images/'.$filename;

        
        $existSql = "Select * from image where photo='$filename'";
$result = mysqli_query($conn, $existSql);
$numExistRows = mysqli_num_rows($result);

if($numExistRows > 0){
$showError = true;
}
else {
    

        move_uploaded_file($filetmp_name,$destinationfile);

        $q = "INSERT INTO `image`(`photo`, `dis`) VALUES ('$filename','$dis')";
        $query =  mysqli_query($conn,$q);


    }

	if ($query) {
        $sweetAlert = true;

    }

}
} 
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../img/राष्ट्रीय विद्यार्थी सभा🇮🇳 20210605_112159.jpg" rel="icon" type="image/jpg" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
            integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" 
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>RVS Admin| राष्ट्रीय विद्यार्थी सभा </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/select2/select2.min.css" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
    </head>
    <body class="top-navbar-fixed">
        <div class="main-wrapper">

            <!-- ========== TOP NAVBAR ========== -->
  <?php include('includes/topbar.php');?> 
            <!-- ========== WRAPPER FOR BOTH SIDEBARS & MAIN CONTENT ========== -->
            <div class="content-wrapper">
                <div class="content-container">

                    <!-- ========== LEFT SIDEBAR ========== -->
                   <?php include('includes/leftbar.php');?>  
                    <!-- /.left-sidebar -->

                    <div class="main-page">

                     <div class="container-fluid">
                            <div class="row page-title-div">
                                <div class="col-md-6">
                                    <h2 class="title">Upload Photos</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">photos</li>
                                        <li class="active">Add photos</li>
                                    </ul>
                                </div>
                             
                            </div>
                            <!-- /.row -->
                        </div>
                        <div class="container-fluid">
                           
                        <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h5>Fill this form</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">
    <?php                                        
if($sweetAlert){

     echo  '<div class="alert alert-success alert-dismissible left-icon-alert" role="alert">
     <strong>Well done! </strong>photo added successfully.
     </div

          ' ;
       }
   ?>
    <?php                                        
if($showError){

     echo  '<div class="alert alert-danger alert-dismissible left-icon-alert" role="alert">
     <strong>Error! </strong>Image name already exists.<br>
     Change image name and try again.
     </div

          ' ;
       }
   ?>


        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Discription</label>
<div class="col-sm-10">
<input type="text"  class="form-control" id="dis" name="dis" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">Photo</label>
<div class="col-sm-10">
<input type="file"  class="form-control" id="uploadfile" name="uploadfile"  required="required" autocomplete="off">
</div>
</div>




    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="upload" class="btn btn-primary">Add</button>
        </div>
    </div>
</form>

            </div>
        </div>
    </div>
    <!-- /.col-md-12 -->
</div>
                    </div>
                </div>
                <!-- /.content-container -->
            </div>
            <!-- /.content-wrapper -->
        </div>
        <!-- /.main-wrapper -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>
        <script src="js/prism/prism.js"></script>
        <script src="js/select2/select2.min.js"></script>
        <script src="js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

        <script>
            $(function($) {
                $(".js-states").select2();
                $(".js-states-limit").select2({
                    maximumSelectionLength: 2
                });
                $(".js-states-hide").select2({
                    minimumResultsForSearch: Infinity
                });
            });
        </script>
    </body>
</html>
<?PHP }?>
