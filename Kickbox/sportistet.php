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
      margin: 5% auto;
      width: 800px;
      height: 550px;
      background: #e0e0e0;
      border-radius: 2px;
      box-shadow: 8px 8px #263238, 14px 14px #c96f53, 8px 8px #e0e0e0 inset, 14px 14px #c96f53 inset;


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

    input[type="qytet"] {

      box-sizing: border-box;
      margin-bottom: 20px;
      padding: 4px;
      width: 120px;
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
    textarea {
      font-family: 'Roboto', sans-serif;

      font-size: 15px;
      margin-bottom: 20px;
      padding: 4px;
      border: none;
      border-bottom: 1px solid #AAA;
      border-left: 1px solid #AAA;
      transition: 0.2s ease;
      background: #e0e0e0;
      width: 140px;

    }

    input[type="date"]:focus,
    textarea:focus {
      border-bottom: 2px solid #16a085;
      border-left: 2px solid #16a085;
      color: #16a085;
      transition: 0.2s ease;
    }


    input[type="texti"]:focus,
    input[type="password"]:focus,
    input[type="qytet"]:focus {
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
      height: 550px;
    }

    .right {
      position: absolute;
      top: 0;
      right: 0;
      box-sizing: border-box;
      padding: 40px;
      width: 400px;
      height: 550px;
      border-radius: 0 2px 2px 0;
    }


    table {
      border: none;
      margin-top: 40px;
      margin-left: auto;
      margin-bottom: 40px;
      margin-right: auto;
      position: relative;
      width: 800px;
      background: #e0e0e0;
      border-radius: 2px;
      box-shadow: 9px 9px #263238, 13px 13px #c96f53, 8px 8px #e0e0e0 inset, 14px 14px #c96f53 inset;

    }

    table thead {
      background: #90a4ae;
    }

    .search {

      position: relative;
      margin: 2% auto;
      color: #ffd0b0;
      left: 900px;

    }

    .caption {
      font-family: 'Roboto', sans-serif;
      color: #ffd0b0;

      font-weight: 400;
      font-size: 20px;

    }

    .cardCap {
      font-family: 'Roboto', sans-serif;
      color: #3f51b5;
      font-weight: 400;
      font-size: 20px;
    }


    .demo-card-wide.mdl-card {
      position: relative;
      margin: auto;
      width: 800px;
      background: #e0e0e0;
      border-radius: 2px;
      box-shadow: 8px 8px #263238, 14px 14px #c96f53, 8px 8px #e0e0e0 inset, 14px 14px #c96f53 inset;
    }

    .demo-card-wide>.mdl-card__title {
      font-family: 'Roboto', sans-serif;
      color: #263238;
      height: 55px;
      background:
        url('images/profili.png') bottom right 10%  no-repeat #90a4ae;
    }
    .kuti{
      padding-left: 50px;
    }
    .kuti:hover {
      border-bottom: 2px solid #c96f53;
    }
    .butondjathtas {
     
     left: 600px;
    
    }

  </style>
</head>

<body>

  <?php include 'header.php';
  ob_flush(); ?>

  <form action="" method="post">

    <div class=" mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label search">
      <label class="mdl-button mdl-js-button mdl-button--icon" for="sample6">
        <i class="material-icons">search</i>
      </label>
      <div class="mdl-textfield__expandable-holder">
        <input class="mdl-textfield__input" type="text" id="sample6" name="spUsername">
        <label class="mdl-textfield__label" for="sample-expandable">Kerko sportist</label>

      </div>
    </div>
  </form>



  <?php



  if (!empty($_REQUEST['spUsername'])) {
      $term = mysqli_real_escape_string($conn, $_REQUEST['spUsername']);

      $sql = "SELECT * FROM sportisti WHERE Emer_sp LIKE '%" . $term . "%' OR Mbiemer_sp LIKE '%" . $term . "%' ";
      $r_query = mysqli_query($conn, $sql);

      while ($row = mysqli_fetch_array($r_query)) {
          ?>
      <div class="demo-card-wide mdl-card mdl-shadow--2dp">
        <div class="mdl-card__title mdl-card--expand">
          <h2 class="mdl-card__title-text"><?php echo "" . $row['Emer_sp'] .  " " . $row['Mbiemer_sp']; ?></h2>
        </div>


        <div class="mdl-card__supporting-text ">
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--4-col kuti">
              <p class="cardCap">Te dhena</p>
              <p>ID : <?php echo "" . $row['ID_sportisti']; ?></p>
              <p>Username : <?php echo "" . $row['Username_sp']; ?></p>
              <p>Email: <?php echo "" . $row['Email_sp']; ?></p>
              <p>Datelindja : <?php echo "" . $row['Datelindja_sp']; ?></p>
              <p>Gjinia: <?php echo "" . $row['Gjinia_sp']; ?></p>
            </div>

            <div class="mdl-cell mdl-cell--4-col kuti">
              <p class="cardCap">Matje</p>

              
              <p>Pesha: <?php echo "" . $row['Pesha_sp'] . ""; ?> kg</p>
              <p>Gjatesia: <?php echo "" . $row['Gjatesia_sp'] . ""; ?> m</p>
              <?php $bmi = $row['Pesha_sp']/($row['Gjatesia_sp'] * $row['Gjatesia_sp']);?>
              <p>BMI: <?php echo "" . $bmi . ""; ?></p>
            </div>
           
            <div class="mdl-cell mdl-cell--4-col kuti">
              <p class="cardCap">Kontakt</p>
              <p>Celular : <?php echo "" . $row['Cel_sp']; ?></p>
              <p>Adresa : <?php echo "" . $row['Adresa_sp']; ?></p>
              <p>Qyteti: <?php echo "" . $row['Qyteti_sp']; ?></p>
              <p>Kodi ZIP: <?php echo "" . $row['ZipKodi_sp']; ?></p>
            </div>
          </div>
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--8-col kuti">
              <p class="cardCap">Informacion</p>
              <p><?php echo "" . $row['Info_sp']; ?></p>

            </div>
          </div>
        </div>

        <div class="mdl-card__actions mdl-card--border">
          <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect butondjathtas">
            Modifiko sportist
          </a>
        </div>
      </div>
  <?php
      }
  } ?>





  <div id="login-box">
    <form action="sportistet.php" method="post">

      <div class="left">
        <h1>Regjistro sportist</h1>

        <label for="Username_sp"><input type="texti" name="Username_sp" placeholder="Username" /></label>
        <label for="Emer_sp"><input type="texti" name="Emer_sp" placeholder="Emri" /></label>
        <label for="Mbiemer_sp"><input type="texti" name="Mbiemer_sp" placeholder="Mbiemri" /></label>
        <label for="Email_sp"><input type="texti" name="Email_sp" placeholder="E-maili" /></label>
        <label for="Fjalekalim_sp"><input type="password" name="Fjalekalim_sp" placeholder="Fjalekalimi" /></label>
        <label for="Fjalekalim_sp-repeat"><input type="password" name="Fjalekalim_sp-repeat" placeholder="Perserit fjalekalimin" /></label>
        <label for="Info_sp"><textarea name="Info_sp" rows="3" cols="33" placeholder="Informacion"></textarea></label>

      </div>

      <div class="right">
        <br /><br /><br />

        <label for="Cel_sp"><input type="texti" name="Cel_sp" placeholder="Celulari" /></label>
        <label for="Adresa_sp"><input type="texti" name="Adresa_sp" placeholder="Adresa" /></label>
        <label for="Qyteti_sp"><input type="qytet" name="Qyteti_sp" placeholder="Qyteti" /></label>
        <label for="ZipKodi_sp"><input type="qytet" name="ZipKodi_sp" placeholder="Kodi Zip" pattern="[0-9]{4}" /><small>(nnnn)</small></label>
        <label for="Datelindja_sp" class="m">
          <pre>Datelindja  <input type="date" name="Datelindja_sp" /></label></pre>
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-id1">
            <input type="radio" id="option-id1" class="mdl-radio__button" name="Gjinia_sp" value="f" checked>
            <span class="mdl-radio__label">Femer</span>
          </label>
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-id2">
            <input type="radio" id="option-id2" class="mdl-radio__button" name="Gjinia_sp" value="m">
            <span class="mdl-radio__label">Mashkull</span>
          </label>
          <br /> <br />
          <label for="Pesha_sp"><input type="qytet" name="Pesha_sp" placeholder="Pesha" /><small>(kg)</small></label>
          <label for="Gjatesia_sp"><input type="qytet" name="Gjatesia_sp" placeholder="Gjatesia" /><small>(m)</small></label>

          <!--  <iframe src="https://media.giphy.com/media/NXx6K8Vy1Nc9q/giphy.gif" width="480" height="270" frameBorder="0" ></iframe>-->
          <br /> <button type="submit" name="regjSp" value="regjSp">Regjistro</button>
      </div>



    </form>

  </div>

  <br />
  <br />

  <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="mdl-tabs__tab-bar ">
      <a href="#panel-sportistet" class="mdl-tabs__tab is-active caption">Sportistet</a>
      <a href="#panel-sportistetEMij" class="mdl-tabs__tab caption">Sportistet e mij</a>
    </div>



    <div class="mdl-tabs__panel is-active" id="panel-sportistet">
      <table class="mdl-data-table" ;>


        <thead>

          <!-- jo numerike, majtas -->
          <tr>
            <th>ID</th>
            <th class="mdl-data-table__cell--non-numeric">EMER</th>
            <th class="mdl-data-table__cell--non-numeric">MBIEMER</th>
            <th class="mdl-data-table__cell--non-numeric">Email</th>

          </tr>
        </thead>
        <tbody>
          <?php $result = mysqli_query($conn, "SELECT * FROM sportisti");
          while ($row = mysqli_fetch_array($result)) { ?>

            <!-- Row 1 -->
            <tr>
              <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
              <td><?php echo $row['ID_sportisti']; ?></td>
              <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Emer_sp']; ?></td>
              <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Mbiemer_sp']; ?></td>
              <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Email_sp']; ?></td>

             
              </td>


            </tr>

          <?php }
          ?>






        </tbody>
      </table>
    </div>
    <?php if (isLoggedTR()) : { ?> 

    <div class="mdl-tabs__panel" id="panel-sportistetEMij">



      <table class="mdl-data-table" ;>


        <thead>

          <!-- jo numerike, majtas -->
          <tr>
            <th>ID</th>
            <th class="mdl-data-table__cell--non-numeric">EMER</th>
            <th class="mdl-data-table__cell--non-numeric">MBIEMER</th>
            <th class="mdl-data-table__cell--non-numeric">EMAIL</th>
            <th class="mdl-data-table__cell--non-numeric">DATELINDJA</th>
            <th class="mdl-data-table__cell--non-numeric">NR. CELULARI</th>
            <th class="mdl-data-table__cell--non-numeric">FSHIJ</th>

          </tr>
        </thead>
        <tbody>
       

          <?php
           $idT =  $_SESSION['tID'];
            $result = mysqli_query($conn, "SELECT * FROM sportisti 
           JOIN seance_sportist ON sportisti.ID_sportisti = seance_sportist.ID_sportisti
           JOIN seanca_kls ON seance_sportist.ID_seanca = seanca_kls.ID_seanca
           JOIN trajneri ON seanca_kls.ID_trajneri = trajneri.ID_trajneri
           WHERE trajneri.ID_trajneri = $idT"); ?>

         <?php while ($row = mysqli_fetch_array($result)) { ?>

            <!-- Row 1 -->
            <tr>
              <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
              <td><?php echo $row['ID_sportisti']; ?></td>
              <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Emer_sp']; ?></td>
              <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Mbiemer_sp']; ?></td>
              <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Email_sp']; ?></td>
              <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Datelindja_sp']; ?></td>
              <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Cel_sp']; ?></td>
              <td class="mdl-data-table__cell--non-numeric"><?php echo "<a href='fshij/fshijSP.php?deleteSP=" . $row['ID_sportisti'] . "'>"; ?>
                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                  <i class="material-icons">delete</i>
                </button></a>
              </td>


            </tr>
         <?php }}
                       mysqli_close($conn);                                   endif ?>
         






        </tbody>
      </table>








    </div>
  </div>




  <?php include 'footer.php'; ?>
  </div>
  </div>

  <script src="../../material.min.js"></script>


</body>

</html>