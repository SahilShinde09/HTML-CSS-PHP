<?php

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]=== true){
    header("location: student_page.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit profile</title>
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
				<img src="noimage.png" class="js-image img-fluid rounded" style="width:180px;height:180px;object-fit:cover;">
			<div>
				<div class="mb-3">
				<label for="formFile" class="from-label">Click to select an image</label>
				<input onchange="display_image(this.files[0])"class="from-control" type="file" id="fromFile">
				</div>
			</div>
		</div>
		<div class="col-md-8">
		<div class="h2">Edit Profile</div>
		<form method="post">
		<table class="table table-striped">
			<tr><th colspan="2">User Details:</th></tr>
			<tr><th><i class="bi bi-envelope"></i>Email</th>
			<td><input type="text" class="from-control" name="email" placeholder="Email"></td>
			</tr>
			<tr><th><i class="bi bi-person-circle"></i>First Name</th>
			<td><input type="text" class="from-control" name="fname" placeholder="First Name"></td>
			</tr>
			<tr>
			<th><i class="bi bi-person-square"></i>Last Name</th>
			<td><input type="text" class="from-control" name="lname" placeholder="Last Name"></td>
			</tr>
			<tr>
			<th><i class="bi bi-gender-ambiguous">Gender</th>
			<td>
				<select class="form-select form-select mb-3">
					<option selected value="">--Select Gender--</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
			</td>
			</tr>
		</table>
		<div class="p-2">
			<button class="btn btn-primary float-end">Save</button>
	
			<a href="update_profile.php">
			<label class="btn btn-secondary">Back</button>
					</a>
		</div>
		</form>
	</div>
	</div>
  </body>
  </html>
  <script>
  console.log(URL);
	function display_image(file){
		var img=document.querySelector(".js-image");
		img.src=URL.createObjectURL(file);
		
	}
  </script>