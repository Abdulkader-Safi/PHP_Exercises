<?php

$sname = "localhost";
$uname = "abdulkader";
$pass = "Safi@2020";
$dname = "login_system";

$conn = mysqli_connect($sname, $uname, $pass, $dname);

if (!$conn) {
    echo "Connection Failed";
}
