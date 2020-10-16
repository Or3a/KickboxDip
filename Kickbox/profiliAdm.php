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

    <?php require 'header.php'; ?>

    <div id="adm-box" class="admin">

        <?php if (isLoggedADM()) : { ?>

        <h1>Pershendetje <?php echo $_SESSION['Emer']; ?></h1>
        <h6>(admin) </h6>

        <?php }
    else : { ?>
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
        </form>

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