<?php
require '../funksione/databaza.php'; 
$rr = $_GET['deleteFOTO'];
$fshi = "DELETE FROM galeria WHERE ID_foto = '$rr'";
mysqli_query($conn,$fshi);
header("location: ../kryefaqja.php");
?>