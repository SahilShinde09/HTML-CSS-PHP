
<?php
// Initialize the session
 require 'function.php';
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]=== true){
    header("location: student_page.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="./css/bootstrap.icons.css">
 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  </head>
  <body>
 
		<div class="row col-md-8 border rounded mx-auto mt-5 p-1 shadow-lg">
			<div class="col-md-4 text-center">
				<img src="<?=get_image($row['image'])?>" class="img-fluid rounded" style="width:180px;height:180px;object-fit:cover;">
			<div>
				<a href="profile_edit.php">
					<button class="mx-auto m-1 btn-sm btn btn-primary">Edit</buttton>
				</a>
				<a href="profile_delete.php">
				<button class="mx-auto m-1 btn-sm btn btn-warning text-white">Delete</buttton>
				</a>
				<a href="logout.php">
				<button class="mx-auto m-1 btn-sm btn btn-info text-white">Logout</buttton>
				</a>
			</div>
		</div>
		<div class="col-md-8">
		<div class="h2">User Profile</div>
		<table class="table table-striped">
			<tr><th colspan="2">User Details:</th></tr>
			<tr><th><i class="bi bi-envelope"></i>Email</th><td>email@email.com</td></tr>
			<tr><th><i class="bi bi-person-circle"></i>First Name</th><td>XYZ</td></tr>
			<tr><th><i class="bi bi-person-square"></i>Last Name</th><td>ABC</td></tr>
			<tr><th><i class="bi bi-gender-ambiguous">Gender</th><td>Male</td></tr>
		</table>
	</div>
	</div>
	
	
  </body>
  </html>