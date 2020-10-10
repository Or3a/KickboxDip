<?php require 'funksione/databaza.php'; ?>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <div class="kickbox-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
            <span class="kickbox-title mdl-layout-title">

                <a href=""><img src="images/kickboxing3.png"> </a>
                <!--   <img class="kickbox-logo-image" src="images/kickbox-logo.png">-->
            </span>
            <!-- Add spacer, to align navigation to the right in desktop -->
            <div class="kickbox-header-spacer mdl-layout-spacer"></div>
            <div class="kickbox-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
                <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
                    <i class="material-icons">search</i>
                </label>
                <div class="mdl-textfield__expandable-holder">
                    <input class="mdl-textfield__input" type="text" id="search-field">
                </div>
            </div>
            <!-- Navigation -->
            <div class="kickbox-navigation-container">
                <nav class="kickbox-navigation mdl-navigation">
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="dyqan.php">Dyqan</a>
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Shporta</a>
                    <!--<a class="mdl-navigation__link mdl-typography--text-uppercase" href="regjistrim.php">Regjistro</a> -->
                    <?php if (!isLogged()) : { ?>
                            <a class="mdl-navigation__link mdl-typography--text-uppercase" href="login.php">Login</a>
                        <?php  } else : { ?>
                            <form method="get" action="header.php">
                                <button class="mdl-navigation__link mdl-typography--text-uppercase" type="submit" name="logout">Logout</button>
                            </form>

                    <?php }
                    endif ?>

                </nav>
            </div>
            <span class="kickbox-mobile-title mdl-layout-title">
                <img class="kickbox-logo-image" src="images/kickbox-logo.png">
            </span>

        </div>
    </div>
    <div class="kickbox-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
            <img src="images/kickboxing22.png">
        </span>

        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="kryefaqja.php">Kryefaqja</a>
            <a class="mdl-navigation__link" href="kryefaqja.php#trajner">Trajneret</a>
            <a class="mdl-navigation__link" href="kryefaqja.php#klasa">Klasat/Oraret</a>
            <a class="mdl-navigation__link" href="kryefaqja.php#gal">Foto</a>
            <a class="mdl-navigation__link" href="kryefaqja.php#kontakt">Kontakt</a>

            <?php if (isLogged()) : { ?> 
            <div class="kickbox-drawer-separator"></div>
            <?php if (isLoggedADM()) : { ?> 
            <a class="mdl-navigation__link" href="profiliAdm.php">Profili</a>
            <a class="mdl-navigation__link" href="trajneret.php">Trajneret</a>
            <?php } endif ?>
            <?php if (isLoggedTR()) : { ?> 
            <a class="mdl-navigation__link" href="profili.php">Profili</a>
            <a class="mdl-navigation__link" href="sportistet.php">Sportistet</a>
            <a class="mdl-navigation__link" href="klasa.php">Klasat</a>
            <?php } endif ?>
            <?php if (isLoggedSP()) : { ?> 
            <a class="mdl-navigation__link" href="profili.php">Profili</a>
            <a class="mdl-navigation__link" href="klasaIme.php">Klasa ime</a>
            <?php } endif ?>
            <?php } endif ?>
            
        </nav>
    </div>

<div class="kickbox-content mdl-layout__content">
        <a name="top"></a>