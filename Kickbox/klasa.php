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


        h1 {
            margin: 0 0 20px 0;
            font-weight: 300;
            font-size: 28px;
        }


        input[type="texti"] {
            display: block;
            box-sizing: border-box;
            margin-bottom: 20px;
            padding: 4px;
            width: 240px;
            height: 32px;
            border: none;
            border-bottom: 1px solid #AAA;
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            font-size: 15px;
            transition: 0.2s ease;
            background: #e0e0e0;
        }



        .m {

            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            font-size: 15px;


        }

        input[type="time"],
        textarea {
            font-family: 'Roboto', sans-serif;

            font-size: 15px;
            margin-bottom: 20px;
            padding: 4px;
            border: none;
            border-bottom: 1px solid #AAA;
            border-left: 1px solid #AAA;
            transition: 0.2s ease;
            background: #e0e0e0;
            width: 140px;

        }

        input[type="time"]:focus,
        textarea:focus {
            border-bottom: 2px solid #16a085;
            border-left: 2px solid #16a085;
            color: #16a085;
            transition: 0.2s ease;
        }


        input[type="texti"]:focus,
        input[type="password"]:focus,
        input[type="qytet"]:focus {
            border-bottom: 2px solid #16a085;
            color: #16a085;
            transition: 0.2s ease;
        }

        button[type="submit"] {
            margin-top: 28px;
            width: 120px;
            height: 32px;
            background: #ff9e80;
            border: none;
            border-radius: 2px;
            color: #212121;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            text-transform: uppercase;
            transition: 0.1s ease;
            cursor: pointer;
        }


        button[type="submit"]:hover,
        button[type="submit"]:focus {
            opacity: 0.8;
            box-shadow: 0 2px 4px #ffd0b0;
            transition: 0.1s ease;
        }

        button[type="submit"]:active {
            opacity: 1;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
            transition: 0.1s ease;
        }



        table {
            border: none;
            margin-top: 40px;
            margin-left: auto;
            margin-bottom: 40px;
            margin-right: auto;
            position: relative;
            width: 800px;
            background: #e0e0e0;
            border-radius: 2px;
            box-shadow: 9px 9px #263238, 13px 13px #c96f53, 8px 8px #e0e0e0 inset, 14px 14px #c96f53 inset;

        }

        table thead {
            background: #90a4ae;
        }



        .caption {
            font-family: 'Roboto', sans-serif;
            color: #ffd0b0;

            font-weight: 400;
            font-size: 20px;

        }

        #login-box {
            position: relative;
            margin: 5% auto;
            width: 550px;
            height: 280px;
            background: #e0e0e0;
            border-radius: 2px;

            box-shadow: 8px 8px #263238, 14px 14px #c96f53, 8px 8px #e0e0e0 inset, 14px 14px #c96f53 inset;


        }

        .left {
            position: absolute;
            top: 0;
            left: 0;
            box-sizing: border-box;
padding: 30px;
            width: 400px;
            height: 280px;
        }

        .right {
            position: absolute;
            top: 0;
            right: 0;
            box-sizing: border-box;
            padding: 30px;
            width: 180px;
            height: 280px;
        }
    </style>
</head>

<body>

    <?php include 'header.php';
    ob_flush(); ?>









    <div id="login-box">
        <form action="sportistet.php" method="post">
        <div class = "left">
            <h1>Krijo Klase</h1>


            <label for="ora" class="m">
                <pre>Orari  <input type="time" name="ora" /></label></pre>
            
            
    <select  name="diteJave">
      <option value="" disabled selected>Dita</option>
      <option value="e Hene">e Hene</option>
      <option value="e Marte">e Marte</option>
      <option value="e Merkure">e Merkure</option>
      <option value="e Enjte">e Enjte</option>
      <option value="e Premte">e Premte</option>
      <option value="e Shtune">e Shtune</option>
  
    </select>
    <br/> <br/>
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
               <div class= "right">
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

                <!-- Row 1 -->
                <tr>
                    <!-- class "mdl-data-table__cell--non-numeric", align values to left -->
                    <td><?php echo $row['ID_seanca']; ?></td>
                    <td class="mdl-data-table__cell--non-numeric"><?php echo $row['ID_trajneri']; ?></td>
                    <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Titull_seanca']; ?></td>
                    <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Dita_seanca']; ?></td>
                    <td class="mdl-data-table__cell--non-numeric"><?php echo $row['Ora_seanca']; ?></td>
                    <td class="mdl-data-table__cell--non-numeric"><?php echo "<a href='fshij/fshijKLS.php?deleteKLS=" . $row['ID_seanca'] . "'>"; ?>
                        <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                            <i class="material-icons">delete</i>
                        </button></a>
                    </td>


                </tr>

            <?php }
            ?>



        </tbody>
    </table>




    <?php include 'footer.php'; ?>
    </div>
    </div>

    <script src="../../material.min.js"></script>


</body>

</html>