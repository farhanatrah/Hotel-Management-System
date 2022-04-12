<?php
include 'dbconnect.php';

$username=$_GET['empUsername'];
$_SESSION['empUsername'] =$username;
$empUsername =$_SESSION['empUsername'];

//delete data
$delete_id=$_GET['room_id'];
$query ="DELETE FROM room WHERE room_id =$delete_id";
$result =mysqli_query($conn,$query) or die("Delete failed");
if($result)
{
    echo "<script>window.history.back()</script>"; //to go previuos page without losing a data and session
}

?>
