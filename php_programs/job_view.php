<?php 

	require 'function2.php';

	/*if(!is_logged_in())
	{
		redirect('login.php');
	}*/

	$rows = db_query("select * from jobinfo");


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jobs</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap-icons.css">
	
	
</head>
<body>
	<div class="row" style="width:1580px;height:400px; background-image: url(place.jpg');">
	<?php if(!empty($rows)):?>
		<?php foreach($rows as $row):?>
			<div class="col-2 border rounded mx-auto mt-5 p-2 shadow-lg" style="width:200px;">
				<a href="sample_add_job.php?id=<?=$row['id']?>">
					<div class="col-md-12 text-center">
						
						<div>

						 	<div><?=esc($row['name'])?></div>
						 	<div><?=esc($row['location'])?></div>
							<div><?=esc($row['education'])?></div>
							<div><?=esc($row['description'])?></div>
						</div>
					</div>
				</a>
			</div>
		<?php endforeach;?>
	<?php else:?>
		<div class="text-center alert alert-danger">That profile was not found</div>
		<a href="index.php">
			<button class="btn btn-primary m-4">Home</button>
		</a>
	<?php endif;?>
	</div>
</body>
</html>