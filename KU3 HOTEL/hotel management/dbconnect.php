<?php

//connection to mySQL

$host = "localhost";
$username = "root";
$password = "";
$database = "hotel";

//connect to db server
$conn = mysqli_connect($host,$username,$password) or die("Could not connect");

//select database
mysqli_select_db($conn,$database) or die("Could not select database");

?>