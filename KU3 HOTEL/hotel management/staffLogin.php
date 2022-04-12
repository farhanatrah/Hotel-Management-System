
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
  background-image: url('a.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
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
  width: 500px;
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
  margin: 10px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 10px;
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
</style>
</head>
<body>
<center>
  <br>
  <br>
  <br>
  <br>
  <br>
<h2>LOG IN</h2>


<div class="containerupper">
  <form name="login_form" action="staffProcessLogin.php" method="POST">
    
        <label>Username:</label>
		<input type="text" name="empUsername" placeholder="Enter username" required>
		<br>
		<label>Password:</label>
		<input type="password" name="empPassword" placeholder="Enter password" required>
    <br>
		 <input type="submit" name="login_btn" id="login_btn" value="Log in">
		 <input type="reset" name="rbtn" id="button" value="Clear">
		 <br>
		 <br><p>Not yet register? <a href="signupstaff.php">Sign up</a></p>
		 
  </form>
</div>

<br>
</body>
</html>