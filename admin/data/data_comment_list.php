<?php

include_once '../../conn.php';
$sql_comment_list = "select * from comments ORDER BY co_date DESC";
$result_comment_list = mysqli_query($conn, $sql_comment_list);
