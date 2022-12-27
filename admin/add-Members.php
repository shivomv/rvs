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
   
	

if($_SERVER["REQUEST_METHOD"] == "POST") {
	
	// Include file which makes the
	// Database Connection.
	include '../conn.php';
	
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

	// This sql query is use to check if
	// the username is already present
    	
    $sql = "INSERT INTO `memberdata`(`SN`, `jname`, `jfname`, `jdob`, `jvname`, `jpost`, `jtehsil`, `jdistrict`, `jstate`, `jmobile`) VALUES ('','$jname','$jfname','$jdob ','$jvname','$jpost','$jtehsil','$jdistrict','$jstate','$jmobile')"; 

    $result = mysqli_query($conn, $sql);

	if ($result) {
        $sweetAlert = true;

    }

else {
    echo 'error';
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
                                    <h2 class="title">Member Registration</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Members</li>
                                        <li class="active">Add Members</li>
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

     echo  '<div class="alert alert-success left-icon-alert" role="alert">
     <strong>Well done! </strong>Member added successfully.
     </div

          ' ;
       }
   ?>


        <form class="form-horizontal" method="post" action="">

<div class="form-group">
<label for="default" class="col-sm-2 control-label">NAME</label>
<div class="col-sm-10">
<input type="text"  class="form-control" id="jname" name="jname" required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">FATHER'S NAME</label>
<div class="col-sm-10">
<input type="text"  class="form-control" id="jfname" name="jfname"  required="required" autocomplete="off">
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">DOB</label>
<div class="col-sm-10">
<input type="date" class="form-control" id="jdob" name="jdob" required="required" autocomplete="off">
</div>
</div>
<div class="form-group">
<label for="default" class="col-sm-2 control-label">VILLAGE/MO.</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="jdob" id="jvname" name="jvname" required="required" autocomplete="off">
</div>
</div>
<div class="form-group">
<label for="default" class="col-sm-2 control-label">POST</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="jdob" id="jpost" name="jpost"" required="required" autocomplete="off">
</div>
</div>
<div class="form-group">
<label for="default" class="col-sm-2 control-label">TEHSIL</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="jdob" id="jtehsil" name="jtehsil" required="required" autocomplete="off">
</div>
</div>
<div class="form-group">
<label for="default" class="col-sm-2 control-label">DISTRICT</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="jdob" id="jdistrict" name="jdistrict" required="required" autocomplete="off">
</div>
</div>
<div class="form-group">
<label for="default" class="col-sm-2 control-label">STATE</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="jdob" id="jstate" name="jstate" required="required" autocomplete="off">
</div>
</div>
<div class="form-group">
<label for="default" class="col-sm-2 control-label">MOBILE NO.</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="jdob" id="jstate" id="jmobile" name="jmobile" required="required" autocomplete="off">
</div>
</div>




    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="submit" class="btn btn-primary">Add</button>
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
<?PHP } ?>
