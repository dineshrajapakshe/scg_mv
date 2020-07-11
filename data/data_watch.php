<?php

include_once '../session.php';
include_once '../../inc/functions.php';

if (isset($_GET['v_id'])) {
    $v_id = $_GET['v_id'];
} else {
    $v_id = 0;
}
$vid_cat = '';
// if ($v_id > 0) {

//     $sql = "select * from videos where v_id='" . $v_id . "'";
//     $result = mysqli_query($conn, $sql);
//     $row = mysqli_fetch_assoc($result);
//     $cat_id = intval($row['category_id']);
//     if ($cat_id > 0) {
//         $vid_cat = ' WHERE `category_id`=' . $cat_id . ' AND v_id != ' . $v_id;
//     }
// }
if ($v_id > 0) {

    $sql = "select * from videos where v_id='" . $v_id . "'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    // $cat_id = intval($row['category_id']);
    // if ($cat_id > 0) {
    //     $vid_cat = ' WHERE `category_id`=' . $cat_id . ' AND v_id != ' . $v_id;
    // }
}

$sql_file_list = "select * from videos $vid_cat ORDER BY v_id DESC";
$result_file_list = mysqli_query($conn, $sql_file_list);

$sql_comment_list = "select * from comments where co_status=1 and co_video='" . $v_id . "' ORDER BY co_date DESC";
$result_comment_list = mysqli_query($conn, $sql_comment_list);

