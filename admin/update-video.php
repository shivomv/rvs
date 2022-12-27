<?php

include('../conn.php');


    $id = $_POST["id"]; 
    $dis = $_POST["dis"];
    $video_id = $_POST["video_id"];

    
			
	//	$num = mysqli_num_rows($result);

	// This sql query is use to check if
	// the username is already present
    	
    $sql = "UPDATE `video` SET `dis`='$dis',`video_id`='$video_id' WHERE id = {$id} "; 

    $result = mysqli_query($conn, $sql) or die("query failed");

    header("Location: manage-video.php"); 

?>