<?php 

session_start();
include 'dbconnect.php';

if($cuname=$_GET['username']){//this one yg dapatkan uname dari page lain
$_SESSION['username']=$cuname;
//$cusername = $_SESSION['username'];//declare balik session baru

}


if (!isset($_SESSION['username']))
echo "you are not log in yet";

else
{

echo " welcome" .$_SESSION['username'];

}

?>


<div class="tabtab" align="center">
    <br>
<center><u><h1> MY PAYMENT</h1></u></center>
<br>
<br>
<br>

<table id="myTable" name="myTable" style="table-layout: fixed;">
<tr style="height: 30px">
<th width="15%">DATE</th>
<th width="15%">INVOICE NUMBER</th>
<th width="15%">CUST ID </th>
<th width="15%">TOTAL</th>
<th width="15%">STATUS</th>
</tr>

<?php
$sql1 ="SELECT * FROM customer WHERE username = '$cuname'";
$query1=mysqli_query($conn,$sql1) or die("query cust failed");
$rq1=mysqli_fetch_array($query1);
$c_id=$rq1['cust_id'];

$sql2="SELECT * FROM invoice WHERE cust_id = '$c_id'";
$query2= mysqli_query($conn,$sql2) or die("query inv failed");

while($rq2 = mysqli_fetch_array($query2)){
   
   ?>

    <tr align ="center">
        <td><?php echo $rq2['inv_date'] ?></td>
        <td><?php echo $rq2['inv_num'] ?></td>
        <td><?php echo $rq2['cust_id'] ?></td>
        <td><?php echo $rq2['room_total'] ?></td>
        <td><?php echo $rq2['inv_status'] ?></td>
    </tr>
    <?php  
    }
?>

</table>


