<?php
ob_start();
session_start();

$timezone = date_default_timezone_set("Africa/Tunis");

$con = mysqli_connect("localhost", "root", "", "Groovy");

if(mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
}
?>
