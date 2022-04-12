<?php 

session_start();
include 'dbconnect.php';

if($cuname=$_GET['username']){//this one yg dapatkan uname dari page lain
$_SESSION['username']=$cuname;
}//declare balik session baru

if (!isset($_SESSION['username']))
echo "you are not log in yet";
else
{

//echo " welcome" .$_SESSION['username'];

}


//$delete_id=$_GET['room_id'];

$date=date("Y/m/d");
//echo $date;

//dapatkan cust id dari username
$sql1="SELECT * FROM customer WHERE username='$cuname'";
$query1=mysqli_query($conn,$sql1) or die("query cust failed");
$rq1=mysqli_fetch_array($query1);
$c_id=$rq1['cust_id'];


$rname=$_POST['hidden_name'];
$rprice=$_POST['hidden_price'];
$rnight=$_POST['night'];
$rcheckin=$_POST['checkin'];
$rcheckout=$_POST['checkout'];
$rtotal=$rprice * $rnight;

//insert into book
$sql2 ="INSERT INTO book(cust_id,room_name,room_price,room_night,checkin,checkout,room_total) VALUES ('$c_id','$rname','$rprice','$rnight','$rcheckin','$rcheckout','$rtotal')";
$query2=mysqli_query($conn,$sql2) or die("query cust failed");

//select book to display on my book using condition using id
$sql3="SELECT * FROM book WHERE cust_id = '$c_id'";
$query3= mysqli_query($conn,$sql3) or die("query cust failed");


?>


<HTML>
<meta name="viewport" content="width=device-width, iniyial-scale=1">
<br><Title> Home</Title>
</head>
<body style=" background-image: url('a.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">
<div style="background-image: ('kul.jpg');">
<br>
<br>
<p style="text-align:center;font-family:Gothic;font-size:40px;">KU-3 Hotel</p>
<SCRIPT language = Javascript>

//declare variable name



</SCRIPT>
<style>
<p style align=center>
body
 {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: gray;
  
}

.navbar a {
  float: left;
  font-size: 20px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 20px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: gray;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;

</style>
</head>


<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
}

.column img {
  margin-top: 12px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<body>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
img {
  border: 7px solid #555;
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif; }
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 30px;
  color: black;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 30px}
}
footer {
  background-color: #89cff0;
  padding: 10px;
  text-align: left;
  color: black;
  font-size:15;
}

table, th, td {
  border: 1px black solid;
  padding: 15px;
 
}

</style>
</head>
<body>
<h2 align="center"><u>Your Book</u> </h2>

<center>

<form name="formbook" action="" method="post">
    <table align="center" style="width: 80%">
  
        <tr style="height:30px">
        <th width="20%">Room Name</th>
        <th width="10%">Room Price</th>
        <th width="10%">Night</th>
        <th width="20%">Check-in</th>
        <th width="20%">Check-Out</th>
        <th width="10%">Total Price</th>
        
     </tr>


<?php

    while($rq = mysqli_fetch_array($query3)){
             $_SESSION['room_id']=$rq['room_id'];
    
?>
    <tr align ="center">
        <td><?php echo $rq['room_name']?></td>
        <td><?php echo $rq['room_price']?></td>
        <td><?php echo $rq['room_night']?></td>
        <td><?php echo $rq['checkin']?></td>
        <td><?php echo $rq['checkout']?></td>
        <td><?php echo $rq['room_total']?></td>

</tr>
<?php
}

?>

</table>
</form>
</center>
</body>
<center><button><a href="userPayment.php?username=<?php echo $_SESSION['username'];?>'">PAY</button></a></center>

<?php
$status ="PENDING";
$sqlinv ="INSERT INTO invoice(cust_id,room_total,inv_date,inv_status) VALUES('$c_id' ,'$rtotal' ,'$date', '$status')" ; 
$queryinv=mysqli_query($conn,$sqlinv) or die("Query insert failed");
?>
