<?php
require '../funksione/databaza.php'; 
$rresht = $_GET['deleteSP'];
$fshi = "DELETE FROM sportisti WHERE ID_sportisti = '$rresht'";
mysqli_query($conn,$fshi);
header("location: ../sportistet.php");
