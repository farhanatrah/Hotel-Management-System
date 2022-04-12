<?php 

include'dbconnect.php'; 

  	//session_start();
	
	if(isset($_POST['username']))
	{
		$username = stripcslashes($_REQUEST['username']);
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$password = stripcslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);

		$sql = "SELECT *FROM customer WHERE username = '$username' AND password = '$password'";
		$result = mysqli_query($conn,$sql) or die(mysql_error());
		$row = mysqli_num_rows($result);

		//$count = mysqli_num_rows($resultQ);

		//if result match $cUsername and $cPwd, table row must be 1 row

		if($row == 1){
            session_start();
			$_SESSION['username'] = $username;
			echo $_SESSION['username'];
			header("Location: home.php");
		}
		else
		{
            $error="";
			echo "<script type = 'text/javascript'>alert('Your username or password is invalid. Click OK to try again');window.location='userLogin.php'</script>";
        }
        
	}
?>