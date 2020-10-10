<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "palester_kickbox";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName); //connection

if(!$conn) {
    die("Lidhja deshtoi".mysqli_connect_error());
}

        $username_a = "";
        $emer_a = "";
        $mbiemer_a = "";
        $email_a = "";

        if (isset($_POST['regj'])) {
            regjistroAdmin();
        }
   

function regjistroAdmin(){
    global $conn;

  
        $username_a = $_POST['Username_adm'];
        $emer_a = $_POST['Emer_adm'];
        $mbiemer_a = $_POST['Mbiemer_adm'];
        $email_a = $_POST['Email_adm'];
        $paswword_a = $_POST['Fjalekalim_adm'];
        $password_a_Repeat = $_POST['Fjalekalim_adm-repeat'];
        //ne rast se i leme bosh
        if (empty($username_a) || empty($emer_a) || empty($mbiemer_a) || empty($email_a) || empty($paswword_a) || empty($password_a_Repeat)) {
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
        } elseif ($paswword_a !== $password_a_Repeat) {
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
                        $hashedPwd_a = password_hash($paswword_a, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt, "sssss", $username_a, $emer_a, $mbiemer_a, $email_a, $hashedPwd_a); //s eshte string to be passed in ..?-ja qe vendosem  .. per ?? do ishte "ss"
                        mysqli_stmt_execute($stmt);
                        header("Location: regjistrim.php?success=success");
                        exit();
                    }
                }
            }
        }
        mysqli_stmt_close($stmt); //closing the statement
    mysqli_close($conn); //mbyll lidhjen me db
    



}



$username_t = "";
$emer_t = "";
$mbiemer_t = "";
$email_t = "";
$grMosha_t = "";
$info_t = "";

if (isset($_POST['regjTr'])) {
    regjistroTrajner();
}



function regjistroTrajner(){
global $conn;


$username_t = $_POST['Username_tr'];
$emer_t = $_POST['Emer_tr'];
$mbiemer_t = $_POST['Mbiemer_tr'];
$email_t = $_POST['Email_tr'];
$paswword_t = $_POST['Fjalekalim_tr'];
$password_t_Repeat = $_POST['Fjalekalim_tr-repeat'];
$grMosha_t = $_POST['Grupmosha_tr'];
$info_t = $_POST['Info_tr'];

//ne rast se i leme bosh
if (empty($username_t) || empty($emer_t) || empty($mbiemer_t) || empty($email_t) || empty($paswword_t) || empty($password_t_Repeat) || empty($grMosha_t) || empty($info_t)) {
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
} elseif ($paswword_t !== $password_t_Repeat) {
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
                $hashedPwd_t = password_hash($paswword_t, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt, "sssssss", $username_t, $emer_t, $mbiemer_t, $email_t, $hashedPwd_t, $grMosha_t, $info_t); //s eshte string to be passed in ..?-ja qe vendosem  .. per ?? do ishte "ss"
                mysqli_stmt_execute($stmt);
                header("Location: trajneret.php?success=success");
                exit();
            }
        }
    }
}
mysqli_stmt_close($stmt); //closing the statement
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



function regjistroSportist(){
global $conn;


$username_s = $_POST['Username_sp'];
$emer_s = $_POST['Emer_sp'];
$mbiemer_s = $_POST['Mbiemer_sp'];
$email_s = $_POST['Email_sp'];
$paswword_s = $_POST['Fjalekalim_sp'];
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

$dt = "SELECT TIMESTAMPDIFF (YEAR, '$dtl_s',NOW()) AS age";


if ($dt >= 45 ){
    $ID_trajneri = 3;
}
elseif ($dt <=45 && $dt >= 15){
    $ID_trajneri = '1';
}
else {
    $ID_trajneri = '2';
}

//ne rast se i leme bosh
if (empty($username_s) || empty($emer_s) || empty($mbiemer_s) || empty($email_s) || empty($paswword_s) || empty($password_s_Repeat) ||
    empty($cel_s) || empty($adresa_s) || empty($qyteti_s) || empty($zip_s) || empty($dtl_s) || empty($gjinia_s) || empty($pesha_s) ||
    empty($gjatesia_s)) {
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
} elseif ($paswword_s !== $password_s_Repeat) {
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
            $sql = "INSERT INTO sportisti (Username_sp, Emer_sp, Mbiemer_sp, Email_sp, Fjalekalim_sp, Cel_sp, Adresa_sp, Qyteti_sp, 
            ZipKodi_sp, Datelindja_sp, Gjinia_sp, Pesha_sp, Gjatesia_sp, ID_trajneri, Info_sp) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: sportistet.php?error=error");
                exit();
            } else {
                $hashedPwd_s = password_hash($paswword_s, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt, "sssssssssssssss", $username_s, $emer_s, $mbiemer_s, $email_s, $hashedPwd_s, $cel_s, $adresa_s, $qyteti_s,
                $zip_s, $dtl_s, $gjinia_s, $pesha_s, $gjatesia_s, $ID_trajneri, $info_s); //s eshte string to be passed in ..?-ja qe vendosem  .. per ?? do ishte "ss"
                mysqli_stmt_execute($stmt);
                header("Location: sportistet.php?success=success");
                exit();
            }
        }
    }
}
mysqli_stmt_close($stmt); //closing the statement
mysqli_close($conn); //mbyll lidhjen me db

}


