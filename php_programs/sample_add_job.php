<?php 

	require 'function2.php';

	/*if(!is_logged_in())
	{
		redirect('index_page.php');
	}*/

	$id = $_GET['id'] ?? $_SESSION['PROFILE']['id'];

	$row = db_query("select * from jobinfo where id = :id limit 1",['id'=>$id]);

	if($row)
	{
		$row = $row[0];
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap-icons.css">
</head>
<body>

	<div class="text-center p-1"><a href="job_view.php">All users</a></div>
	
	<div class="text-center p-1"><a href="student_page.php">Home</a></div>

	<?php if(!empty($row)):?>
		<div class="row col-lg-8 border rounded mx-auto mt-5 p-2 shadow-lg">
			<div class="col-md-4 text-center">
				<img src="placement.jpg" class="img-fluid rounded" style="width: 180px;height:180px;object-fit: cover;">
				
				<div>
					
					<?php if(user('id') == $row['id']):?>
							
					<?php endif;?>
					<a href="mailto:pccoer.ravet@gmail.com ?subject=Job Application">
							<button class="mx-auto m-1 btn-sm btn btn-primary">Apply</button>
						</a>
						<a href="job_view.php">
							<button class="mx-auto m-1 btn-sm btn btn-warning text-white">Back</button>
							</a>
				</div>
			</div>
			<div class="col-md-8">
				<div class="h2">Available Jobs</div>
				<table class="table table-striped">
					<tr><th colspan="2">Job Details:</th></tr>
					<tr><th>Position</th><td><?=esc($row['name'])?></td></tr>
					<tr><th> Location</th><td><?=esc($row['location'])?></td></tr>
					<tr><th>Required Education</th><td><?=esc($row['education'])?></td></tr>
					<tr><th> Description</th><td><?=esc($row['description'])?></td></tr>
				</table>
			</div>
		</div>
	<?php else:?>
		<div class="text-center alert alert-danger">That profile was not found</div>
		<a href="index.php">
			<button class="btn btn-primary m-4">Home</button>
		</a>
	<?php endif;?>

</body>
</html>