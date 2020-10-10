<?php
require '../funksione/databaza.php'; 
$rresht = $_GET['deleteKLS'];
$fshi = "DELETE FROM seanca_kls WHERE ID_seanca = '$rresht'";
mysqli_query($conn,$fshi);
header("location: ../klasa.php");
?>
