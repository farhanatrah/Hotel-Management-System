
<!DOCTYPE html>
<html>
<head>
<body>
  <link href='https://fonts.googleapis.com/css?family=Arial' rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

<h2>LOG IN</h2>


<div class="containerupper">
  <form name="login_form" action="processLogin.php" method="POST">
    
        <label>Username:</label>
		<input type="text" name="username" placeholder="Enter username" required>
		<br>
		<label>Password:</label>
		<input type="password" name="password" placeholder="Enter password" required>
    <br>
		 <input type="submit" name="login_btn" id="login_btn" value="Log in">
		 <input type="reset" name="rbtn" id="button" value="Clear">
		 <br>
		 <br><p>Not yet register? <a href="signUp1.php">Sign up</a></p>
		 
  </form>
</div>

<br>

</body>
</html>