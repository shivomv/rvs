<?php

include('../conn.php');


    $SN = $_POST["SN"];
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
    	
    $sql = "UPDATE `memberdata` SET `jname`='$jname',`jfname`='$jfname',`jdob`='$jdob',`jvname`='$jvname',`jpost`='$jpost',`jtehsil`='$jtehsil',`jdistrict`='$jdistrict',`jstate`='$jstate',`jmobile`='$jmobile' WHERE SN = {$SN} "; 

    $result = mysqli_query($conn, $sql) or die("query failed");

    header("Location: manage-members.php"); 

?>