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
  </style>
</head>

<body>

  <?php include 'header.php';
  ob_flush(); ?>

  <div class="blerje">
    <table class="mdl-data-table" ;>
      <thead>

        <!-- jo numerike, majtas -->
        <tr>
          <th class="mdl-data-table__cell--non-numeric" style="background-color:#b0bec5">EMER</th>
          <th class="mdl-data-table__cell--non-numeric" style="background-color:#b0bec5">MBIEMER</th>
          <th style="background-color:#b0bec5"></th>
          <th class="mdl-data-table__cell--non-numeric" style="background-color:#b0bec5">KONTAKT</th>
          <th style="background-color:#b0bec5"></th>
          <th class="mdl-data-table__cell--non-numeric">ID E FATURES</th>
          <th class="mdl-data-table__cell--non-numeric">ID E PRODUKTIT</th>
          <th class="mdl-data-table__cell--non-numeric">PRODUKTI</th>
          <th class="mdl-data-table__cell--non-numeric">CMIMI PER PRODUKT</th>
          <th class="mdl-data-table__cell--non-numeric">SASIA E PRODUKTIT</th>
          <th class="mdl-data-table__cell--non-numeric">CMIMI TOTAL I PRODUKTIT</th>

        </tr>
      </thead>
      <tbody>
        <?php $result = mysqli_query($conn, "SELECT * FROM sportisti 
           JOIN fatura ON sportisti.ID_sportisti = fatura.ID_sportisti
           JOIN fatura_produkt ON fatura.ID_fatura = fatura_produkt.ID_fatura
           JOIN produkte ON fatura_produkt.ID_produkte = produkte.ID_produkte");

        while ($row = mysqli_fetch_array($result)) { ?>

          <!-- Row 1 -->
          <tr>
            <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
            <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Emer_sp']; ?></td>
            <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Mbiemer_sp']; ?></td>
            <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Cel_sp']; ?></td>
            <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Adresa_sp']; ?></td>
            <td class="mdl-data-table__cell--non-numeric"><?php echo $row['ZipKodi_sp']; ?></td>
            <td><?php echo $row['ID_fatura']; ?></td>
            <td><?php echo $row['ID_produkte']; ?></td>
            <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Emri_prod']; ?></td>
            <td><?php echo $row['Cmimi_prod']; ?> L</td>
            <td><?php echo $row['Sasia_produkt']; ?></td>
            <td><?php echo $row['Cmimi_prod'] * $row['Sasia_produkt']; ?> Leke</td>
          </tr>

        <?php }
        mysqli_close($conn); ?>


      </tbody>
    </table>
  </div>


  <script src="../../material.min.js"></script>


</body>

</html>