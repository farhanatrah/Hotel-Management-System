<!DOCTYPE html>
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

<?php require_once('dbconnect.php'); ?>

<?php
	if (!isset($_SESSION)) {
  	session_start();
	}


	$sql = "SELECT * FROM room WHERE room_id = '2'";
	$result = mysqli_query($conn,$sql);			
?>


<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-image: url('a.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  
}
h2 {
  color: black;
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

label {
  width:240px;
  display: inline-block;
}

.navbar-text{
  color: #800000;
}
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: white;
}
</style>
</head>
<body>
<br>
<br>
<br>
<center>
<h1><p>KU-3 HOTEL</p></h1>
</center>


<ul>
<div class="navbar">
<li><a class="navbar-text" href="home.php?username=<?php echo $_SESSION['username']; ?>"><b>HOME</b></a></li>&emsp;
<li> <a class="navbar-text" href="aboutUs.php?username=<?php echo $_SESSION['username']; ?>"><b>ABOUT US</b></a></li>&emsp;
<li> <a  class="navbar-text" href="room.php?username=<?php echo $_SESSION['username']; ?>"><b>ROOM</b></a></li>&emsp;
<li> <a  class="navbar-text" href="<?php session_destroy()?>homepage.php"><b>LOGOUT</b></a></li>
</div>




<form method="post" action="roomProcess.php?username=<?php echo $_SESSION['username']; ?>">
         <center> <h4> Details Room </h4> 
         <?php
					while($r = mysqli_fetch_array($result))
					{
                        $room_name=$r['room_name'];
                        $room_desc=$r['room_desc'];
                        $room_price=$r['room_price'];
                ?>
                
                <fieldset style="width:500px">
              
                <label>Room Name:<?php echo $r['room_name'] ?><br><br></label>
               
                
               <center><label>Room Description:<?php echo $r['room_desc'] ?></label></center>
                 
                 
                 <label>Price Per Night: RM<?php echo $r['room_price']?><br> </label>
                   
                   
                   <label>Night:
                    <input type="text" name="night" class="form-control" value="1"/><br></label>
                      <br><br>
				        	  <label>Check-in:
                    <input type="date" name="checkin" class="form-control"/><br></label>
				       	    <label>Check-out:
                    <input type="date" name="checkout" class="form-control"/><br></label>
          
                   <input type="hidden" name="hidden_name" value="<?php echo $r['room_name'];?>">
                    <input type="hidden" name="hidden_desc" value="<?php echo $r['room_desc'];?>">
                    <input type="hidden" name="hidden_price" value="<?php echo $r['room_price'];?>">
                     <br>
                    <br><input  type="submit" name="book" class="btn" value="Book">

                    </fieldset>
          <?php  }?>

                   
                    
        

</center>
  </form>
  <center><h3><a  class="navbar-text"  href="room.php?username=<?php echo $_SESSION['username'];?>">BACK</a></h3></center>
</body>
</html>