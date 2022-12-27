<?php

$ID = $_GET['id'];

include('../conn.php');

$sql = "DELETE FROM `memberdata` WHERE SN = {$ID} "; 

$result = mysqli_query($conn, $sql) or die("query failed");

header("Location: manage-members.php"); 

mysqli_close($conn);
?>