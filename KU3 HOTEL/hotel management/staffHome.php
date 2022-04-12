<?php 
 
session_start();
include 'dbconnect.php';
//if($cuname=$_GET['username']){//this one yg dapatkan uname dari page lain
//$_SESSION['username']=$cuname;
//}//declare balik session baru

if (!isset($_SESSION['empUsername']))
echo "you are not log in yet";
else
{

//echo " welcome" .$_SESSION['username'];

}
?>

<HTML>
<meta name="viewport" content="width=device-width, iniyial-scale=1">
<br><Title> Home</Title>
</head>
<body style="background-color:powderblue;">
<div style="background-image: ('kul.jpg');">
<p style="text-align:center;font-family:Gothic;font-size:50px;">KU-3 Hotel</p>
<SCRIPT language = Javascript>

//declare variable name

//alert ("Wecome to KU-3 Hotel, Please have a look!");

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
<body>

<div class="navbar">
  <a href="home.html">HOME</a>
  <a href="StaffBook.php?empUsername=<?php echo $_SESSION['empUsername']; ?>">BOOK STATUS</a>
  <a href="staffRoom.php?empUsername=<?php echo $_SESSION['empUsername']; ?>">STAFF ROOM</a>
  <a href="staffTotal.php?empUsername=<?php echo $_SESSION['empUsername']; ?>">TOTAL SALES</a>
  <a href="<?php session_destroy()?>staffLogin.php">LOGOUT</a>
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
</style>
</head>
<body>
 <center> <br><img src="ku.jpg" alt="KU-3" width="500" height="333"><br> </center>
</body>