
<!DOCTYPE html>
<html>
<head>
<body style="background-color:powderblue;">
  <link href='https://fonts.googleapis.com/css?family=Arial' rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
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
  <a href="About Us.html">ABOUT US</a>
  <a href="room.html">ROOM</a>
  <div class="dropdown">
    <button class="dropbtn">LOGIN 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="custsign.html">CUSTOMER</a>
      <a href="staffsign.html">STAFF</a>
    </div>
  </div> 
</div>
</style>
</body>
</head>
<style>
  header {
  background-color: #89CFF0;
  font-family: 'Sofia';
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: Black;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* style the container */
.containerupper {
  position: relative;
  width: 750px;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 50%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: #dd4b39;
  color: white;
}

/* style the submit button */
input[type=submit] {
  background-color: powderblue;
  color: white;
  cursor: pointer;
  width:100px;
}

input[type=submit]:hover {
  background-color: #89cff0;
}

/* style the reset button */
input[type=reset] {
  background-color: powderblue;
  color: white;
  cursor: pointer;
  width:100px;
}

input[type=reset]:hover {
  background-color: #89cff0;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  width: 750px;
  background-color: black;
  border-radius: 0px 0px 4px 4px;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}


.icon-bar {
  width: 50%;
  background-color: powderblue;
  overflow: auto;
  text-align: center;
}

.icon-bar a {
  float: left;
  width: 16%;
  padding: 12px 0;
  border-radius:180px;
  transition: all 0.3s ease;
  color: black;
  font-size: 26px;
}

.icon-bar a:hover {
  background-color: white;
}
footer {
  background-color: #89cff0;
  padding: 10px;
  text-align: left;
  color: black;
}

label{
  width:100px;
  display:inline-block;
}
</style>
</head>
<body>
<center>
  <header>
  <h2>KU-3 HOTEL</h2>
</header>
<h2>Create an account</h2>


<div class="containerupper">
     <form name="formReg" method="post" action="staffRegAdd.php">
        <label>Username:</label>
        <input type="text" name="susername" placeholder="Enter username" required><br>
        <label>Name:</label>
        <input type="text" name="sname" placeholder="Enter name" required><br>
        <label>IC:</label>
        <input type="text" name="sic" placeholder="Enter ic" required><br>
        <label>Date of Birth:</label>
        <input type="date" name="sdob"  required><br>
        <label>Address:</label>
        <input type="text" name="sadd" placeholder="Enter address" required><br>
        <label>Phone Number:</label>
        <input type="text" name="sphone" maxlength="10" placeholder="Enter phone number(+60)" required><br>
        <label>Email:</label>
        <input type="email" name="semail" placeholder="Enter email" required><br>
        <label>Password:</label>
        <input type="password" name="spassword" placeholder="Enter password" required><br>
        
      
         <input type="submit" name="sbtn" id ="button" value ="Sign up">
         <input type="reset" name="rbtn" id ="button" value ="Clear">

         <br><p>Already have account?<a href="staffLogin.php">Log In</a></p>
      </form>
      </div>
      
    </div>
  </form>
</div>

<br>
<footer>
      <div class="container">
        <h5> Our Address</h5>
        <h5><ul>No 85,<br> Jalan Stesen ,<br>Kampung Lubok Katak, <br> 35000 Tapah, Perak</ul>
        </h5>
        </div>
      <div class="icon-bar">
  <a href="#"><i class="fa fa-envelope"></i></a> 
  <a href="#"><i class="fa fa-globe"></i></a>
  <a href="#"><i class="fa fa-whatsapp"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <a href="#"><i class="fa fa-instagram"></i></a>
  <a href="#"><i class="fa fa-youtube"></i></a>
</div>
<div>
<br><center>
<p>&copy; 2021 KU-3HOTEL.com<p></center></div></footer></footer>
</body>
</html>