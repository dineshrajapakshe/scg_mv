<?php

include_once '../../conn.php';

//Fetching Values from URL
if (isset($_POST['category_id'])) {
    $category_id = $_POST['category_id'];
} else {
    $category_id = 0;
}
if (isset($_POST['name'])) {
    $name = $_POST['name'];
} else {
    $name = 0;
}
if (isset($_POST['remark'])) {
    $remark = $_POST['remark'];
} else {
    $remark = '-';
}
if (isset($_POST['unit'])) {
    $unit = $_POST['unit'];
} else {
    $unit = '1';
}

//Action 
$action = $_POST['action'];
$today = date('Y-m-d');

if ($action == 'register') {

    if ($name != '') {

        $sqlcheck = "SELECT * FROM category WHERE name='" . $name . "'";
        $result = mysqli_query($conn, $sqlcheck);

        if (mysqli_num_rows($result) > 0) {
            header('Location: ../category.php?error=' . base64_encode(8));
        } else {
            $sql = "INSERT INTO `category` ( `name`, `remark`,`p_cat`) VALUES ( '" . $name . "', '" . $remark . "', '" . $unit . "')";

            if (mysqli_query($conn, $sql)) {
                header('Location: ../category.php?error=' . base64_encode(4));
            } else {
                header('Location: ../category.php?error=' . base64_encode(3));
            }
        }
    } else {
        header('Location: ../category.php?error=' . base64_encode(3));
    }
}

if ($action == 'update' && $category_id > 0) {
    $sql = "update category set name='" . $name . "', `remark`='" . $remark . "', `p_cat`='" . $unit . "' where category_id='" . $category_id . "'";

    if (mysqli_query($conn, $sql)) {
        header('Location: ../category.php?category_id=' . base64_encode($category_id) . '&error=' . base64_encode(1));
    } else {
        header('Location: ../category.php?category_id=' . base64_encode($category_id) . '&error=' . base64_encode(3));
    }
}


 
