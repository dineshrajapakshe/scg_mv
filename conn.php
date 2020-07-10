<?php

date_default_timezone_set("Asia/Manila");
error_reporting(0);
@ini_set('display_errors', 0);

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "scg_mv");
define('APP_NAME', 'MV');

$email_username = "info@vcs2u.com";
$email_from_name = "SCG & Co";


$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

