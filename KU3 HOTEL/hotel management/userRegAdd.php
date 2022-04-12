<?php

include_once("dbconnect.php");

$cusername=$_POST['cusername'];
$cname=$_POST['cname'];
$chp=$_POST['chp'];
$cadd=$_POST['cadd'];
$cemail=$_POST['cemail'];
$cpwd=$_POST['cpwd'];

//insert data
$sql ="INSERT INTO customer(username, name, noPhone, address, email, password) VALUES ('$cusername' ,'$cname','$chp','$cadd','$cemail','$cpwd')";

$runQ = mysqli_query($conn,$sql);

if($runQ)
{
    echo header("location:userLogin.php");
}
else{
    echo "<br><h1 style ='text-align:center'>Database not found.Sorry</a></h1><br>";
}
?>

