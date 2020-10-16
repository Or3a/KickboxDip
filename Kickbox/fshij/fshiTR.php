<?php
require '../funksione/databaza.php'; 
$rresht = $_GET['deleteTR'];
$fshi = "DELETE FROM trajneri WHERE ID_trajneri = '$rresht'";
mysqli_query($conn,$fshi);
header("location: ../trajneret.php");
