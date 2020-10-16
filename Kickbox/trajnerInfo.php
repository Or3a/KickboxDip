<!doctype html>

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
      font-weight: 350;
      font-size: 50px;
    }
  </style>
</head>

<body>

  <?php require 'header.php'; ?>




  <div id="trINFO-box">
    <div id="ilda">
      <?php $result = mysqli_query($conn, "SELECT * FROM trajneri WHERE ID_trajneri='1'"); ?>

      <?php while ($row = mysqli_fetch_array($result)) { ?>

        <div class="mdl-card__title mdl-card--expand emertrINFO">
          <h2 class="mdl-card__title-text">Trajner <?php echo "" . $row['Username_tr']; ?></h2>
        </div>

        <div class="mdl-card__supporting-text ">
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--8-col kutitrINFO">
              <p class="cardCap"><b>Te dhena</b></p>
              <p>ID : <?php echo "" . $row['ID_trajneri']; ?></p>
              <p>Emri : <?php echo "" . $row['Emer_tr']; ?></p>
              <p>Mbiemri : <?php echo "" . $row['Mbiemer_tr']; ?></p>
              <p>Grupmoshat: <?php echo "" . $row['Grupmosha_tr']; ?></p>
            </div>
            <div class="mdl-cell mdl-cell--4-col kutitrINFO d">
              <img class="kickbox-avatar" src="images/ilda.png">
            </div>
            <div class="mdl-cell mdl-cell--8-col kutitrINFO">
              <p></p>
              <p class="cardCap"><b>Informacion</b></p>
              <p><?php echo "" . $row['Info_tr']; ?></p>
            </div>
          </div>
        </div>
      <?php }   ?>
    </div>
  </div>

  <div id="trINFO-box">
    <div id="ronald">
      <?php $result = mysqli_query($conn, "SELECT * FROM trajneri WHERE ID_trajneri='3'"); ?>
      <?php while ($row = mysqli_fetch_array($result)) { ?>

        <div class="mdl-card__title mdl-card--expand emertrINFO">
          <h2 class="mdl-card__title-text">Trajner <?php echo "" . $row['Username_tr']; ?></h2>
        </div>
        <div class="mdl-card__supporting-text ">
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--6-col kutitrINFO">
              <p class="cardCap"><b>Te dhena</b></p>
              <p>ID : <?php echo "" . $row['ID_trajneri']; ?></p>
              <p>Emri : <?php echo "" . $row['Emer_tr']; ?></p>
              <p>Mbiemri : <?php echo "" . $row['Mbiemer_tr']; ?></p>
              <p>Grupmoshat: <?php echo "" . $row['Grupmosha_tr']; ?></p>
            </div>
            <div class="mdl-cell mdl-cell--6-col kutitrINFO">
              <img class="kickbox-avatar" src="images/ronald.png">
            </div>
            <div class="mdl-cell mdl-cell--8-col kutitrINFO">
              <p></p>
              <p class="cardCap"><b>Informacion</b></p>
              <p><?php echo "" . $row['Info_tr']; ?></p>
            </div>
          </div>
        </div>
      <?php }   ?>
    </div>
  </div>

  <div id="trINFO-box">
    <div id="alban">
      <?php $result = mysqli_query($conn, "SELECT * FROM trajneri WHERE ID_trajneri='2'"); ?>

      <?php while ($row = mysqli_fetch_array($result)) { ?>

        <div class="mdl-card__title mdl-card--expand emertrINFO">
          <h2 class="mdl-card__title-text">Trajner <?php echo "" . $row['Username_tr']; ?></h2>
        </div>
        <div class="mdl-card__supporting-text ">
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--6-col kutitrINFO">
              <p class="cardCap"><b>Te dhena</b></p>
              <p>ID : <?php echo "" . $row['ID_trajneri']; ?></p>
              <p>Emri : <?php echo "" . $row['Emer_tr']; ?></p>
              <p>Mbiemri : <?php echo "" . $row['Mbiemer_tr']; ?></p>
              <p>Grupmoshat: <?php echo "" . $row['Grupmosha_tr']; ?></p>
            </div>
            <div class="mdl-cell mdl-cell--6-col kutitrINFO">
              <img class="kickbox-avatar" src="images/alban.png" id="alban">
            </div>
            <div class="mdl-cell mdl-cell--8-col kutitrINFO">
              <p></p>
              <p class="cardCap"><b>Informacion</b></p>
              <p><?php echo "" . $row['Info_tr']; ?></p>
            </div>
          </div>
        </div>
      <?php }
      mysqli_close($conn);     ?>
    </div>
  </div>
  <?php include 'footer.php'; ?>
  <script src="../../material.min.js"></script>



</body>
</html>