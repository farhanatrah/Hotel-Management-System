<?php 
include 'dbconnect.php';


if($id = $_GET['empUsername']){
$_SESSION['empUsername']=$id;
}

if(!isset($_SESSION['empUsername']))
echo "you are not log in yet";
else{
   // echo "welcome " .$_SESSION['empUsername'];
}
?>


<HTML>
<meta name="viewport" content="width=device-width, iniyial-scale=1">
<br><Title> Home</Title>
</head>
<body style="background-color:powderblue;background-image: url('a.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">
<div style="background-image: ('kul.jpg');">

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
  width: 25%;
  float: center;
}


label{
  width:100px;
  display:inline-block;
}
</style>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<title>ADD ROOM</title>

<script type="text/javascript">
function focused(x)
{
    x.style.background ="#e8f0fe";

}
</script>
</head>
<body>
  <br>
  <br>
  <br>
  <br>
<center>
    <h2>ADD ROOM</h2>
    <div class="container">
    <form action="sAddRoom.php?empUsername=<?php echo $_SESSION['empUsername'];?>" method="POST">
   
        <label>Room Name:</label>
        <input type="text" name="rname" required placeholder="room name" onfocus="focused(this)"><br><br>
        <label>Room Description:</label>
        <textarea type="text" name="rdesc" required placeholder="room description" onfocus="focused(this)"></textarea><br><br>
        <label>Room Price:</label>
        <input type="text" name="rprice" required placeholder="room price" onfocus="focused(this)"><br><br>

        <input type="submit" name="submit" id="add_room" value="ADD ROOM">
        <input type="reset" name="reset" id="reset" value="RESET">
</form>
</div>
</center>
<center><h3><a href="staffRoom.php?empUsername=<?php echo $_SESSION['empUsername'];?>">BACK</a></h3></center>
<?php
if(isset($_POST['submit'])){
    if($id=$_GET['empUsername']){
        $_SESSION['empUsername'] = $id;

    }

    if(!isset($_SESSION['empUsername']))
    echo "you are not log in yet";
    else{
        //echo "welcome" .$_SESSION['empUsername'];
    }

    $rname=$_POST['rname'];
    $rdesc=$_POST['rdesc'];
    $rprice=$_POST['rprice'];

    $sqlinsert="INSERT INTO room(room_name,room_desc,room_price) VALUES ('$rname','$rdesc','$rprice')";
    $runinsert=mysqli_query($conn,$sqlinsert) or die('query failed');
    
    //add new room
    if($runinsert)
    {
        echo "<script>alert('Added Successfully')</script>";
        echo"<script>window.history.back()</script>";
    }
    else
    echo "<script>alert('Add Room Failed')</script>";
}
?>