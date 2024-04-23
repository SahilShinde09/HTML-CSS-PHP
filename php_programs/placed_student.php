<?php
		if (isset($_POST['submit'])) { 
		$conn = mysqli_connect("localhost", "root", "", "placed_student");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['email'];
        $year = $_REQUEST['pswd'];
        $company =  $_REQUEST['sal'];
        $package = $_REQUEST['des'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO new_record  VALUES ('$name',
            '$year','$company','$package')";
         
        if(mysqli_query($conn, $sql)){
            echo '<script>alert("Data stores successfully...")</script>';
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Insert Student Records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color:gray; color:white;">
<div class="container mt-3">
  <h2>Student Details</h2>
  <form action="placed_student.php" method="post" enctype="multipart/form-data"  style="border-style: solid;
  border-color: green;padding:40px 40px 40px 40px;margin-top:30px;">
	<input type="hidden" name="size" value="1000000">
    <div class="mb-3 mt-3">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Name" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Year:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter Year" name="pswd">
    </div>
	<div class="mb-3">
		<label for="sal">Company:</label>
		<input type="text" class="form-control" id="sal" placeholder="Enter company name" name="sal">
	  </div>
	<div class="mb-3">
		<label for="des">Package:</label>
		<input type="text" class="form-control" id="des" placeholder="Enter package" name="des" cols="40" rows="5">
	</div>
    <input type="submit" class="btn btn-primary" name="submit" value="submit"/>
  </form>
</div>
</body>
</html>
