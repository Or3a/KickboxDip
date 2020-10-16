
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
  background: #1b1b1b;
  font-size: 16px;
  font-weight: 300;
}

#login-box {
  position: relative;
  margin: 5% auto;
  width: 800px;
  height: 480px;
  background: #e0e0e0;
  border-radius: 2px;
  box-shadow: 0 2px 4px #7f0000 inset;

  
}

.left {
  position: absolute;
  top: 0;
  left: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 320px;
  height: 480px;
}

h1 {
  margin: 0 0 20px 0;
  font-weight: 300;
  font-size: 28px;
}

input[type="texti"],
input[type="password"] {
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

input[type="texti"]:focus,
input[type="password"]:focus {
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

.right {
  position: absolute;
  top: 0;
  right: 0;
  box-sizing: border-box;
  padding-top: 100px;
  padding-left:10px;
  width: 470px;
  height: 480px;
  border-radius: 0 2px 2px 0;
}



  </style>
</head>

<body>

    <?php include 'header.php'; ?>


    
    <div id="login-box" >
    <form action="regjistrim.php" method="post">
  <div class="left">
    <h1>Regjistrim</h1>

   <label for= "Username_adm"><input type="texti" name="Username_adm" placeholder="Username" /></label>
   <label for= "Emer_adm"><input type="texti" name="Emer_adm" placeholder="Emri" /></label>
   <label for= "Mbiemer_adm"><input type="texti" name="Mbiemer_adm" placeholder="Mbiemri" /></label>
   <label for= "Email_adm"><input type="texti" name="Email_adm" placeholder="E-maili" /></label>
   <label for= "Fjalekalim_adm"><input type="password" name="Fjalekalim_adm" placeholder="Fjalekalimi" /></label>
   <label for= "Fjalekalim_adm-repeat"><input type="password" name="Fjalekalim_adm-repeat" placeholder="Perserit fjalekalimin" /></label>
    
    <button type="submit" name="regj" value="regj" >Regjistrohu</button>
  </div>

  </form>
  
  <div class="right">
    <br/>
      <!--  <iframe src="https://media.giphy.com/media/NXx6K8Vy1Nc9q/giphy.gif" width="480" height="270" frameBorder="0" ></iframe>-->
  </div>
    </div>
    

  <script src="../../material.min.js"></script>


</body>

</html>