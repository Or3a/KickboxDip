<?php
require '../funksione/databaza.php'; 
$rr = $_GET['deletePROD'];
$fshi = "DELETE FROM produkte WHERE ID_produkte = '$rr'";
mysqli_query($conn,$fshi);
header("location: ../produkte.php");
?>