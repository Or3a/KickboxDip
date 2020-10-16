<?php
ob_start();
?>
<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->

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
  <link rel="stylesheet" href="//cdn.materialdesignicons.com/2.1.99/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/css/swiper.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
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
  </style>
</head>

<body>

  <?php include 'header.php';
  ob_flush(); ?>

  <!-- KIKCKBOXI -->

  <div class="kickbox-be-together-section mdl-typography--text-center">
    <div class="container">
      <div class="lines"></div>
      <div class="punching"></div>
      <div class="leg right">
        <div></div>
      </div>
      <div class="arm-container">
        <div class="arm-right"></div>
      </div>
      <div class="apple">
        <div class="hairs"></div>
        <div class="eyes"></div>
        <div class="arm-left"></div>
        <div class="leg left">
          <div></div>
        </div>
      </div>
      <div class="shadow"></div>
    </div>

    <div class="logo-font kickbox-create-character"></div>

    <a href="#trajner">
      <button class="kickbox-fab mdl-button mdl-button--colored mdl-js-button mdl-button--fab mdl-js-ripple-effect">
        <i class="material-icons">expand_more</i>
      </button>
    </a>
  </div>

  <!-- /KIKCKBOXI -->

  <!-- TRAJNERET -->

  <div class="kickbox-trajneret " id="trajner">
    <div class="kickbox-trajner-section mdl-typography--text-center">
      <a name="trajner"></a>
      <div class="mdl-typography--display-1-color-contrast">Trajneret tane</div>

      <div class="kickbox-tv kickbox-trajner">
        <p><a class="kickbox-image-link" href="trajnerInfo.php#ilda">
            <img class="kickbox-trajner-image" src="images/ilda.png"></a>
        </p>
        <p><a class="kickbox-link mdl-typography--font-regular mdl-typography--text-uppercase" href="trajnerInfo.php#ilda">ILDA LELO</a>
        </p>
      </div>
      <div class="kickbox-tv kickbox-trajner">
        <p><a class="kickbox-image-link" href="trajnerInfo.php#ronald">
            <img class="kickbox-trajner-image" src="images/ronald.png"></a>
        </p>
        <p><a class="kickbox-link mdl-typography--font-regular mdl-typography--text-uppercase" href="trajnerInfo.php#ronald">RONALD SKENDERI</a>
        </p>
      </div>
      <div class="kickbox-tv kickbox-trajner">
        <p><a class="kickbox-image-link" href="trajnerInfo.php#alban">
            <img class="kickbox-trajner-image" src="images/alban.png"></a>
        </p>
        <p><a class="kickbox-link mdl-typography--font-regular mdl-typography--text-uppercase" href="trajnerInfo.php#alban">ALBAN ALIKAJ</a>
        </p>
      </div>

    </div>
  </div>

  <!-- TRAJNERET -->

  <!-- INFORMACION -->

  <div class="kickbox-wear-section">
    <div class="kickbox-wear-band">
      <div class="kickbox-wear-band-text">
        <div class="mdl-typography--display-2">Zgjidhni cilesine</div>
        <p class="mdl-typography--headline">
          -STERVIT TRUPIN PER NJE SHPIRT TE FORT.....</br>
          -MESO TE VETMBROHESH.....</br>
          -BEHU KAMPION......
        </p>
        <p>
        </p>
      </div>
    </div>
  </div>

  <!-- /INFORMACION -->

  <!-- KLASAT DHE ORARET -->

  <div class="kickbox-customized-section mdl-typography--display-2" id="klasa">
    <section id="timeline" class="timeline-outer">
      <div class="container" id="content">
        <div class="row">
          <h1 class="ora">Klasat dhe oraret</h1>

          <ul class="timeline">
            <li class="event" data-date="FEMIJE">
            <li>
              <pre><h3>Ora&emsp; &emsp;&emsp;&emsp;Dita</h3></pre>
            </li>
            <?php $result = mysqli_query($conn, "SELECT * FROM seanca_kls WHERE ID_trajneri='2'");
            while ($row = mysqli_fetch_array($result)) { ?>
              <p>
                <ul><?php echo "" . $row['Ora_seanca']; ?><?php echo "&emsp;&emsp;&emsp;&emsp;" . $row['Dita_seanca']; ?></ul>
              </p>
              </li>
            <?php }   ?>
            <li class="event" data-date="TE RINJ">
            <li>
              <pre><h3>Ora&emsp; &emsp;&emsp;&emsp;Dita</h3></pre>
            </li>
            <?php $result1 = mysqli_query($conn, "SELECT * FROM seanca_kls WHERE ID_trajneri='1'");
            while ($row1 = mysqli_fetch_array($result1)) { ?>
              <p>
                <ul><?php echo "" . $row1['Ora_seanca']; ?><?php echo "&emsp;&emsp;&emsp;&emsp;" . $row1['Dita_seanca']; ?></ul>
              </p>
              </li>
            <?php }   ?>
            <li class="event" data-date="TE MOSHUAR">
            <li>
              <pre><h3>Ora&emsp; &emsp;&emsp;&emsp;Dita</h3></pre>
            </li>
            <?php $result2 = mysqli_query($conn, "SELECT * FROM seanca_kls WHERE ID_trajneri='3'");
            while ($row2 = mysqli_fetch_array($result2)) { ?>
              <p>
                <ul><?php echo "" . $row2['Ora_seanca']; ?><?php echo "&emsp;&emsp;&emsp;&emsp;" . $row2['Dita_seanca']; ?></ul>
              </p>
              </li>
            <?php } ?>
          </ul>

        </div>
      </div>
    </section>
  </div>

  <!-- /KLASAT DHE ORARET -->

  <!-- GALERIA KARUSEL  -->

  <div class="fotot kryefaqja" id="gal">
    <?php include 'funksione/galeri.php';
    ob_flush(); ?>

    <!--SHTIMI  FOTOVE NGA ADM-->
    <?php if (isLoggedADM()) : { ?>
        <div class="shtoFoto">
          <form action="kryefaqja.php#gal" method="post" enctype="multipart/form-data">
            <label for="file">Zgjidh foto</label>
            <input type="file" name="file" />
            <!-- <iframe src="https://media.giphy.com/media/NXx6K8Vy1Nc9q/giphy.gif" width="480" height="270" frameBorder="0" ></iframe>-->
            <button type="submit" name="krijoFOTO" value="krijoFOTO">Shto</button>
          </form>
        </div>
    <?php }
    endif ?>

    <!--KARUSELI-->
    <div class="carousel-gallery">
      <div class="swiper-container">
        <div class="swiper-wrapper">

          <?php $result = mysqli_query($conn, "SELECT * FROM galeria");
          while ($row = mysqli_fetch_array($result)) { ?>

            <div class="swiper-slide">
              <a class="swiperlink" href="<?php echo $row['Foto']; ?>?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" data-fancybox="gallery">
                <div class="image" style="background-image: url(<?php echo $row['Foto']; ?>?auto=compress&cs=tinysrgb&dpr=1&w=500)">
                  <div class="overlay">
                    <em class="mdi mdi-magnify-plus"></em>
                  </div>
                </div>
              </a>
              <?php if (isLoggedADM()) : { ?>
                  <?php echo "<a href='fshij/fshijFOTO.php?deleteFOTO=" . $row['ID_foto'] . "'>"; ?>
                  <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                    <i class="material-icons">delete</i>
                  </button><?php echo "</a>" ?>Fshij foton
              <?php }
              endif ?>
            </div> <br>

          <?php }
          mysqli_close($conn); ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>

  <!-- /GALERIA KARUSEL  -->

  <!-- KONTAKT  -->
  <div>
    <div class="kontakt kryefaqja" id="kontakt">
      <form method="post" action="kryefaqja.php#kontakt">
        <div class="djathtas">
          <br /><br />
          <label for="Emer_em"><input type="texti" name="Emer_em" placeholder="Emer" required data-validation-required-message="Ju lutem shkruani emrin" /></label>
          <label for="Email_em"><input type="texti" name="Email_em" placeholder="E-maili" required data-validation-required-message="Ju lutem shkruani emailin" /></label>
          <label for="Mszh_em"><textarea name="Mszh_em" rows="3" cols="70" placeholder="Mesazh" validation-required-message="Ju lutem jepni mszh tuaj" minlength="5" data-validation-minlength-message="Min 5 karaktere" maxlength="999" style="resize:none"></textarea></label>
          <br />
          <button type="submit" name="dergoEmail">Dergo</button>
        </div>
      </form>

      <div class="majtas">
        <h3>Na kontatoni</h3>
        <iframe width="480" height="190" frameborder="0" src="https://www.openstreetmap.org/export/embed.html?bbox=19.476425171160376%2C40.46553703517908%2C19.496509552263895%2C40.475625078716135&amp;layer=mapnik&amp;marker=40.47058124637753%2C19.48646736171213"></iframe>
        <br />
        <a href="https://www.openstreetmap.org/?mlat=40.4706&amp;mlon=19.4865#map=16/40.4706/19.4865&amp;layers=N">Zmadho harten</a></small>
      </div>
    </div>
  </div>

  <!-- /KONTAKT  -->

  <?php include 'footer.php'; ?>
  <script src="../../material.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.0/js/swiper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="galeria.js"></script>

</body>

</html>