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
      width: 800px;
      height: 290px;
      background: #e0e0e0;
      border-radius: 2px;
      box-shadow:
        16px 16px #263238, 28px 28px #c96f53;



    }

    .left {
      position: absolute;
      top: 0;
      left: 0;
      width: 520px;
      height: 270px;
      box-sizing: border-box;
      padding: 30px;

    }

    .right {
      position: absolute;
      top: 0;
      right: 0;
      box-sizing: border-box;
      padding: 20px;
      width: 300px;
      height: 270px;

    }
  </style>
</head>

<body>

  <?php require 'header.php'; ?>



  <div id="login-box">

    <div class="left">

      <?php if (isLoggedADM()) : { ?>

          <h1>Pershendetje <?php echo $_SESSION['Emer']; ?></h1>
          <h6>(admin) </h6>
    

      <?php } else : { ?>
          <h1>Mirupafshim </h1>
      <?php }
      endif ?>


      <form method="get" action="profiliAdm.php">

        
        <button id="show-dialog" type="button" class="mdl-button">Log out</button>
        <dialog class="mdl-dialog">
          <h4 class="mdl-dialog__title">Deshironi te dilni nga adresa juaj?</h4>
       
          <div class="mdl-dialog__actions">
          <button type="submit" class="mdl-button" name="logout">Logout</button>
            <button type="button" class="mdl-button close">Mbyll</button>
          </div>
        </dialog>
  
    </div>

    </form>

    <div class="right">
      <br />
      <!--  <iframe src="https://media.giphy.com/media/NXx6K8Vy1Nc9q/giphy.gif" width="480" height="270" frameBorder="0" ></iframe>-->
    </div>
  </div>


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