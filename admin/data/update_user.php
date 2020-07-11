<?php

session_start();
include_once '../../conn.php';

if (isset($_POST['update'])) {
    $u_id = intval($_SESSION['login']);
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $phone = trim($_POST['phone']);
    $email = strtolower(trim($_POST['email']));
    $location = trim($_POST['location']);
    $password = trim($_POST['password']);
    $password2 = trim($_POST['password2']);
    $u_ppic = null;
    
    if (basename($_FILES['image']["name"]) != '') {
        $data = mt_rand(100000, 1000000) . "_" . $_FILES['image']["name"];
        if (move_uploaded_file($_FILES['image']["tmp_name"], '../../uploads/user/profile/' . $data)) {
            $u_ppic = $data;
        }
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email = null;
    }
    if (($password != null && ($password == $password2))) {
        $password = md5($password);
        $query = "UPDATE user SET u_fname=\"$first_name\",u_lname=\"$last_name\",u_email=\"$email\",u_phone=\"$phone\",u_password=\"$password\",u_country=\"$location\",u_ppic=\"$u_ppic\" WHERE u_id=\"$u_id\"";
    } else {
        $query = "UPDATE user SET u_fname=\"$first_name\",u_lname=\"$last_name\",u_email=\"$email\",u_phone=\"$phone\",u_country=\"$location\",u_ppic=\"$u_ppic\" WHERE u_id=\"$u_id\"";
    }
    mysqli_query($conn, $query);
    $_SESSION['user_det'] = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE u_id=\"$u_id\""));
    header('Location: ../my_account.php?error=0');
} else {
    header('Location: ../');
}