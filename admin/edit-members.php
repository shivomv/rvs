

<?php
session_start();
error_reporting(0);
$sweetAlert = false;

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
    }
    else{    

// Include file which makes the
// Database Connection.
include('../conn.php');


       
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
        <title>RVS Admin| Edit Members</title>
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
                                    <h2 class="title">Member Edit</h2>
                                
                                </div>
                                
                                <!-- /.col-md-6 text-right -->
                            </div>
                            <!-- /.row -->
                            <div class="row breadcrumb-div">
                                <div class="col-md-6">
                                    <ul class="breadcrumb">
                                        <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
                                
                                        <li class="active">Members</li>
                                        <li class="active">Manage Members</li>
                                        <li class="active">Edit Member</li>
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
                                                    <h5>Fill the Member's info</h5>
                                                </div>
                                            </div>
                                            <div class="panel-body">

                                         
                                                      
  <?php
if (!$conn) {
    //   echo "success";
    //} 
    //else {
        die("Error"  (mysqli_connect_error));
    }
    
    $ID = $_GET['id'];
    
    $sql = "SELECT * FROM `memberdata` WHERE SN = {$ID} ";
    $result = mysqli_query($conn, $sql) or die("query failed");

    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result) ) {
        
        ?>                                              

<form class="form-horizontal" method="post" action="update-member.php"  >
<div class="form-group">
<label for="default" class="col-sm-2 control-label">Name</label>
<div class="col-sm-10">
    <!-- hidden -->
<input type="hidden" name="SN" class="form-control"  value="<?php echo $row['SN'] ?>" required="required" >
<!-- active -->
<input type="text" name="jname" class="form-control" id="jname" value="<?php echo $row['jname'] ?>" required="required" autocomplete="off">
</div>
</div>



<div class="form-group">
<label for="default" class="col-sm-2 control-label">FATHER'S NAME</label>
<div class="col-sm-10">
<input type="text"  class="form-control" id="jfname" name="jfname"  required="required" autocomplete="off" value="<?php echo $row['jfname'] ?>" >
</div>
</div>

<div class="form-group">
<label for="default" class="col-sm-2 control-label">DOB</label>
<div class="col-sm-10">
<input type="date" class="form-control" id="jdob" name="jdob" required="required" autocomplete="off" value="<?php echo $row['jdob']?>" >
</div>
</div>
<div class="form-group">
<label for="default" class="col-sm-2 control-label">VILLAGE/MO.</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="jdob" id="jvname" name="jvname" required="required" autocomplete="off" value="<?php echo $row['jvname']?>" >
</div>
</div>
<div class="form-group">
<label for="default" class="col-sm-2 control-label">POST</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="jdob" id="jpost" name="jpost" required="required" autocomplete="off" value="<?php echo $row['jpost']?>" >
</div>
</div>
<div class="form-group">
<label for="default" class="col-sm-2 control-label">TEHSIL</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="jdob" id="jtehsil" name="jtehsil" required="required" autocomplete="off" value="<?php echo $row['jtehsil']?>" >
</div>
</div>
<div class="form-group">
<label for="default" class="col-sm-2 control-label">DISTRICT</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="jdob" id="jdistrict" name="jdistrict" required="required" autocomplete="off" value="<?php echo $row['jdistrict']?>" >
</div>
</div>
<div class="form-group">
<label for="default" class="col-sm-2 control-label">STATE</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="jdob" id="jstate" name="jstate" required="required" autocomplete="off" value="<?php echo $row['jstate']?>" >
</div>
</div>
<div class="form-group">
<label for="default" class="col-sm-2 control-label">MOBILE NO.</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="jdob" id="jmobile" id="jmobile" name="jmobile" required="required" autocomplete="off" value="<?php echo $row['jmobile']?>" >
</div>
</div>

</div>
</div>
                     
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </div>
            </div>
         </form>

<?php 
    }}
 ?>

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
