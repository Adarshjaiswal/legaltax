<?php
$host = "localhost";
$user = "u736935735_isocertificate";
$password = "iSo@123445";
$db_name = "u736935735_isocertificate";
$con = new mysqli($host,$user,$password,$db_name);
if($con->connect_error)
    die("connection failed");
