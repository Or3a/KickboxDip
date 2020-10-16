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
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en"
        rel="stylesheet">
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

    <?php include 'funksione/galeri.php';
  ob_flush(); ?>

      <div id="foto-box" class="fotoo">
          <form action="fotot.php" method="post" enctype="multipart/form-data">

            <h1>Shto foto</h1>
            <label for="file">Zgjidh foto</label>
            <input type="file" name="file" /> <br />
            <!--  <iframe src="https://media.giphy.com/media/NXx6K8Vy1Nc9q/giphy.gif" width="480" height="270" frameBorder="0" ></iframe>-->
            <button type="submit" name="krijoFOTO" value="krijoFOTO">Shto</button>

          </form>
      </div>
    </div>
  </div>
    <script src="../../material.min.js"></script>
</body>

</html>