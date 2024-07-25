<?php

$server="localhost";
$username="root";
$password="";
$db='ds';

$con= mysqli_connect($server,$username,$password,$db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
 } 
 ?>