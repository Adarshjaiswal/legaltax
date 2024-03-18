<?php
$host = "localhost";
$user = "root";
$password = "";
$db_name = "iso";
$con = new mysqli($host,$user,$password,$db_name);
if($con->connect_error)
    die("connection failed");


