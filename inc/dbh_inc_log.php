<?php

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "account";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}