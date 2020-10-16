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

    <?php include 'funksione/mom.php';
  ob_flush(); ?>
    <div class="produkte">
      <div id="produkte-box">
          <form action="produkte.php" method="post" enctype="multipart/form-data">
            <div class="leftPROD">
              <h1>Shto produkt</h1>
              <label for="emri"><input type="texti" name="emri" placeholder="Produkti" /></label>
              <label for="cmimi"><input type="texti" name="cmimi" placeholder="Cmimi" /></label>
            </div>
            <div class="rightPROD">
              <br /><br /><br />
              <label for="file">Zgjidh foto</label>
              <input type="file" name="file" /> <br />
              <button type="submit" name="krijoPROD" value="krijoPROD">Shto</button>
            </div>
          </form>
      </div>

      <table class="mdl-data-table" ;>
        <thead>
           <!-- jo numerike, majtas -->
          <tr>
            <th>ID</th>
            <th class="mdl-data-table__cell--non-numeric">EMRI</th>
            <th class="mdl-data-table__cell--non-numeric">CMIMI</th>
            <th class="mdl-data-table__cell--non-numeric">FSHIJ</th>
          </tr>
        </thead>
        <tbody>
          <?php $result = mysqli_query($conn, "SELECT * FROM produkte");
          while ($row = mysqli_fetch_array($result)) { ?>

          <tr>
                    <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
            <td class="rrPROD"><?php echo $row['ID_produkte']; ?></td>
            <td class="mdl-data-table__cell--non-numeric rr"><?php echo $row['Emri_prod']; ?></td>
            <td class="mdl-data-table__cell--non-numeric rr"><?php echo $row['Cmimi_prod']; ?> Leke</td>
            <td class="mdl-data-table__cell--non-numeric rr">
              <?php echo "<a href='fshij/fshiPROD.php?deletePROD=" . $row['ID_produkte'] . "'>"; ?>
              <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                <i class="material-icons">delete</i>
              </button></a></td>
          </tr>
          <tr>
            <td></td>
            <td class="mdl-data-table__cell--non-numeric" colspan="3"><img src='<?php echo $row['Foto_prod']; ?>'></td>
          </tr>

                <?php }
        mysqli_close($conn); ?>


        </tbody>
      </table>
    </div>

  </div>
</div>
    <script src="../../material.min.js"></script>

</body>
</html>