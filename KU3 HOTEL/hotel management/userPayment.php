<?php 

session_start();
include 'dbconnect.php';

if($cuname=$_GET['username']){//this one yg dapatkan uname dari page lain
$_SESSION['username']=$cuname;
//$cusername=$_SESSION['username'];//declare balik session baru
}

if (!isset($_SESSION['username']))
echo "you are not log in yet";
else
{

//echo " welcome" .$_SESSION['username'];

}
?>

<html>
<meta name="viewport" content="width=device-width, iniyial-scale=1">
<br><Title> Home</Title>
</head>
<body style="background-color:#e3caaf;">
<div style="background-image: ('kul.jpg');">
<p style="text-align:center;font-family:Gothic;font-size:40px;">KU-3 Hotel</p>
<SCRIPT language = Javascript>

//declare variable name



</SCRIPT>
<style>
<p style align=center>
body
 {
  font-family: Arial, Helvetica, sans-serif;
  text-align: center;

}


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


.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 500px;
  float: center;
}


label{
  width:100px;
  display:inline-block;
}


</style>
<html>
<head>
    <title>Payment Information</title>
    <script type="text/javascript">
       function display(){
           alert("Payment successful.Thank you.");

       }
       </script>
    </head>
    <body>
	<center>
    <center><h2>Payment Information</h2></center>
	<div class="container">
				<form action="room.php?username=<?php echo $_SESSION['username']; ?>" method="post">
					<label>Name :</label>
					<input type="text" name="name" placeholder="Enter name"><br><br>
					<label>Receiver's Address : </label>
					<textarea name="Address" placeholder="Enter receiver's address"></textarea><br><br>
					<label>Phone Number : </label>
					<input type="text" name="name" placeholder="Enter phone number"><br><br>
					<label>Credit Card Type : </label>
					<input type="radio" name="cType" value="visa">Visa
					<input type="radio" name="cType" value="mastercard">Master Card<br><br>
					<label>Credit Card Number : </label>
					<input type="text" name="name" placeholder="Enter credit card number"><br><br>
					<label>Credit Card Expiry Date (Month) : </label>
					<input type="text" name="month" placeholder="Enter expiry month"><br><br>
					<label>Credit Card Expiry Date (Year) : </label>
					<input type="text" name="year" placeholder="Enter expiry year"><br><br>
					<input type="checkbox" name="save" value="yes">Save<br><br>
					<input type="Submit" name="submit" value="Sumbit" onclick="display()"><br><br>
                </form>
				</div>
</center>
</body>
</html>