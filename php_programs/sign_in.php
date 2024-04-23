
<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){
	
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'admin_login');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];
//require_once('db_conn.php');
$sql= "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
$result = mysqli_query($link,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
echo '<script>alert("Logged In successfully...")</script>';
header("location: adminpanel.php");
    exit;
}else{
echo '<script>alert("Please check username or Password...")</script>';
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
   <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
   <link rel="stylesheet" href="sign_in.css">
</head>
<body>
<form method="post" action="" name="signin-form">

	<div class="form-element">
	<h2 style="font-family:verdana;">Admin Login</h2>
	</div>
  <div class="form-element">
    <label>Username</label>
    <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
  </div>
  <div class="form-element">
    <label>Password</label>
    <input type="password" name="password" required />
  </div>
  <button type="submit" name="login" value="login">Log In</button>
</form>
</body>
</html>