<?php 

include'dbconnect.php'; 

  	//session_start();
	
	if(isset($_POST['empUsername']))
	{
		$empUsername = stripcslashes($_REQUEST['empUsername']);
		$empUsername = mysqli_real_escape_string($conn,$_POST['empUsername']);
		$empPassword = stripcslashes($_REQUEST['empPassword']);
		$empPassword = mysqli_real_escape_string($conn,$_POST['empPassword']);

		$sql = "SELECT *FROM employee WHERE empUsername = '$empUsername' AND empPassword = '$empPassword'";
		$result = mysqli_query($conn,$sql) or die(mysql_error());
		$row = mysqli_num_rows($result);

		//$count = mysqli_num_rows($resultQ);

		//if result match $cUsername and $cPwd, table row must be 1 row

		if($row == 1){
            session_start();
			$_SESSION['empUsername'] = $empUsername;
			echo $_SESSION['empUsername'];
			header("Location: staffBook.php");
		}
		else
		{
            $error="";
			echo "<script type = 'text/javascript'>alert('Your username or password is invalid. Click OK to try again');window.location='userLogin.php'</script>";
        }
        
	}
?>