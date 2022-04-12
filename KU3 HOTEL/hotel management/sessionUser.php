<?php
include('dbconnect.php');
session_start();
$user_check = $_SESSION['username'];
$ses_sql = mysqli_query($conn,"SELECT id,username FROM
customer WHERE username = '$user_check' ");
$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_session = $row['name'];
$login_id = $row['id'];
if(!isset($_SESSION['username'])){
header("location:userLogin.php");
die();
}
?>