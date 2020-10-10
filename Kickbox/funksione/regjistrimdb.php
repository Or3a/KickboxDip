<?php
//qe te jete i mundur aksesimi vetem nepermjet butonit
if (isset($_POST['regjistro'])) {

    require 'databaza.php';

    $username = $_POST['Username_adm'];
    $emer = $_POST['Emer_adm'];
    $mbiemer = $_POST['Mbiemer_adm'];
    $email = $_POST['Email_adm'];
    $password = $_POST['Fjalekalim_adm'];
    $passwordRepeat = $_POST['Fjalekalim_adm-repeat'];
    //ne rast se i leme bosh
    if (empty($username) || empty($emer) || empty($mbiemer) || empty($email) || empty($password) || empty($passwordRepeat)) {
        header("Location: regjistrim.php?error=emptyfields&Username_adm=" . $username . "&Email_adm=" . $email);
        exit();
    } 
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9*$/]", $username)) {
        header("Location: regjistrim.php?error=invalidEmail_admUsername_adm");
        exit();
    }
    //kontrollon ekzistencen e emailit
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: regjistrim.php?error=invalidEmail_adm=" . $username);
        exit();
    }
    //kontrollon passwordin
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: regjistrim.php?error=invalidUsername_adm&Email_adm=" . $email);
        exit();
    } else if ($password !== $passwordRepeat) {
        header("Location: regjistrim.php?error=passwordcheck&Username_adm=" . $username . "&Email_adm=" . $email);
        exit();
    } else {
        $sql = "SELECT Username_adm FROM admini WHERE Username_admAdmini=?"; //?  vendoset ne rast se ka njerez qe duan te bejne kod sql brenda username dhe prishet db
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: regjistrim.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username); //s eshte string to be passed in ..?-ja qe vendosem  .. per ?? do ishte "ss"
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt); //i bejme store 
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: regjistrim.php?error=usertaken&Email_adm=" . $email);
                exit();
            } else {
                $sql = "INSERT INTO admini (Username_adm, Emer_adm, Mbiemer_adm, Email_adm, Fjalekalim_adm) VALUES (?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: regjistrim.php?error=sqlerror");
                    exit();
                } else {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sssss", $username, $emer, $mbiemer, $email, $hashedPwd); //s eshte string to be passed in ..?-ja qe vendosem  .. per ?? do ishte "ss"
                    mysqli_stmt_execute($stmt);
                    header("Location: regjistrim.php?success=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt); //closing the statement
    mysqli_close($conn); //mbyll lidhjen me db

} else {
    header("Location: regjistro.php");
    exit();
}

