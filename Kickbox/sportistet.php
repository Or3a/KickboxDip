<?php
ob_start();
?>

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
      font-size: 16px;
      font-weight: 300;
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
        url('images/profili.png') bottom right 10% no-repeat #90a4ae;
    }
  </style>
</head>

<body>

  <?php include 'header.php';
  ob_flush(); ?>
  <div class="sportistet">
    <form action="" method="post">
      <div class=" mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label searchSP">
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
              <div class="mdl-cell mdl-cell--4-col kutiSP">
                <p class="cardCapSP">Te dhena</p>
                <p>ID : <?php echo "" . $row['ID_sportisti']; ?></p>
                <p>Username : <?php echo "" . $row['Username_sp']; ?></p>
                <p>Email: <?php echo "" . $row['Email_sp']; ?></p>
                <p>Datelindja : <?php echo "" . $row['Datelindja_sp']; ?></p>
                <p>Gjinia: <?php echo "" . $row['Gjinia_sp']; ?></p>
              </div>
              <div class="mdl-cell mdl-cell--4-col kutiSP">
                <p class="cardCapSP">Matje</p>
                <p>Pesha: <?php echo "" . $row['Pesha_sp'] . ""; ?> kg</p>
                <p>Gjatesia: <?php echo "" . $row['Gjatesia_sp'] . ""; ?> m</p>
                <?php $bmi = $row['Pesha_sp'] / ($row['Gjatesia_sp'] * $row['Gjatesia_sp']); ?>
                <p>BMI: <?php echo "" . $bmi . ""; ?></p>
              </div>
              <div class="mdl-cell mdl-cell--4-col kutiSP">
                <p class="cardCapSP">Kontakt</p>
                <p>Celular : <?php echo "" . $row['Cel_sp']; ?></p>
                <p>Adresa : <?php echo "" . $row['Adresa_sp']; ?></p>
                <p>Qyteti: <?php echo "" . $row['Qyteti_sp']; ?></p>
                <p>Kodi ZIP: <?php echo "" . $row['ZipKodi_sp']; ?></p>
              </div>
            </div>

            <div class="mdl-grid">
              <div class="mdl-cell mdl-cell--8-col kutiSP">
                <p class="cardCapSP">Informacion</p>
                <p><?php echo "" . $row['Info_sp']; ?></p>
              </div>
            </div>
          </div>

          <div class="mdl-card__actions mdl-card--border">
            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect butondjathtasSP">
              Modifiko sportist
            </a>
          </div>
        </div>
    <?php
      }
    } ?>

    <div id="sportistet-box">
      <form action="sportistet.php" method="post">
        <div class="leftSP">
          <h1>Regjistro sportist</h1>
          <label for="Username_sp"><input type="texti" name="Username_sp" placeholder="Username" /></label>
          <label for="Emer_sp"><input type="texti" name="Emer_sp" placeholder="Emri" /></label>
          <label for="Mbiemer_sp"><input type="texti" name="Mbiemer_sp" placeholder="Mbiemri" /></label>
          <label for="Email_sp"><input type="texti" name="Email_sp" placeholder="E-maili" /></label>
          <label for="Fjalekalim_sp"><input type="password" name="Fjalekalim_sp" placeholder="Fjalekalimi" /></label>
          <label for="Fjalekalim_sp-repeat"><input type="password" name="Fjalekalim_sp-repeat" placeholder="Perserit fjalekalimin" /></label>
          <label for="Info_sp"><textarea name="Info_sp" rows="3" cols="33" placeholder="Informacion"></textarea></label>
        </div>

        <div class="rightSP">
          <br /><br /><br />
          <label for="Cel_sp"><input type="texti" name="Cel_sp" placeholder="Celulari" /></label>
          <label for="Adresa_sp"><input type="texti" name="Adresa_sp" placeholder="Adresa" /></label>
          <label for="Qyteti_sp"><input type="qytet" name="Qyteti_sp" placeholder="Qyteti" /></label>
          <label for="ZipKodi_sp"><input type="qytet" name="ZipKodi_sp" placeholder="Kodi Zip" pattern="[0-9]{4}" /><small>(nnnn)</small></label>
          <label for="Datelindja_sp" class="mSP">
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
            <br /> <button type="submit" name="regjSp" value="regjSp">Regjistro</button>
        </div>

      </form>
    </div>

    <br />
    <br />

    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
      <div class="mdl-tabs__tab-bar ">
        <a href="#panel-sportistet" class="mdl-tabs__tab is-active captionSP">Sportistet</a>
        <a href="#panel-sportistetEMij" class="mdl-tabs__tab captionSP">Sportistet e mij</a>
      </div>

      <div class="mdl-tabs__panel is-active" id="panel-sportistet">
        <table class="mdl-data-table" ;>
          <thead>
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
              <tr>
                <td><?php echo $row['ID_sportisti']; ?></td>
                <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Emer_sp']; ?></td>
                <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Mbiemer_sp']; ?></td>
                <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Email_sp']; ?></td>
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

                  <tr>
                    <td><?php echo $row['ID_sportisti']; ?></td>
                    <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Emer_sp']; ?></td>
                    <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Mbiemer_sp']; ?></td>
                    <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Email_sp']; ?></td>
                    <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Datelindja_sp']; ?></td>
                    <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Cel_sp']; ?></td>
                    <td class="mdl-data-table__cell--non-numeric"><?php echo "<a href='fshij/fshijSP.php?deleteSP=" . $row['ID_sportisti'] . "'>"; ?>
                      <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                        <i class="material-icons">delete</i>
                      </button></a></td>
                  </tr>
            <?php }
              }
              mysqli_close($conn);
            endif ?>

              </tbody>
            </table>
          </div>
    </div>
  </div>

  </div>
  </div>

  <script src="../../material.min.js"></script>

</body>

</html>