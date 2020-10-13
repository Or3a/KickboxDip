<?php

session_start();

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "palester_kickbox";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName); //connection

if (!$conn) {
    die("Lidhja deshtoi" . mysqli_connect_error());
}

$username_a = "";
$emer_a = "";
$mbiemer_a = "";
$email_a = "";

if (isset($_POST['regj'])) {
    regjistroAdmin();
}


function regjistroAdmin()
{
    global $conn;


    $username_a = $_POST['Username_adm'];
    $emer_a = $_POST['Emer_adm'];
    $mbiemer_a = $_POST['Mbiemer_adm'];
    $email_a = $_POST['Email_adm'];
    $password_a = $_POST['Fjalekalim_adm'];
    $password_a_Repeat = $_POST['Fjalekalim_adm-repeat'];
    //ne rast se i leme bosh
    if (empty($username_a) || empty($emer_a) || empty($mbiemer_a) || empty($email_a) || empty($password_a) || empty($password_a_Repeat)) {
        header("Location: regjistrim.php?error=emptyfields&Username_adm=" . $username_a . "&Email_adm=" . $email_a);
        exit();
    } elseif (!filter_var($email_a, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9*$/]", $username_a)) {
        header("Location: regjistrim.php?error=invalidEmail_admUsername_adm");
        exit();
    }
    //kontrollon ekzistencen e emailit
    elseif (!filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
        header("Location: regjistrim.php?error=invalidEmail_adm=" . $username_a);
        exit();
    }
    //kontrollon passwordin
    elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username_a)) {
        header("Location: regjistrim.php?error=invalidUsername_adm&Email_adm=" . $email_a);
        exit();
    } elseif ($password_a !== $password_a_Repeat) {
        header("Location: regjistrim.php?error=passwordcheck&Username_adm=" . $username_a . "&Email_adm=" . $email_a);
        exit();
    } else {
        $sql = "SELECT Username_adm FROM admini WHERE Username_adm=?"; //?  vendoset ne rast se ka njerez qe duan te bejne kod sql brenda username_a dhe prishet db
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: regjistrim.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username_a); //s eshte string to be passed in ..?-ja qe vendosem  .. per ?? do ishte "ss"
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt); //i bejme store
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: regjistrim.php?error=usertaken&Email_adm=" . $email_a);
                exit();
            } else {
                $sql = "INSERT INTO admini (Username_adm, Emer_adm, Mbiemer_adm, Email_adm, Fjalekalim_adm) VALUES (?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: regjistrim.php?error=sqlerror");
                    exit();
                } else {
                    $hashedPwd_a = password_hash($password_a, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sssss", $username_a, $emer_a, $mbiemer_a, $email_a, $hashedPwd_a); //s eshte string to be passed in ..?-ja qe vendosem  .. per ?? do ishte "ss"
                    mysqli_stmt_execute($stmt);
                    header("Location: regjistrim.php?success=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($conn); //closing the statement
    mysqli_close($conn); //mbyll lidhjen me db
}



$username_t = "";
$emer_t = "";
$mbiemer_t = "";
$email_t = "";
$info_t = "";

if (isset($_POST['regjTr'])) {
    regjistroTrajner();
}



function regjistroTrajner()
{
    global $conn;


    $username_t = $_POST['Username_tr'];
    $emer_t = $_POST['Emer_tr'];
    $mbiemer_t = $_POST['Mbiemer_tr'];
    $email_t = $_POST['Email_tr'];
    $password_t = $_POST['Fjalekalim_tr'];
    $password_t_Repeat = $_POST['Fjalekalim_tr-repeat'];
    $grMosha_t = $_POST['Grupmosha_tr'];
    $info_t = $_POST['Info_tr'];

    //ne rast se i leme bosh
    if (empty($username_t) || empty($emer_t) || empty($mbiemer_t) || empty($email_t) || empty($password_t) || empty($password_t_Repeat) || empty($grMosha_t) || empty($info_t)) {
        header("Location: trajneret.php?error=emptyfields&Username_tr=" . $username_t . "&Email_tr=" . $email_t);
        exit();
    } elseif (!filter_var($email_t, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9*$/]", $username_t)) {
        header("Location: trajneret.php?error=invalidEmail_trUsername_tr");
        exit();
    }
    //kontrollon ekzistencen e emailit
    elseif (!filter_var($email_t, FILTER_VALIDATE_EMAIL)) {
        header("Location: trajneret.php?error=invalidEmail_tr=" . $username_t);
        exit();
    }
    //kontrollon passwordin
    elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username_t)) {
        header("Location: trajneret.php?error=invalidUsername_tr&Email_tr=" . $email_t);
        exit();
    } elseif ($password_t !== $password_t_Repeat) {
        header("Location: trajneret.php?error=passwordcheck&Username_tr=" . $username_t . "&Email_tr=" . $email_t);
        exit();
    } else {
        $sql = "SELECT Username_tr FROM trajneri WHERE Username_tr=?"; //?  vendoset ne rast se ka njerez qe duan te bejne kod sql brenda username_t dhe prishet db
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: trajneret.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username_t); //s eshte string to be passed in ..?-ja qe vendosem  .. per ?? do ishte "ss"
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt); //i bejme store
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: trajneret.php?error=usertaken&Email_tr=" . $email_t);
                exit();
            } else {
                $sql = "INSERT INTO trajneri (Username_tr, Emer_tr, Mbiemer_tr, Email_tr, Fjalekalim_tr, Grupmosha_tr, Info_tr) VALUES (?, ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: trajneret.php?error=sqlerror");
                    exit();
                } else {
                    $hashedPwd_t = password_hash($password_t, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sssssss", $username_t, $emer_t, $mbiemer_t, $email_t, $hashedPwd_t, $grMosha_t, $info_t); //s eshte string to be passed in ..?-ja qe vendosem  .. per ?? do ishte "ss"
                    mysqli_stmt_execute($stmt);
                    header("Location: trajneret.php?success=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($conn); //closing the statement
    mysqli_close($conn); //mbyll lidhjen me db
}



$username_s = "";
$emer_s = "";
$mbiemer_s = "";
$email_s = "";
$cel_s = "";
$adresa_s = "";
$qyteti_s = "";
$zip_s = "";
$dtl_s = "";
$gjinia_s = "";
$pesha_s = "";
$gjatesia_s = "";
$info_s = "";


if (isset($_POST['regjSp'])) {
    regjistroSportist();
}



function regjistroSportist()
{
    global $conn;


    $username_s = $_POST['Username_sp'];
    $emer_s = $_POST['Emer_sp'];
    $mbiemer_s = $_POST['Mbiemer_sp'];
    $email_s = $_POST['Email_sp'];
    $password_s = $_POST['Fjalekalim_sp'];
    $password_s_Repeat = $_POST['Fjalekalim_sp-repeat'];
    $cel_s = $_POST['Cel_sp'];
    $adresa_s = $_POST['Adresa_sp'];
    $qyteti_s = $_POST['Qyteti_sp'];
    $zip_s = $_POST['ZipKodi_sp'];
    $dtl_s = $_POST['Datelindja_sp'];
    $gjinia_s = $_POST['Gjinia_sp'];
    $pesha_s = $_POST['Pesha_sp'];
    $gjatesia_s = $_POST['Gjatesia_sp'];
    $info_s = $_POST['Info_sp'];


    //ne rast se i leme bosh
    if (empty($username_s) || empty($emer_s) || empty($mbiemer_s) || empty($email_s) || empty($password_s) || empty($password_s_Repeat) || empty($cel_s) || empty($adresa_s) || empty($qyteti_s) || empty($zip_s) || empty($dtl_s) || empty($gjinia_s) || empty($pesha_s) || empty($gjatesia_s)) {
        header("Location: sportistet.php?error=emptyfields&Username_sp=" . $username_s . "&Email_sp=" . $email_s);
        exit();
    } elseif (!filter_var($email_s, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9*$/]", $username_s)) {
        header("Location: sportistet.php?error=invalidEmail_spUsername_sp");
        exit();
    }

    //kontrollon ekzistencen e emailit
    elseif (!filter_var($email_s, FILTER_VALIDATE_EMAIL)) {
        header("Location: sportistet.php?error=invalidEmail_sp=" . $username_s);
        exit();
    }

    //kontrollon passwordin
    elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username_s)) {
        header("Location: sportistet.php?error=invalidUsername_sp&Email_sp=" . $email_s);
        exit();
    } elseif ($password_s !== $password_s_Repeat) {
        header("Location: sportistet.php?error=passwordcheck&Username_sp=" . $username_s . "&Email_sp=" . $email_s);
        exit();
    } else {
        $sql = "SELECT Username_sp FROM sportisti WHERE Username_sp=?"; //?  vendoset ne rast se ka njerez qe duan te bejne kod sql brenda username_s dhe prishet db
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: sportistet.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username_s); //s eshte string to be passed in ..?-ja qe vendosem  .. per ?? do ishte "ss"
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt); //i bejme store
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: sportistet.php?error=usertaken&Email_sp=" . $email_s);
                exit();
            } else {
                $sql = "INSERT INTO sportisti (Username_sp, Emer_sp, Mbiemer_sp, Email_sp, Fjalekalim_sp, Cel_sp, Adresa_sp, Qyteti_sp, ZipKodi_sp, Datelindja_sp, Gjinia_sp, Pesha_sp, Gjatesia_sp, Info_sp) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: sportistet.php?error=sqlerror");
                    exit();
                } else {
                    $hashedPwd_s = password_hash($password_s, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ssssssssssssss", $username_s, $emer_s, $mbiemer_s, $email_s, $hashedPwd_s, $cel_s, $adresa_s, $qyteti_s, $zip_s, $dtl_s, $gjinia_s, $pesha_s, $gjatesia_s, $info_s); //s eshte string to be passed in ..?-ja qe vendosem  .. per ?? do ishte "ss"
                    mysqli_stmt_execute($stmt);
                    header("Location: sportistet.php?success=success");
                    exit();
                }
            }
        }
    }

    mysqli_stmt_close($conn); //closing the statement
    mysqli_close($conn); //mbyll lidhjen me db
}



if (isset($_GET['logout'])) {
    logout();
}





if (isset($_POST['login'])) {
    loginADM();
    loginTR();
    loginSP();
}

function loginADM()
{
    global $conn;


    $email = $_POST['Email'];
    $password = $_POST['Fjalekalim'];


    if (empty($email) || empty($password)) {
        header("Location: login.php?error=fushatboshe");
        exit();
    } else {
        $sql = "SELECT * FROM admini WHERE Email_adm=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            //   header("Location: login.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email); //kontrollojme ne db
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            //kontrollojme nese kemi rezultat nga db
            if ($row = mysqli_fetch_assoc($result)) {
                $passwordCheck = password_verify($password, $row['Fjalekalim_adm']); //bool

                if ($passwordCheck == false) {
                    header("Location: login.php?error=pswigabuar");
                    exit();
                } elseif ($passwordCheck == true) {
                    $_SESSION['ID'] = $row['ID_admin'];
                    $_SESSION['Emer'] = $row['Emer_adm'];

                    $_SESSION['aID'] = $row['ID_admin'];
                    $_SESSION['aEmail'] = $row['Email_adm'];
                    $_SESSION['aUsername'] = $row['Username_adm'];
                    $_SESSION['aEmer'] = $row['Emer_adm'];
                    $_SESSION['aMbiemer'] = $row['Mbiemer_adm'];
                    $_SESSION['asuccess']  = "Jeni i loguar";

                    header("Location: profiliAdm.php?login=mesukses");
                    exit();
                } else {
                    header("Location: login.php?error=pwdigabuar");
                    exit();
                }
            }
        }
    }
}



function loginTR()
{
    global $conn;


    $email = $_POST['Email'];
    $password = $_POST['Fjalekalim'];


    if (empty($email) || empty($password)) {
        header("Location: login.php?error=fushatboshe");
        exit();
    } else {
        $sql = "SELECT * FROM trajneri WHERE Email_tr=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            //    header("Location: login.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email); //kontrollojme ne db
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            //kontrollojme nese kemi rezultat nga db
            if ($row = mysqli_fetch_assoc($result)) {
                $passwordCheck = password_verify($password, $row['Fjalekalim_tr']); //bool

                if ($passwordCheck == false) {
                    header("Location: login.php?error=pswigabuar");
                    exit();
                } elseif ($passwordCheck == true) {
                    $_SESSION['ID'] = $row['ID_trajneri'];
                    $_SESSION['Emer'] = $row['Emer_tr'];

                    $_SESSION['tID'] = $row['ID_trajneri'];
                    $_SESSION['tEmail'] = $row['Email_tr'];
                    $_SESSION['tUsername'] = $row['Username_tr'];
                    $_SESSION['tEmer'] = $row['Emer_tr'];
                    $_SESSION['tMbiemer'] = $row['Mbiemer_tr'];
                    $_SESSION['tGrupmosha'] = $row['Grupmosha_tr'];
                    $_SESSION['tsuccess']  = "Jeni i loguar";

                    header("Location: profiliAdm.php?login=mesukses");
                    exit();
                } else {
                    header("Location: login.php?error=pwdigabuar");
                    exit();
                }
            }
        }
    }
}


function loginSP()
{
    global $conn;


    $email = $_POST['Email'];
    $password = $_POST['Fjalekalim'];


    if (empty($email) || empty($password)) {
        header("Location: login.php?error=fushatboshe");
        exit();
    } else {
        $sql = "SELECT * FROM sportisti WHERE Email_sp=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            // header("Location: login.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $email); //kontrollojme ne db
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            //kontrollojme nese kemi rezultat nga db
            if ($row = mysqli_fetch_assoc($result)) {
                $passwordCheck = password_verify($password, $row['Fjalekalim_sp']); //bool

                if ($passwordCheck == false) {
                    header("Location: login.php?error=pswigabuar");
                    exit();
                } elseif ($passwordCheck == true) {
                    $_SESSION['ID'] = $row['ID_sportisti'];
                    $_SESSION['Emer'] = $row['Emer_sp'];

                    $_SESSION['sID'] = $row['ID_sportisti'];
                    $_SESSION['sEmail'] = $row['Email_sp'];
                    $_SESSION['sUsername'] = $row['Username_sp'];
                    $_SESSION['sEmer'] = $row['Emer_sp'];
                    $_SESSION['sMbiemer'] = $row['Mbiemer_sp'];
                    $_SESSION['ssuccess']  = "Jeni i loguar";

                    header("Location: profiliAdm.php?login=mesukses");
                    exit();
                } else {
                    header("Location: login.php?error=pwdigabuar");
                    exit();
                }
            } else {
                header("Location: login.php?error=nouser");
                exit();
            }
        }
    }
}

function logout()
{
    session_start();
    session_unset();
    session_destroy();
    //   unset($_SESSION['admini']);
    header("location: profiliAdm.php?error=logout");
    exit();
}

function isLogged()
{
    if (isset($_SESSION['ID'])) {
        return true;
    } else {
        return false;
    }
}
function isLoggedADM()
{
    if (isset($_SESSION['aID'])) {
        return true;
    } else {
        return false;
    }
}

function isLoggedTR()
{
    if (isset($_SESSION['tID'])) {
        return true;
    } else {
        return false;
    }
}
function isLoggedSP()
{
    if (isset($_SESSION['sID'])) {
        return true;
    } else {
        return false;
    }
}




$titull_k = "";
$ora_k = "";
$dita_k = "";
$Id_trajneri_k = "";



if (isset($_POST['krijoKls'])) {
    krijoKlase();
}


function krijoKlase()
{
    global $conn;


    $Id_trajneri_k = $_POST['ID_trajneri'];
    $ora_k = $_POST['ora'];
    $dita_k = $_POST['diteJave'];
    $titull_k = $_POST['titull'];


    //ne rast se i leme bosh
    if (empty($Id_trajneri_k) ||  empty($ora_k) || empty($dita_k) || empty($titull_k)) {
        header("Location: klasa.php?error=emptyfields&ID=" . $Id_trajneri_k . "&ora=" . $ora_k);
        exit();
    }
  
      else {
                $sql = "INSERT INTO seanca_kls (ID_trajneri, Titull_seanca, Ora_seanca, Dita_seanca) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: klasa.php?error=sqlerror");
                    exit();
                } else {
             
                    mysqli_stmt_bind_param($stmt, "ssss", $Id_trajneri_k, $titull_k, $ora_k, $dita_k); //s eshte string to be passed in ..?-ja qe vendosem  .. per ?? do ishte "ss"
                    mysqli_stmt_execute($stmt);
                    header("Location: klasa.php?success=success");
                    exit();
                }
            
    }
    mysqli_stmt_close($conn); //closing the statement
    mysqli_close($conn); //mbyll lidhjen me db
}










// escape string
function e($val)
{
    global $conn;
    return mysqli_real_escape_string($conn, trim($val));
}




?>