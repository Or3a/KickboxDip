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
    <div class="klasa">
        <div id="kls">
            <form action="sportistet.php" method="post">
                <div class="leftKLS">
                    <h1>Krijo Klase</h1>

                    <label for="ora" class="mKLS">
                        <pre>Orari  <input type="time" name="ora" /></label></pre>

                        <select name="diteJave">
                            <option value="" disabled selected>Dita</option>
                            <option value="e Hene">e Hene</option>
                            <option value="e Marte">e Marte</option>
                            <option value="e Merkure">e Merkure</option>
                            <option value="e Enjte">e Enjte</option>
                            <option value="e Premte">e Premte</option>
                            <option value="e Shtune">e Shtune</option>
                        </select>
                        <br /> <br />
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-id1">
                            <input type="radio" id="option-id1" class="mdl-radio__button" name="ID_trajneri" value="1" checked>
                            <span class="mdl-radio__label">Ilda Lelo</span>
                        </label>
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-id2">
                            <input type="radio" id="option-id2" class="mdl-radio__button" name="ID_trajneri" value="2">
                            <span class="mdl-radio__label">Alban Alikaj</span>
                        </label>
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-id3">
                            <input type="radio" id="option-id3" class="mdl-radio__button" name="ID_trajneri" value="3">
                            <span class="mdl-radio__label">Ronald Skenderi</span>
                        </label>
                        </br> </br>

                        <select name="titull">
                            <option value="" disabled selected>Grupi</option>
                            <option value="femije">Femije</option>
                            <option value="te rinj">Te rinj</option>
                            <option value="te moshuar">Te moshuar</option>
                        </select>
                </div>
                <div class="rightKLS">
                    <button type="submit" name="krijoKls" value="krijoKls">Krijo</button>
                </div>
            </form>
        </div>

        <br />
        <br />

        <table class="mdl-data-table" ;>
            <thead>
                <tr>
                    <th>ID</th>
                    <th class="mdl-data-table__cell--non-numeric">ID trajneri</th>
                    <th class="mdl-data-table__cell--non-numeric">Titull Klase</th>
                    <th class="mdl-data-table__cell--non-numeric">Dita</th>
                    <th class="mdl-data-table__cell--non-numeric">Ora</th>
                    <th class="mdl-data-table__cell--non-numeric">FSHIJ</th>
                </tr>
            </thead>
            <tbody>
                <?php $result = mysqli_query($conn, "SELECT * FROM seanca_kls");
                while ($row = mysqli_fetch_array($result)) { ?>


                    <tr>
                        <td><?php echo $row['ID_seanca']; ?></td>
                        <td class="mdl-data-table__cell--non-numeric"><?php echo $row['ID_trajneri']; ?></td>
                        <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Titull_seanca']; ?></td>
                        <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Dita_seanca']; ?></td>
                        <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Ora_seanca']; ?></td>
                        <td class="mdl-data-table__cell--non-numeric">
                            <?php echo "<a href='fshij/fshijKLS.php?deleteKLS=" . $row['ID_seanca'] . "'>"; ?>
                            <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                                <i class="material-icons">delete</i>
                            </button></a></td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>

    <?php include 'footer.php'; ?>
    </div>
    </div>

    <script src="../../material.min.js"></script>

</body>

</html>