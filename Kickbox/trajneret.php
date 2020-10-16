
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
  width: 800px;
  height: 480px;
  background: #e0e0e0;
  border-radius: 2px;
  box-shadow:   9px 9px #263238, 13px 13px #c96f53, 8px 8px #e0e0e0 inset, 14px 14px #c96f53 inset;

  
}


h1 {
  margin: 0 0 20px 0;
  font-weight: 300;
  font-size: 28px;
}





input[type="texti"],
input[type="password"]{
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

input[type="date"],
textarea,
select,
option  {
 font-family: 'Roboto', sans-serif;
  
  font-size: 15px;
  margin-bottom: 20px;
  width: 240px;
  padding: 4px;
  border: none;
  border-bottom: 1px solid #AAA;
  border-left: 1px solid #AAA;
  transition: 0.2s ease;
  background: #e0e0e0;

}

input[type="date"]:focus, 
textarea:focus,
select:focus
 {
  border-bottom: 2px solid #16a085;
  border-left: 2px solid #16a085;
  color: #16a085;
  transition: 0.2s ease;
}



input[type="texti"]:focus,
input[type="password"]:focus{
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
  width: 400px;
  height: 480px;
}

.right {
  position: absolute;
  top: 0;
  right: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 400px;
  height: 480px;
  border-radius: 0 2px 2px 0;
}

table{
  margin-top: 40px;
  margin-left: auto;
  margin-bottom: 40px;
  margin-right: auto;
  position: relative;
  width: 800px;
  background: #e0e0e0;
  border-radius: 2px;
  box-shadow:   9px 9px #263238, 13px 13px #c96f53, 8px 8px #e0e0e0 inset, 14px 14px #c96f53 inset;

}
table thead {
 
  background: #90a4ae;
}


  </style>
</head>

<body>

   
<?php include 'header.php'; ob_flush();?>



    
    <div id="login-box" >
    <form action="trajneret.php" method="post">

  <div class="left">
    <h1>Regjistro trajner</h1>

   <label for= "Username_tr"><input type="texti" name="Username_tr" placeholder="Username" /></label>
   <label for= "Emer_tr"><input type="texti" name="Emer_tr" placeholder="Emri" /></label>
   <label for= "Mbiemer_tr"><input type="texti" name="Mbiemer_tr" placeholder="Mbiemri" /></label>
   <label for= "Email_tr"><input type="texti" name="Email_tr" placeholder="E-maili" /></label>
   <label for= "Fjalekalim_tr"><input type="password" name="Fjalekalim_tr" placeholder="Fjalekalimi" /></label>
   <label for= "Fjalekalim_tr-repeat"><input type="password" name="Fjalekalim_tr-repeat" placeholder="Perserit fjalekalimin" /></label>
  
   </div>

   <div class="right">
    <br/><br/><br/>


    <select  name="Grupmosha_tr">
      <option value="" disabled selected>Grupmosha</option>
      <option value="femije">Femije</option>
      <option value="te rinj">Te rinj</option>
      <option value="te moshuar">Te moshuar</option>
  
    </select>
    
  
 
  <!-- <label for= "Grupmosha_tr" class = "m"><pre>Grupmosha  <input type="date" name="Grupmosha_tr" /></label></pre> -->
   

  <label for= "Info_tr"><textarea name="Info_tr" rows="5" cols="33" placeholder="Informacion" ></textarea></label>

      <!--  <iframe src="https://media.giphy.com/media/NXx6K8Vy1Nc9q/giphy.gif" width="480" height="270" frameBorder="0" ></iframe>-->
        <button type="submit" name="regjTr" value="regjTr" >Regjistro</button>
  </div>
    
   
 
  </form>
 
    </div>


    <table class="mdl-data-table";>
  <thead>
    
      <!-- jo numerike, majtas -->
      <th>ID</th>
      <th class="mdl-data-table__cell--non-numeric">EMER</th>
      <th class="mdl-data-table__cell--non-numeric">MBIEMER</th>
      <th class="mdl-data-table__cell--non-numeric">EMAIL</th>
      <th class="mdl-data-table__cell--non-numeric">GRUPMOSHA</th>
      <th class="mdl-data-table__cell--non-numeric">FSHIJ</th>
    
    </tr>
  </thead>
  <tbody>
 <?php $result = mysqli_query($conn, "SELECT * FROM trajneri");
       while ($row = mysqli_fetch_array($result)) { ?>
 
    <!-- Row 1 -->
    <tr>
      <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
      <td ><?php echo $row['ID_trajneri']; ?></td>
      <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Emer_tr']; ?></td>
      <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Mbiemer_tr']; ?></td>
      <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Email_tr']; ?></td>
      <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Grupmosha_tr']; ?></td>
      <td class="mdl-data-table__cell--non-numeric"><?php echo "<a href='fshij/fshiTR.php?deleteTR=".$row['ID_trajneri']."'>"; ?>
        <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
          <i class="material-icons">delete</i>
        </button></a>
      </td>
    
    </tr>
    
  <?php } mysqli_close($conn); ?>
  
    
  </tbody>
</table>
    



    <?php include 'footer.php'; ?>
    </div>
  </div>

  <script src="../../material.min.js"></script>


</body>

</html>