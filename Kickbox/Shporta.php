<?php
ob_start();
$total = 0;
$CMIM = 0.0;
?>


<!doctype html>


<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Introducing Lollipop, a sweet new take on kickbox.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>kickbox</title>
  <style>
    .demo-card-square .mdl-card {
      width: 320px;
      height: 1020px;
    }

    .demo-card-square>.mdl-card__title {
      color: #fff;
      background:
        url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
    }
  </style>
  <!-- Page styles -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="material.min.css">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="shporta.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
  </script>

  <title>Produktet</title>


</head>

<body class="shp">
  <?php include 'header.php';
  include 'funksione/funksSHPORTE.php';
  include 'funksione/galeri.php';
  ob_flush();
  ?>
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--9-col mdl-cell--10-col-tablet">
      <div class="container" style="width: 70%">

        <h2>Produktet</h2>
        <h4 class="h4" style="color:#2e7d32">Cdo produkt 20% ulje</h4>
        <?php

        $total = 0;
        $query = "SELECT * FROM produkte ORDER BY ID_produkte ASC ";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {

          while ($row = mysqli_fetch_array($result)) {

        ?>
            <div class="col-md-4">
              <form method="post" action="Shporta.php?action=add&ID_produkte=<?php echo $row["ID_produkte"]; ?>">
                <div class="produkte">
                  <img src="<?php echo $row["Foto_prod"]; ?>" class="img-responsive">
                  <h3><?php echo $row["Emri_prod"]; ?></h3>
                  ( <strike><?php echo ($row["Cmimi_prod"]) / 0.8; ?> Leke</strike> )
                  <h4 style="color:#2e7d32"><?php echo $row["Cmimi_prod"]; ?> Leke</h4>
                  <input type="text" name="quantity" class="form-control" value="1">
                  <input type="hidden" name="hidden_name" value="<?php echo $row["Emri_prod"]; ?>">
                  <input type="hidden" name="hidden_price" value="<?php echo $row["Cmimi_prod"]; ?>">
                  <?php if (isLoggedSP()) : { ?>
                      <button type="submit" name="add" class="mdl-button mdl-js-button mdl-button--primary mdl-button--fab mdl-js-ripple-effect mdl-button--mini-fab">
                        <i class="material-icons">add_shopping_cart</i>
                      </button>
                    <?php }
                  else : { ?>
                      <div id="tt1">
                        <button type="submit" name="add" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab" disabled>
                          <i class="material-icons">add_shopping_cart</i>
                        </button>
                        <div class="mdl-tooltip mdl-tooltip--large" for="tt1">Duhet te logoheni</div>
                      </div>
                  <?php }
                  endif ?>
                </div>
              </form>
            </div>
        <?php
          }
        }
        ?>

      </div>
    </div>


    <div class="mdl-cell mdl-cell--3-col mdl-cell--6-col-tablet">

      <h2>Shporta</h2>

      <div class="demo-card-square mdl-card mdl-shadow--2dp">
        <div class="mdl-card__title mdl-card--expand">
          <h3 class="mdl-card__title-text">Detaje te fatures</h3>
        </div>
        <div class="mdl-card__supporting-text">
          <?php
          if (!empty($_SESSION["shporta"])) {
            global $total;
            foreach ($_SESSION["shporta"] as $key => $value) {
          ?>
              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <th><?php echo $value['item_name']; ?></th>
                    <th class="th2">Cmimi</th>
                  </tr>

                  <tr>
                    <td> 1 produkt </td>
                    <td align="right"> <?php echo $value['product_price']; ?> L</td>
                  </tr>
                  <tr>
                    <td><?php echo $value['item_quantity']; ?> x <?php echo $value['product_price']; ?> L</td>
                    <td align="right">
                      <?php echo number_format($value['item_quantity'] * $value['product_price'], 2); ?> L</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td align="right"><a href="Shporta.php?action=delete&ID_produkte=<?php echo $value['product_id']; ?>">
                        <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored" id="fshi">
                          <i class="material-icons">delete</i></td>
                    </button> </a>
                  </tr>
                <?php
                $total = $total + ($value['item_quantity'] * $value['product_price']);
              } ?>
                </table>

                <h6>Transporti</h6>
                <h6 style="color:#2e7d32">FALAS</h6>
                <h5 class="th2">Totali: <?php echo number_format($total, 2); ?>Leke</h5>
                <h5 class="th2"><b>+ TVSH <?php echo number_format($total, 2) * 0.15; ?>Leke</b></h5>
                <h4 class="th2"><b> Totali:
                    <?php $_SESSION['CMIM_T'] = (number_format($total, 2) * 1.15);
                    echo number_format($total, 2) * 1.15; ?>Leke</b>
                </h4>
              <?php } ?>

              </div>

              <div class="mdl-card__actions mdl-card--border">
                <?php if (isLoggedSP()) : { ?>
                    <form action="Shporta.php" method="post">
                      <button type="submit" name="porosit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect ">
                        POROSIT
                      </button>
                    <?php }
                else : { ?>
                      <div id="tt2">
                        <button type="submit" name="porosit" class="mdl-button mdl-js-button" disabled>
                          POROSIT
                        </button>
                        <div class="mdl-tooltip mdl-tooltip--large" for="tt2">Duhet te logoheni per te blere</div>
                      </div>
                  <?php }
                endif ?>
                    </form>
              </div>
        </div>
      </div>
    </div>

  </div>

  <script src="../../material.min.js"></script>

</body>

</html>