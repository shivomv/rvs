<?php

include('../conn.php');


    $SN = $_POST["SN"]; 
    $dis = $_POST["dis"];

    
			
	//	$num = mysqli_num_rows($result);

	// This sql query is use to check if
	// the username is already present
    	
    $sql = "UPDATE `image` SET `dis`='$dis' WHERE id = {$SN} "; 

    $result = mysqli_query($conn, $sql) or die("query failed");

    header("Location: manage-Photos.php"); 

?>