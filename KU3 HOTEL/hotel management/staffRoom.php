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

$sql= "SELECT * FROM room";
$query =mysqli_query($conn,$sql);
$runsolo =mysqli_fetch_array($query);
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
  width:25%;
 
}


.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 55%;
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
    input=document.getElementById("myInput");
    filter=input.value.toUpperCase();
    table=document.getElementById("myTable");
    tr=table.getElementByTagName("tr");
    

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
       <center><u><h2>STAFF ROOM</h2></u></center>
       <center><a href="sAddRoom.php?empUsername=<?php echo $_SESSION['empUsername']?>"><button>ADD ROOM</button></a></center>
       <br>
      
       <center>
       <div class="container">
       <table>
           <tr align="center">
                <h1>
                    <th>ROOM ID</th>
                    <th>ROOM NAME</th>
                    <th>ROOM DESCRIPTION</th>
                    <th>PRICE</th>
                    <th>OPTION</th>
</h1>
</tr>
<?php 

while($run = mysqli_fetch_array($query))
{
    $room_id=$run['room_id'];
    $room_name=$run['room_name'];
    $room_desc=$run['room_desc'];
    $room_price=$run['room_price'];
    $_SESSION['room_id']=$room_id;
    //to use it for update and delete button
?>
<tr>
    <td><?php echo $room_id?></td>
    <td><?php echo $room_name?></td>
    <td><?php echo $room_desc?></td>
    <td><?php echo $room_price?></td>
    <td align="center"><a href="sRoomDelete.php?room_id=<?php echo $_SESSION['room_id'];?>&empUsername=<?php echo $_SESSION['empUsername'];?>"><button>DELETE</button></a></td>
</tr>
<?php  }?>
</div>
</table>
</center>


