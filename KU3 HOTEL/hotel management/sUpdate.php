<?php
include 'dbconnect.php';

$username=$_GET['empUsername'];
$_SESSION['empUsername'] =$username;
$empUsername =$_SESSION['empUsername'];

//update order status
$update_order =$_GET['inv_num'];
$updVal= "COMPLETE";
$query= "UPDATE invoice SET inv_status='$updVal' WHERE inv_num ='$update_order'";
$result =mysqli_query($conn,$query) or die("Update failed");
if($result)
{
    echo "<script>window.history.back()</script>"; //to go previuos page without losing a data and session
}

?>