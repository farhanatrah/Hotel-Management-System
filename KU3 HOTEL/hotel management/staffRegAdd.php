<?php

include_once("dbconnect.php");

$susername=$_POST['susername'];
$sname=$_POST['sname'];
$sic=$_POST['sic'];
$sdob=$_POST['sdob'];
$sadd=$_POST['sadd'];
$sphone=$_POST['sphone'];
$semail=$_POST['semail'];
$spassword=$_POST['spassword'];

//insert data
$sql ="INSERT INTO employee(empUsername,empName,empIC,empDOB,empAdd,empPhoneno,empEmail,empPassword) VALUES ('$susername','$sname' ,'$sic','$sdob','$sadd','$sphone','$semail','$spassword')";

$runQ = mysqli_query($conn,$sql);

if($runQ)
{
    echo header("location:staffLogin.php");
}
else{
    echo "<br><h1 style ='text-align:center'>Database not found.Sorry</a></h1><br>";
}
?>

