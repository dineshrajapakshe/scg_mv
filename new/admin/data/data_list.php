<?php

session_start();
include_once '../../conn.php';

$a_type= getAdminTypeIdByid($user_act, $conn);

if (isset($_POST['date_from'])) {
    $date_from = $_POST['date_from'];
} else {
    $date_from = '';
}
if (isset($_POST['date_to'])) {
    $date_to = $_POST['date_to'];
} else {
    $date_to = '';
}

if ($date_from != '') {

    if ($date_to != '') {
        $sql_u_wallet = " AND w_u_date between '$date_from' and '$date_to'";
        $sql_a_wallett = " AND w_a_date between '$date_from' and '$date_to'";
        $sql_numbers = " AND n_date between '$date_from' and '$date_to'";
        $sql_number_with_user = " AND n.n_date between '$date_from' and '$date_to'";
    } else {
        $sql_u_wallet = " AND DATE(w_u_date) = '$date_from'";
        $sql_a_wallett = " AND DATE(w_a_date) = '$date_from'";
        $sql_numbers = " AND DATE(n_date) = '$date_from'";
        $sql_number_with_user = " AND DATE(n.n_date) = '$date_from'";
    }
} else {
    $sql_u_wallet = '';
    $sql_numbers = '';
    $sql_a_wallett = '';
    $sql_number_with_user = '';
}



$a_type = $_SESSION['login_type'];

 

$sql_file_list = "select * from videos    ORDER BY v_id DESC";
$result_file_list = mysqli_query($conn, $sql_file_list);

$sql_comment_list = "select * from comments ORDER BY co_date DESC";
$result_comment_list = mysqli_query($conn, $sql_comment_list);

 
 
 

