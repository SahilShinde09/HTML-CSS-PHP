<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Home Page</title>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://kit.fontawesome.com/b356ad9dc8.js" crossorigin="anonymous"></script>
</head>

<body>
<form method="POST">
  <div class="hero">
    <nav>
      <img
        src="pcet-trust-logo-fotor-bg-remover-2023041422524.png"
        class="logo" alt="">
      <ul>
        <li>
          <h2>Pimpri Chinchwad Education Trust</h2>
        </li>
      </ul>
      <div>
       <!-- <a href="login.php" class="login-btn">login in</a>
	   <label for="color">Background Color:</label>-->
		<select name="use_type" style="width:100px;height:40px;margin-top:0px;margin-left:0px;">
			<option selected disabled>Login As</option>
			<option value="Admin">Admin</option>
			<option value="Student">Student</option>
		</select>
		<input type="submit" name="submit" value="login" style="width:80px;height:40px;"/>
		</form>	
		<?php
		if(isset($_POST["submit"]))
		{
				//$getval=$_POST["use_type"];
				if($_POST["use_type"]=='Admin')
				{
					header("location: sign_in.php");

					exit();
				}
				else if($_POST["use_type"]=='Student'){
						header("location: login.php");

						exit();
				}
				else{
					echo "please select value";
				}
		}
		

?>
      </div>
    </nav>
    <div class="content">
      <h1>Welcome<br>to PCET's<br>PlacementCell</h1>
      <p class="anim">Serves to assist the student to explore the opportunities provided by a prospective employer</p>
    </div>


  </div>


  <div id="footer2" style="background-color: rgb(28, 28, 25); color: blueviolet;">

    <footer style="text-align: center; margin-top: 20px;"></footer>

    <ul class="navCat">
      <b><li class="topLevel" style="color:rgb(90, 28, 236) ; text-decoration: underline; ">About</li></b>
      <a href="" style="text-decoration:none ; color: blueviolet;"> <li> About Us</li></a>
      <a href="" style="text-decoration:none ; color: blueviolet;" > <li>Our Story</li></a>
      <a href="" style="text-decoration:none ; color: blueviolet;"> <li>FAQ</li></a>
    </ul>
    <ul class="navCat">
      <b><li class="topLevel" style="color:rgb(90, 28, 236) ; text-decoration: underline; ">Services</li></b>
      <a href="" style="text-decoration:none ; color: blueviolet;" > <li>Custom Orders</li></a>
      <a href="" style="text-decoration:none ; color: blueviolet;"> <li>Wholesale</li></a>
    </ul>
    <ul class="navCat">
      <b><li class="topLevel" style="color:rgb(90, 28, 236) ; text-decoration: underline; ">Contact</li></b>
      <a href="" style="text-decoration:none ; color: blueviolet;"> <li>Customer Service</li></a>
      <a href="" style="text-decoration:none ; color: blueviolet;"> <li>Careers</li></a>
      <a href="" style="text-decoration:none ; color: blueviolet;"> <li>Community</li></a>
      <a href="" style="text-decoration:none ; color: blueviolet;"> <li>Social Media</li></a>
    </ul>

    <div class="main" style="margin-top: 80px; padding-top: 50px; ">
      <!-- Facebook Icon -->
      <div class="icon fb">
        <i class="fa-brands fa-facebook-f"></i>
        <span>Facebook</span>
      </div>

      <!-- Twitter Icon -->
      <div class="icon twt">
        <i class="fa-brands fa-twitter"></i>
        <span>Twitter</span>
      </div>

      <!-- Linkedin Icon -->
      <div class="icon lnk">
        <i class="fa-brands fa-linkedin-in"></i>
        <span>Linkedin</span>
      </div>

      <!-- GitHub Icon -->
      <div class="icon git">
        <i class="fa-brands fa-github"></i>
        <span>GitHub</span>
      </div>

      <!-- YouTube Icon -->
      <div class="icon yt">
        <i class="fa-brands fa-youtube"></i>
        <span>YouTube</span>
      </div>

    </div>

    <div style="margin-top: 40px;  text-align: center;">
      <p class="">&copy; 2023 Your Company. All rights reserved.

      </p>
    </div>
    </footer>

  </div>
  

  

</body>

</html>