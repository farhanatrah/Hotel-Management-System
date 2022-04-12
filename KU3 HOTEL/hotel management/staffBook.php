<?php 
require_once('dbconnect.php');
session_start();

if($id =$_GET['empUsername']){
  $_SESSION['empUsername']=$id;
}

if(!isset($_SESSION['empUsername']))
echo "you are not log in yet";
else{
   // echo "welcome " .$_SESSION['empUsername'];
}

$sql= "SELECT *FROM room";
$result =mysqli_query($conn,$sql);


?>


<HTML>
<meta name="viewport" content="width=device-width, iniyial-scale=1">
<br><Title> Home</Title>
</head>
<body style="background-color:#e3caaf;">
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
  background-color: white;
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

}
  ul {
  text-align:center;
   color: black;
   list-style-type: none;
   margin: 0;
   padding: 0;

  
}

li {
  display: inline;
}
 li a{ 
  text-decoration: none;
 }

 .navbar-text{
  color: #800000;
}
</style>
</head>
<body>

<ul>
<div class="navbar">
 <li> <a class="navbar-text" href="StaffBook.php?empUsername=<?php echo $_SESSION['empUsername']; ?>"><b>BOOK STATUS</b></a></li>&emsp;
 <li> <a class="navbar-text" href="staffRoom.php?empUsername=<?php echo $_SESSION['empUsername']; ?>"><b>STAFF ROOM</b></a></li>&emsp;
 <li> <a class="navbar-text" href="staffTotal.php?empUsername=<?php echo $_SESSION['empUsername']; ?>"><b>TOTAL SALES</b></a></li>&emsp;
 <li> <a class="navbar-text" href="<?php session_destroy()?>homepage.php"><b>LOGOUT</b></a></li>
</div>
</style>
</body>
</head>

<body>

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


.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 60%;
  float: center;
}
</style>
</head>

<!DOCTYPE html>
<html>
<head>
<title>Book status</title>
<link rel="stylesheet" type="text/css" href="css/style2.css">

<script type="text/javascript">
function myFunction(){
    var input,filter,table,tr,td,i,txtValue;
    input= document.getElementById("myInput");
    filter= input.value.toUpperCase();
    table= document.getElementById("myTable");
    tr= table.getElementsByTagName("tr");
    

    for(i=0;i<tr.length;i++){
        td =tr[i].getElementsByTagName("td")[0];
        if(td){
            txtValue =td.textContect || td.innerText;
            if(txtValue.toUpperCase().indexOf(filter)> -1)
            {
                  tr[i].style.display="";
            } 
             else
             {
                 tr[i].style.display="none";
             }

            
        }
    }

}
</script>
</head>
<body>
    <center><u><h2>BOOK STATUS</h2></u></center>

    <center><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for invoice number " size="40"></center>
    <br>
    <center>
    <div class="container">
    <form name="form1" action="" method="post">
      
         <table id="myTable" name="myTable">
           <tr align="center">
                <h1>
                    <th>INVOICE NUMBER</th>
                    <th>TOTAL (RM)</th>
                    <th>DATE</th>
                    <th>STATUS</th>
                     <th colspan="2" >UPDATE</th>
                    
</h1>
</tr>
<?php
$sql2="SELECT * FROM invoice";
$rekod=mysqli_query($conn,$sql2);
while($r = mysqli_fetch_array($rekod))
{
    $inv_num =$r['inv_num'];
    $room_total=$r['room_total'];
    $inv_date=$r['inv_date'];
    $inv_status=$r['inv_status'];

    $_SESSION['inv_num']=$inv_num;

    ?>
    <tr align="center">
        <td><?php echo $inv_num?></td>
        <td><?php echo $room_total?></td>
        <td><?php echo $inv_date?></td>
         <td><?php echo $inv_status?></td>
        <td align ="center"><a href ="sUpdate.php?inv_num=<?php echo $_SESSION['inv_num'];?>&empUsername=<?php echo $_SESSION['empUsername']?>" name="complete">COMPLETE</a></td>
        <td align ="center"><a href ="sDelete.php?inv_num=<?php echo $_SESSION['inv_num'];?>&empUsername=<?php echo $_SESSION['empUsername']?>" name="delete">DELETE</a></td>
</tr>
<?php }?>
</table>
</center>
</form>
</div>
</body>

