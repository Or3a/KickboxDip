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
  </style>
</head>

<body>

  <?php include 'header.php';
  ob_flush(); ?>

  <div class="tr">

    <div id="tr-box">
      <form action="trajneret.php" method="post">
        <div class="lefttr">
          <h1>Regjistro trajner</h1>
          <label for="Username_tr"><input type="texti" name="Username_tr" placeholder="Username" /></label>
          <label for="Emer_tr"><input type="texti" name="Emer_tr" placeholder="Emri" /></label>
          <label for="Mbiemer_tr"><input type="texti" name="Mbiemer_tr" placeholder="Mbiemri" /></label>
          <label for="Email_tr"><input type="texti" name="Email_tr" placeholder="E-maili" /></label>
          <label for="Fjalekalim_tr"><input type="password" name="Fjalekalim_tr" placeholder="Fjalekalimi" /></label>
          <label for="Fjalekalim_tr-repeat"><input type="password" name="Fjalekalim_tr-repeat" placeholder="Perserit fjalekalimin" /></label>
        </div>

        <div class="righttr">
          <br /><br /><br />
          <select name="Grupmosha_tr">
            <option value="" disabled selected>Grupmosha</option>
            <option value="femije">Femije</option>
            <option value="te rinj">Te rinj</option>
            <option value="te moshuar">Te moshuar</option>
          </select>
          <label for="Info_tr"><textarea name="Info_tr" rows="5" cols="33" placeholder="Informacion"></textarea></label>
          <button type="submit" name="regjTr" value="regjTr">Regjistro</button>
        </div>
      </form>
    </div>

    <table class="mdl-data-table" ;>
      <thead>
        <tr>
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

          <tr>
            <td><?php echo $row['ID_trajneri']; ?></td>
            <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Emer_tr']; ?></td>
            <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Mbiemer_tr']; ?></td>
            <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Email_tr']; ?></td>
            <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Grupmosha_tr']; ?></td>
            <td class="mdl-data-table__cell--non-numeric"><?php echo "<a href='fshij/fshiTR.php?deleteTR=" . $row['ID_trajneri'] . "'>"; ?>
              <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                <i class="material-icons">delete</i>
              </button></a></td>
          </tr>

        <?php }
        mysqli_close($conn); ?>
      </tbody>
    </table>

  </div>

  <?php include 'footer.php'; ?>
  </div>
  </div>

  <script src="../../material.min.js"></script>

</body>

</html>