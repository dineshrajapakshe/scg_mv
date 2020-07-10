<?php

include_once '../session.php';
include_once '../conn.php';

$sql = "select * from user ORDER BY u_id DESC";

$result = mysqli_query($conn, $sql);



