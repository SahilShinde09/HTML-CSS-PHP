<?php 

	require 'function2.php';

	/*if(!is_logged_in())
	{
		redirect('login.php');
	}*/

	$rows = db_query("select * from jobinfo");


?>

<!doctype html>
<html>
	<head>
		<title>jobs</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="job_css.css">
		
	
	</head>
	<body>
		<form name="jobs" method="POST" action="" target="_self">
				<div id="main" style="background-image: url('header_image.jpg');">
					<nav class="navbar">
							<ul class="navbar-menu">
								<div class="dropdown">
								<button class="dropbtn">View Jobs</button>
										<div class="dropdown-content">
											<a href="job_view.php">Mechanical Engineer</a>
											<hr>
											<a href="job_view.php">E & TC</a>
											<hr>
											<a href="job_view.php">Computer Engineer</a>
											<hr>
											<a href="job_view.php">Civil Engineer</a>
										</div>
									</div>
								<li><a href="#im">Our Recruiters</a></li>
								<li><a href="view_placed_records.php">View Placed Students</a></li>
								
							</ul>
					</nav>
				</div>
				
								
				
				<div id="rec">
						<h2>Our Top Recruiters</h2>
						<div id="im" >
							<a href="https://corporate.ford.com/"><img src="ford.jpg" style="width:150px;height:100px;padding-left:200px;"></a>
							<a href="https://www.microsoft.com/en-in/about/"><img src="Microsoft.png" style="width:150px;height:100px;padding-left:100px;"></a>
							<a href="https://www.ibm.com/in-en"><img src="ibm.png" style="width:150px;height:100px;padding-left:100px;"></a>
							<a href="https://www.cognizant.com/in/en"><img src="cog.jpg" style="width:150px;height:100px;padding-left:100px;"></a>
							<a href="https://careers.wipro.com/opportunities"><img src="wipro.png" style="width:150px;height:100px;padding-left:100px;"></a>
							<a href="https://www.mahindra.com/"><img src="mahi.png" style="width:150px;height:100px;padding-left:200px;padding-right:100px;"></a>
							<a href="https://www.veritas.com/"><img src="veritas.png" style="width:150px;height:100px;padding-left:20px;padding-top:50px;"></a>
							<a href="https://www.infosys.com/"><img src="infosys.png" style="width:150px;height:100px;padding-left:70px;padding-top:50px;"></a>
							<a href="https://www.1mg.com/manufacturer/msn-laboratories-55786"><img src="msn.jpg" style="width:150px;height:100px;padding-left:100px;padding-top:50px;"></a>
							<a href="www.hyundai.com"><img src="hyundai.png" style="width:150px;height:100px;padding-left:100px;padding-top:50px;"></a>
							<a href="https://novolex.com/"><img src="novolex.png" style="width:150px;height:100px;padding-left:700px;padding-top:50px;"></a>
						</div>
				</div>
				

	</body>
</html>
