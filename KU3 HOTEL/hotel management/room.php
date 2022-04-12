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


<!DOCTYPE html>
<html>
   <meta name="viewport" content="width=device-width, iniyial-scale=1">
</head>
<body style=" background-color:#e3caaf;">
  <br>
  <br>
  <br>
<p style="text-align:center;font-family:Gothic;font-size:50px;">KU-3 Hotel</p>
<style>
<p style align=center>
body {
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
<li><a class="navbar-text" href="home.php?username=<?php echo $_SESSION['username']; ?>"><b>HOME</b></a></li>&emsp;
<li> <a class="navbar-text" href="aboutUs.php?username=<?php echo $_SESSION['username']; ?>"><b>ABOUT US</b></a></li>&emsp;
<li> <a  class="navbar-text" href="room.php?username=<?php echo $_SESSION['username']; ?>"><b>ROOM</b></a></li>&emsp;
<li> <a  class="navbar-text" href="<?php session_destroy()?>homepage.php"><b>LOGOUT</b></a></li>
</div>
</style>


<style>

  table.redTable {
  border: 1px solid black;
  background-color: #d3d3d3;
  width: 70%;
  text-align: center;
  border-collapse: collapse;
}
table.redTable td, table.redTable th {
  border: 1px solid black;
  padding: 3px 2px;
}
table.redTable tbody td {
  font-size: 17px;
}
table.redTable tr:nth-child(even) {
  background: #d3d3d3;
}
table.redTable thead {
  background: #d3d3d3;
}
table.redTable thead th {
  font-size: 19px;
  color: black;
  text-align: center;
  border-left: 1px solid black;
}
table.redTable thead th:first-child {
  border-left: none;
}

table.redTable tfoot {
  font-size: 13px;
  color: black;
  background: #d3d3d3;
}
table.redTable tfoot td {
  font-size: 13px;
}
table.redTable tfoot .links {
  text-align: right;
}
table.redTable tfoot .links a{
  display: inline-block;
  background: white;
  color: black;
  padding: 2px 8px;
  border-radius: 5px;
}

.button {
  background-color: #e7e7e7;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
            
        </style>
        <title>ROOM</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <center> <h1> Best Available Rate </h1> 
            <table class="redTable">
                <thead>
                    <tr>
                        <th>Room</th>
                        <th>Room Name</th>
                        <th>Price Per Night</th>
                        <th>Option</th>
                    </tr>
                </thead>
            
                <tbody>
                    
                    <tr>
                        <td><img src="sk.jpg" width="150" height="140"></td>
                        <td>Superior King</td>
                        <td>RM140.00</td>
                        <td><button onclick="location.href='room1.php?username=<?php echo $_SESSION['username']; ?>'">Book</button></td>
                    </tr>
                    <tr>
                        <td><img src="st.jpg" width="150" height="150"></td>
                        <td>Superior Twin</td>
                        <td>RM140.00</td>
                        <td><button  onclick="location.href='room2.php?username=<?php echo $_SESSION['username']; ?>'">Book</button></td>
                    </tr>
                    <tr>
                        <td><img src="dk.jpg" width="150" height="150"></td>
                        <td>Deluxe King</td>
                        <td>RM160.00</td>
                        <td><button  onclick="location.href='room3.php?username=<?php echo $_SESSION['username']; ?>'">Book</button></td>
                    </tr>
                    <tr>
                        <td><img src="dt.jpg" width="150" height="150"></td>
                        <td>Deluxe Twin</td>
                        <td>RM240.00</td>
                        <td><button  onclick="location.href='room4.php?username=<?php echo $_SESSION['username']; ?>'">Book</button></td>
                    </tr>
                    <tr>
                        <td><img src="ss.jpeg" width="150" height="150"></td>
                        <td>Studio Suite King</td>
                        <td>RM200.00</td>
                        <td><button  onclick="location.href='room5.php?username=<?php echo $_SESSION['username']; ?>'">Book</button></td>
                    </tr>
					<br>
                </tbody>
            </table>
           
        </center>   
    </body>
</html>
