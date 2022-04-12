<?php
	include('dbconnect.php');
	session_start();
	$user_check = $_SESSION['staff_id'];
	$ses_sql = mysqli_query($conn,"SELECT staff_id,staff_name,staff_hp FROM staff
WHERE staff_id = '$user_check' ");
$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_session = $row['staff_name'];
$login_id = $row['staff_id'];
if(!isset($_SESSION['staff_hp'])){
header("location:staffLogin.php");
die();
}
?>