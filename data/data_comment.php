<?php
include_once '../conn.php';
 
if (isset($_POST["v_id"])) {
    $v_id = $_POST["v_id"];
} else {
    $v_id = '';
}
if (isset($_POST["comment"])) {
    $comment = $_POST["comment"];
} else {
    $comment = '';
}
if (isset($_POST["user"])) {
    $user = $_POST["user"];
} else {
    $user = '';
}

$action = $_POST["register"];
$today = date('Y-m-d');

if ($action == 'register') {
    $sql = "INSERT INTO `comments` ( `co_video`, `co_user`, `co_comment`, `co_date`, `co_status`) VALUES ( '" . $v_id . "', '" . $user . "', '" . $comment . "', '" . $today . "', '0')";

    if (mysqli_query($conn, $sql)) {
        header('Location: ../watch.php?v_id= ' . $v_id . '&error=4');
    } else {
        header('Location: ../watch.php?v_id= ' . $v_id . '&error=3');
    }
} else {
    if (mysqli_query($conn, $sql)) {
        header('Location: ../watch.php?v_id= ' . $v_id . '&error=3');
    }
}