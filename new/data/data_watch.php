<?php

include_once '../session.php';
include_once '../../inc/functions.php';

if (isset($_GET['v_id'])) {
    $v_id = $_GET['v_id'];
} else {
    $v_id = 0;
}

if ($v_id > 0) {

    $sql = "select * from videos where v_id='" . $v_id . "'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}

$sql_file_list = "select * from videos ORDER BY v_id DESC";
$result_file_list = mysqli_query($conn, $sql_file_list);

$sql_comment_list = "select * from comments where co_status=1 and co_video='" . $v_id . "' ORDER BY co_date DESC";
$result_comment_list = mysqli_query($conn, $sql_comment_list);

