<?php

session_start();
include_once '../conn.php';
include_once 'functions.php';

//Fetching Values from URL
$login_pass = $_POST['u_password'];
$login_user = $_POST['u_username'];
$v_id = $_POST['v_id'];

if ($login_pass != '' && $login_user != '') {

    $sqlcheck = "SELECT * FROM user WHERE u_username='" . $login_user . "' AND u_status = 1 ";

    $result = mysqli_query($conn, $sqlcheck);
    if (mysqli_num_rows($result) > 0) {
        $res = mysqli_fetch_assoc($result);
        $pw = $res['u_password'];

        if ($login_pass == $pw) {

            $_SESSION['login'] = $res['u_id'];
            $_SESSION['user'] = $res['u_username'];

            if ($v_id != 0) {
                header('Location: ../watch.php?v_id=' . $v_id);
            } else {
                header('Location: ../index.php?error=0');
            }
        } else {
            if ($v_id != 0) {
                header('Location: ../watch.php?v_id=' . $v_id);
            } else {
                header('Location: ../index.php?error=0');
            }
        }
    } else {
        if ($v_id != 0) {
            header('Location: ../watch.php?v_id=' . $v_id);
        } else {
            header('Location: ../index.php?error=0');
        }
    }
} 

 