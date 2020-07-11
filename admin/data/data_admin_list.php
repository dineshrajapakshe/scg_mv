<?php

include_once '../session.php';

if (isset($_GET['type'])) {
    $a_type = base64_decode($_GET['type']);
} else {
    $a_type = 0;
}

if($_SESSION['login_type']==1){
    
    $sql = "select * from admins where a_type ='" . $a_type . "'ORDER BY a_id DESC";
    
}elseif ($_SESSION['login_type']==2) {
    
    $sql = "select * from admins where a_type ='" . $a_type . "' and a_type2_by= '" .  $_SESSION['login'] . "'  ORDER BY a_id DESC";
    
}elseif ($_SESSION['login_type']==3) {
    
    $sql = "select * from admins where a_type ='" . $a_type . "' and a_type3_by= '" .  $_SESSION['login'] . "'  ORDER BY a_id DESC";
    
}elseif ($_SESSION['login_type']==4) {
    
    $sql = "select * from admins where a_type ='" . $a_type . "' and a_type4_by= '" .  $_SESSION['login'] . "'  ORDER BY a_id DESC";
    
}elseif ($_SESSION['login_type']==5) {
    
    $sql = "select * from admins where a_type ='" . $a_type . "' and a_type5_by= '" .  $_SESSION['login'] . "'  ORDER BY a_id DESC";
    
}



$result = mysqli_query($conn, $sql);

