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

    <?php require 'header.php'; ?>
    <div id="klasaIME-box">
        <div>
            <?php if (isLoggedSP()) : { ?>
                    <?php
                    $idS =  $_SESSION['sID'];
                    $result = mysqli_query($conn, "SELECT * FROM trajneri 
                    JOIN seanca_kls ON trajneri.ID_trajneri = seanca_kls.ID_trajneri
                    JOIN seance_sportist ON seanca_kls.ID_seanca = seance_sportist.ID_seanca
                    JOIN sportisti ON seance_sportist.ID_sportisti = sportisti.ID_sportisti
                    WHERE sportisti.ID_sportisti = $idS"); ?>

                    <div class="mdl-card__title mdl-card--expand emerklasaIME">
                        <h2 class="mdl-card__title-text">Klasat</h2>
                    </div>

                    <div class="mdl-card__supporting-text ">
                        <div class="mdl-grid">
                            <div class="mdl-cell mdl-cell--4-col titullklasaIME">
                                <p class="cardCap"><b>Ora </b></p>
                            </div>
                            <div class="mdl-cell mdl-cell--4-col titullklasaIME">
                                <p class="cardCap"><b>Dita</b></p>
                            </div>
                            <div class="mdl-cell mdl-cell--4-col titullklasaIME">
                                <p class="cardCap"><b>Trajneri</b></p>
                            </div>
                        </div>
                        <?php while ($row = mysqli_fetch_array($result)) { ?>
                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--4-col kutiklasaIME">
                                    <p><?php echo "" . $row['Ora_seanca']; ?></p>
                                </div>
                                <div class="mdl-cell mdl-cell--4-col kutiklasaIME">
                                    <p><?php echo "" . $row['Dita_seanca'] . ""; ?></p>
                                </div>
                                <div class="mdl-cell mdl-cell--4-col kutiklasaIME">
                                    <p><?php echo "" . $row['Emer_tr'] .  " " . $row['Mbiemer_tr'];; ?></p>
                                </div>
                            </div>
                        <?php }
                        mysqli_close($conn); ?>
                <?php }
            endif ?>
                    </div>
        </div>
    </div>

    <script src="../../material.min.js"></script>

</body>

</html>