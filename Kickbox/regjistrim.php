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

  <?php include 'header.php'; ?>

  <div id="regjistrim-box" class="regjistrADM ">

    <form action="regjistrim.php" method="post">
      <h1>Regjistrim</h1>
      <label for="Username_adm"><input type="texti" name="Username_adm" placeholder="Username" /></label>
      <label for="Emer_adm"><input type="texti" name="Emer_adm" placeholder="Emri" /></label>
      <label for="Mbiemer_adm"><input type="texti" name="Mbiemer_adm" placeholder="Mbiemri" /></label>
      <label for="Email_adm"><input type="texti" name="Email_adm" placeholder="E-maili" /></label>
      <label for="Fjalekalim_adm"><input type="password" name="Fjalekalim_adm" placeholder="Fjalekalimi" /></label>
      <label for="Fjalekalim_adm-repeat"><input type="password" name="Fjalekalim_adm-repeat" placeholder="Perserit fjalekalimin" /></label>
      <button type="submit" name="regj" value="regj">Regjistrohu</button>
    </form>

  </div>


  <script src="../../material.min.js"></script>

</body>

</html>