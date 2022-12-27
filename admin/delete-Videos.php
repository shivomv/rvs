<?php

$ID = $_GET['id'];

include('../conn.php');

$sql = "DELETE FROM `video` WHERE id = {$ID} "; 

$result = mysqli_query($conn, $sql) or die("query failed");

header("Location: manage-video.php"); 

mysqli_close($conn);
?>