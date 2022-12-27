<?php

$ID = $_GET['id'];

include('../conn.php');

$sql = "DELETE FROM `image` WHERE id = {$ID} "; 

$result = mysqli_query($conn, $sql) or die("query failed");

header("Location: manage-photos.php"); 

mysqli_close($conn);
?>