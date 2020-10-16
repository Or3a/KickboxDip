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

    h1 {
      margin: 0 0 20px 0;
      font-weight: 300;
      font-size: 28px;
    }

   
    button[type="submit"],
    button[type="button"] {
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
      box-shadow: 2px 2px #c96f53;
    }

    button[type="submit"]:hover,
    button[type="submit"]:focus,
    button[type="button"]:hover,
    button[type="button"]:focus {
      opacity: 0.8;
      box-shadow: 0 2px 4px #ffd0b0;
      transition: 0.1s ease;
    }

    button[type="submit"]:active,
    button[type="button"]:active {
      opacity: 1;
      box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.4);
      transition: 0.1s ease;
    }

    #login-box {
      position: relative;
      margin: 8% auto;
      width: 750px;
      height: 500px;
      background: #e0e0e0;
      border-radius: 2px;
      box-shadow: 9px 9px #263238, 13px 13px #c96f53, 8px 8px #e0e0e0 inset, 14px 14px #c96f53 inset;



    }
    .kuti{
      padding-left: 50px;
    }
    .kuti:hover {
      border-bottom: 2px solid #c96f53;
    }
    .butondjathtas {
      padding-left: 50px;
    
    }
    .emer{
      padding-left: 70px;
      padding-top: 30px;
    }
    .d{
      padding-left: 110px;
    }
  </style>
</head>

<body>

  <?php require 'header.php'; ?>



  <div id="login-box">

    <div>

      <?php if (isLogged()) : { ?>



        <?php if (isLoggedTR()) : { ?> 


          <?php
            $idT =  $_SESSION['tID'];
            $result = mysqli_query($conn, "SELECT * FROM trajneri
           WHERE trajneri.ID_trajneri = $idT"); ?>
        
        <?php while ($row = mysqli_fetch_array($result)) { ?>
        
          
        <div class="mdl-card__title mdl-card--expand emer">
          <h2 class="mdl-card__title-text">Pershendetje <?php echo "" . $row['Emer_tr']; ?></h2>
        </div>

        <div class="mdl-card__supporting-text ">
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--6-col kuti">
              <p class="cardCap"><b>Te dhena</b></p>
              <p>ID : <?php echo "" . $row['ID_trajneri']; ?></p>
              <p>Emri : <?php echo "" . $row['Emer_tr']; ?></p>
              <p>Mbiemri : <?php echo "" . $row['Mbiemer_tr']; ?></p>
              <p>Grupmoshat: <?php echo "" . $row['Grupmosha_tr']; ?></p>
             
            </div>
            <div class="mdl-cell mdl-cell--4-col kuti d">
       
            <?php if ($idT == "1")  {
              echo"<img class='kickbox-avatar' src='images/ilda.png'>";
            } 
            elseif ($idT == "2")  {
              echo"<img class='kickbox-avatar' src='images/alban.png'>";
            }else {
              echo"<img class='kickbox-avatar' src='images/ronald.png'>";
            }
          ?>
             
          </div>
         
            <div class="mdl-cell mdl-cell--8-col kuti">
              <p class="cardCap"><b>Informacion</b></p>
              <p><?php echo "" . $row['Info_tr']; ?></p>

            </div>
   
        
        <?php } }
                       mysqli_close($conn);    
                                                          endif ?>

    


        <?php if (isLoggedSP()) : { ?> 
        
        <?php
            $idS =  $_SESSION['sID'];
            $result = mysqli_query($conn, "SELECT * FROM sportisti 
           WHERE sportisti.ID_sportisti = $idS"); ?>

         <?php while ($row = mysqli_fetch_array($result)) { ?>
        
        <div class="mdl-card__title mdl-card--expand emer">
          <h2 class="mdl-card__title-text">Pershendetje <?php echo "" . $row['Emer_sp']; ?></h2>
        </div>

        <div class="mdl-card__supporting-text ">
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--4-col kuti">
              <p class="cardCap"><b>Te dhena</b></p>
              <p>ID : <?php echo "" . $row['ID_sportisti']; ?></p>
              <p>Username : <?php echo "" . $row['Username_sp']; ?></p>
              <p>Email: <?php echo "" . $row['Email_sp']; ?></p>
              <p>Datelindja : <?php echo "" . $row['Datelindja_sp']; ?></p>
              <p>Gjinia: <?php echo "" . $row['Gjinia_sp']; ?></p>
            </div>

            <div class="mdl-cell mdl-cell--4-col kuti">
              <p class="cardCap"><b>Matje</b></p>
              <p>Pesha: <?php echo "" . $row['Pesha_sp'] . ""; ?> kg</p>
              <p>Gjatesia: <?php echo "" . $row['Gjatesia_sp'] . ""; ?> m</p>
              <?php $bmi = $row['Pesha_sp']/($row['Gjatesia_sp'] * $row['Gjatesia_sp']);?>
              <p><strong>BMI: <?php echo "" . $bmi . ""; ?></strong></p>
            </div>
           
            <div class="mdl-cell mdl-cell--4-col kuti">
              <p class="cardCap"><b>Kontakt</b></p>
              <p>Celular : <?php echo "" . $row['Cel_sp']; ?></p>
              <p>Adresa : <?php echo "" . $row['Adresa_sp']; ?></p>
              <p>Qyteti: <?php echo "" . $row['Qyteti_sp']; ?></p>
              <p>Kodi ZIP: <?php echo "" . $row['ZipKodi_sp']; ?></p>
            </div>
          </div>
          <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--8-col kuti">
              <p class="cardCap"><b>Informacion</b></p>
              <p><?php echo "" . $row['Info_sp']; ?></p>

            </div>
         
        
    
        
        
        
        
        
        <?php } }
                       mysqli_close($conn);    
                                                          endif ?>

      <?php } else : { ?>
          <h1>Mirupafshim </h1>
      <?php }
      endif ?>


      <form method="get" action="profiliAdm.php">

      <div class="mdl-cell mdl-cell--4-col butondjathtas">
        <button id="show-dialog" type="button" class="mdl-button">Log out</button>
      </div>
      </div>
        <dialog class="mdl-dialog">
          <h4 class="mdl-dialog__title">Deshironi te dilni nga adresa juaj?</h4>
       
          <div class="mdl-dialog__actions ">
          <button type="submit" class="mdl-button" name="logout">Logout</button>
            <button type="button" class="mdl-button close">Mbyll</button>
          </div>
        </dialog>
  
    </div>
    </div>

    </form>




  <script src="../../material.min.js"></script>


</body>

<script>
          var dialog = document.querySelector('dialog');
          var showDialogButton = document.querySelector('#show-dialog');
          if (!dialog.showModal) {
            dialogPolyfill.registerDialog(dialog);
          }
          showDialogButton.addEventListener('click', function() {
            dialog.showModal();
          });
          dialog.querySelector('.close').addEventListener('click', function() {
            dialog.close();
          });
        </script>

</html>