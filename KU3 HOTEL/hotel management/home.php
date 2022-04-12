<?php 
 include 'dbconnect.php';
session_start();

if($cuname=$_GET['username']){//this one yg dapatkan uname dari page lain
$_SESSION['username']=$cuname;
}//declare balik session baru

if (!isset($_SESSION['username']))
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
<body style=" background-color:#e3caaf;">
<div style="background-image: ('kul.jpg');">
<br>
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
  background-image: url('a.jpeg');
  
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
<li><a class="navbar-text" href="home.php?username=<?php echo $_SESSION['username']; ?>"><b>HOME</b></a></li>&emsp;
<li> <a class="navbar-text" href="aboutUs.php?username=<?php echo $_SESSION['username']; ?>"><b>ABOUT US</b></a></li>&emsp;
<li> <a  class="navbar-text" href="room.php?username=<?php echo $_SESSION['username']; ?>"><b>ROOM</b></a></li>&emsp;
<li> <a  class="navbar-text" href="<?php session_destroy()?>homepage.php"><b>LOGOUT</b></a></li>
</div>
</style>


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


<br><div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="BG 3.jpg" style="width:100%">
  <div class="text"><b><i>KU-3 Hotel</b><i></div>
</div>

<div class="mySlides fade">
  
  <img src="BG 9.jpg" style="width:100%">
  <div class="text"><b><i>KU-3 Hotel</b><i></div>
</div>


</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}

function myFunction() {
  location.replace("file:///C:/Users/acer/Desktop/isp550/form.html")
}
</script>

</body>
<div class="row"> 
  <div class="column">
  <img src="l1.jpg" style="width:100%">
  <img src="l2.jpg" style="width:100%">
  </div>
  
  <div class="column">
  <img src=" l3.jpg" style="width:100%">
  <img src="l4.jpg" style="width:100%">
  </div>  
  
</div>

</body>
</html>

