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

    <form method="post" action="login.php">

        <div id="login-box-log" class="login">
            <div class="rightLG">
                <br />
                <h1>Login</h1>
                <label for="Email"><input type="texti" name="Email" placeholder="E-maili" /></label>
                <label for="Fjalekalim"><input type="password" name="Fjalekalim" placeholder="Fjalekalimi" /></label>
                <button type="submit" name="login">Login</button>
            </div>
            <div class="leftLG">
                <iframe src="images/login.gif" width="480" height="270" frameBorder="0"></iframe>
            </div>
        </div>
    </form>
    <script src="../../material.min.js"></script>

</body>

</html>