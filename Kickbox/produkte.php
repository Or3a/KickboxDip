
<?php
ob_start();
?>


<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Introducing Lollipop, a sweet new take on kickbox.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>kickbox</title>

  <!-- Page styles -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="material.min.css">
  <link rel="stylesheet" href="styles.css">
  <style>

    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }


    *:focus {
  outline: none;
}

body {
  margin: 0;
  padding: 0;
  background: #263238;
  font-size: 16px;
  font-weight: 300;
}



#login-box {
  position: relative;
  margin: 4% auto;
  width: 700px;
  height: 300px;
  background: #e0e0e0;
  border-radius: 2px;
  box-shadow:   9px 9px #263238, 13px 13px #c96f53, 8px 8px #e0e0e0 inset, 14px 14px #c96f53 inset;

  
}


h1 {
  margin: 0 0 20px 0;
  font-weight: 300;
  font-size: 28px;
}





input[type="texti"]{
  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 240px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;
  background: #e0e0e0;
}

.m {
 
 font-family: 'Roboto', sans-serif;
 font-weight: 400;
 font-size: 15px;
 

}



input[type="texti"]:focus{
  border-bottom: 2px solid #16a085;
  color: #16a085;
  transition: 0.2s ease;
}




button[type="submit"] {
  margin-top: 28px;
  width: 120px;
  height: 32px;
  background: #ff9e80;
  border: none;
  border-radius: 2px;
  color: #212121;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  text-transform: uppercase;
  transition: 0.1s ease;
  cursor: pointer;
}

button[type="submit"]:hover,
button[type="submit"]:focus {
  opacity: 0.8;
  box-shadow: 0 2px 4px #ffd0b0;
  transition: 0.1s ease;
}

button[type="submit"]:active {
  opacity: 1;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}
.left {
  position: absolute;
  top: 0;
  left: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 250px;
  height: 300px;
}

.right {
  position: absolute;
  top: 0;
  right: 0;
  box-sizing: border-box;
  padding: 40px;
  padding-right: 20px;
  width: 400px;
  height: 300px;
  border-radius: 0 2px 2px 0;
}

table{
  margin-top: 40px;
  margin-left: auto;
  margin-bottom: 40px;
  margin-right: auto;
  position: relative;
  width: 700px;
  background: #e0e0e0;
  border-radius: 2px;
  box-shadow:   9px 9px #263238, 13px 13px #c96f53, 8px 8px #e0e0e0 inset, 14px 14px #c96f53 inset;

}
table thead {
 
  background: #90a4ae;
}
 .rr {
   background-color: #e0e0e0;
 }

  </style>
</head>

<body>

<?php include 'header.php'; ob_flush();?>

<?php include 'funksione/mom.php'; ob_flush();?>

    
    <div id="login-box" >
    <form action="produkte.php" method="post" enctype="multipart/form-data">

  <div class="left">
    <h1>Shto produkt</h1>

  
   <label for= "emri"><input type="texti" name="emri" placeholder="Produkti" /></label>
   <label for= "cmimi"><input type="texti" name="cmimi" placeholder="Cmimi" /></label>
    
    
   </div>

   <div class="right">
    <br/><br/><br/>
    <label for= "file">Zgjidh foto</label>
    <input type="file" name="file"/> <br/>
      <!--  <iframe src="https://media.giphy.com/media/NXx6K8Vy1Nc9q/giphy.gif" width="480" height="270" frameBorder="0" ></iframe>-->
        <button type="submit" name="krijoPROD" value="krijoPROD" >Shto</button>
  </div>
    
   
 
  </form>
 
    </div>


    <table class="mdl-data-table";>
  <thead>
    
      <!-- jo numerike, majtas -->
      <th>ID</th>
      <th class="mdl-data-table__cell--non-numeric">EMRI</th>
      <th class="mdl-data-table__cell--non-numeric">CMIMI</th>
      <th class="mdl-data-table__cell--non-numeric">FSHIJ</th>
    
    </tr>
  </thead>
  <tbody>
 <?php $result = mysqli_query($conn, "SELECT * FROM produkte");
       while ($row = mysqli_fetch_array($result)) { ?>
 
    <!-- Row 1 -->
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td class = "rr"><?php echo $row['ID_produkte']; ?></td>
      <td class="mdl-data-table__cell--non-numeric rr"><?php echo $row['Emri_prod']; ?></td>
      <td class="mdl-data-table__cell--non-numeric rr"><?php echo $row['Cmimi_prod']; ?> Leke</td>
      <td class="mdl-data-table__cell--non-numeric rr"><?php echo "<a href='fshij/fshiPROD.php?deletePROD=".$row['ID_produkte']."'>"; ?> 
        <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
          <i class="material-icons">delete</i>
        </button></a>
      </td>
    </tr>
      <tr><td></td><td class="mdl-data-table__cell--non-numeric" colspan = "3"><img src='<?php echo $row['Foto_prod']; ?>'></td></tr>
      
    
    
  <?php } mysqli_close($conn); ?>
  
    
  </tbody>
</table>
    



    <?php include 'footer.php'; ?>
    </div>
  </div>

  <script src="../../material.min.js"></script>


</body>

</html>