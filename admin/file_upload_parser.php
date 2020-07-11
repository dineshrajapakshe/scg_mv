<?php

/* Getting file name */
$filename = $_FILES['file1']['name'];

/* Location */
$location = "../uploads/user/files/video/" . $filename;

if (move_uploaded_file($_FILES['file1']['tmp_name'], $location)) {
    echo "uploads/user/files/video/" . $filename;
} else {
    echo 0;
}