<?php

session_start();
include_once '../conn.php';
include_once 'functions.php';

if (isset($_POST['u_username']) && isset($_POST['u_password'])) {

//Fetching Values from URL
    $reg_pass = trim($_POST['u_password']);
    $reg_user = trim($_POST['u_username']);
    $reg_cpass = trim($_POST['u_cpassword']);
    $reg_email = strtolower(trim($_POST['u_email']));
    $v_id = $_POST['v_id'];
    $avoid_reg = false;

    if ($reg_pass != $reg_cpass) {
        $avoid_reg = true;
    } else {

        $reg_pass = md5($reg_pass);
    }
    if ($reg_email != null) {
        if (!filter_var($reg_email, FILTER_VALIDATE_EMAIL)) {
            $avoid_reg = true;
        }
    }
    if ($avoid_reg != true) {
        $have_user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE u_username=\"$reg_user\""));
        if ($have_user == null) {
            $query = "INSERT INTO user(u_username,u_password,u_status,u_email) VALUES(\"$reg_user\",\"$reg_pass\",\"1\",\"$reg_email\")";
            if (mysqli_query($conn, $query)) {
                $ins_id = mysqli_insert_id($conn);
                $_SESSION['login'] = $ins_id;
                $_SESSION['user'] = $reg_user;
                $_SESSION['user_det'] = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE u_id=\"$ins_id\""));
                if ($v_id != 0) {
                    header('Location: ../watch.php?v_id=' . $v_id);
                } else {
                    header('Location: ../index.php?error=0');
                }
            }
        } else {
            header('Location: ../index.php?error=1');
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

 