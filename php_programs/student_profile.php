<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Student Profile</title>
  <link rel="stylesheet" href="ch.css">
</head>
<style>
body{
  background-image: url("stud_profile.png");
  background-size: cover ;
}
*{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Poppins', sans-serif;
}
.navvv{
width: 100%;
padding: 30px 3%;
overflow: hidden;
}

nav{
display: flex;
text-align: left;
justify-content: space-between;
align-items: center;
}

nav ul li{
display: inline-block;
list-style: none;
margin: 10px 15px;
padding-right: 900px;
text-align: center;
}
h2{
font-size: 25px;
}
.logo{
  padding-left: 60px;
width: 170px;
height: 90px;
}
  #mainDiv {
    color: black;
    font-weight: bolder;
  }
  .log{
    padding-right: 20px;
  color: #000000;
  text-decoration: none;
}
</style>

<body>
  <div class="background"> &nbsp; </div>
  <div class="navv">
    <nav>
      <img src="pcet-trust-logo-fotor-bg-remover-2023041422524.png" class="logo" alt="">
      <ul>
        <li><h2>PCET's Placement System</h2></li>
      </ul>
      <a href="#" class="log">Log out</a>
    </nav>
  </div>

  <div id="imgUpld" style="display: none;"
    class="col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
    <label id="imgupldLbl" style="color:red; display: none"> * Reqiured</label>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
      <input onfocus="hide('imgupldLbl')" id="imgfile" type="file" class="form-control" name="image"
        placeholder="Upload Your Image">
    </div>
    <br>
    <button onClick="upload('st')"
      class="btn col-lg-6 col-lg-offset-3 btn col-sm-6 col-sm-offset-3 btn col-xs-6 col-xs-offset-3"><span
        class="glyphicon glyphicon-user"></span> Upload</button>
    <button onClick="cancle()"
      class="btn col-lg-6 col-lg-offset-3 btn col-sm-6 col-sm-offset-3 btn col-xs-6 col-xs-offset-3"><span
        class="glyphicon glyphicon-user"></span> Cancle</button>
  </div>

  <div id="disp">

    <div id="mainDiv" style="margin-top: 10px;" class="col-lg-10 col-lg-offset-1 col-xs-12">
      <div style=" text-align: center;">
        <img
          style="background-color: white;width: 150px; height: 150px; border-radius: 50%; border: 5px solid white; box-shadow: 0px 0px 10px 5px gray;"
          id="pImg">
      </div>
      <div onClick="editImg()" style="text-align: center;cursor: pointer;">
        <span style="text-shadow: 0px 0px 5px white;">

          <span class="glyphicon glyphicon-edit"></span><span>Edit Image</span>
        </span>
      </div>
      <h2 id="name" class="col-lg-8 col-lg-offset-2  col-xs-12"
        style="text-shadow: 0px 0px 5px white; ;font-weight: bolder ;border-bottom: 1px dashed rgba(119, 119, 119, 0.726); text-align: center; padding-bottom: 3px;border-radius: 50%">
        Personal Information
      </h2>
      <div class="col-lg-8 col-lg-offset-2">
        <div style="margin: 15px;padding: 10px;box-shadow: 0px 0px 10px gray;border-radius: 10px;">

          <h3 style=" text-align: center;text-shadow: 0px 0px 5px white;">

          </h3>

          <ul class="list-group">

            <li class="list-group-item list-group-item-info text-center">Obtained Marks : <span id="marks">Fill</span>
            </li>
            <br>
            <li class="list-group-item list-group-item-info text-center">Grade : <span id="grade">Fill</span></li>
            <br>
            <li class="list-group-item list-group-item-info text-center">Email : <span id="email">Fill</span></li>
            <br>
            <li class="list-group-item list-group-item-info text-center">Contact Number : <span id="num">Fill</span>
            </li>
            <br>
            <li class="list-group-item list-group-item-info text-center">Date of Birth : <span id="dob">Fill</span></li>
            <br>
            <li class="list-group-item list-group-item-info text-center">City : <span id="city">Fill</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <script>

    function hide(b) {
      let src = document.getElementById(b);
      src.innerHTML = "* Required";
      src.style.display = "none";
    }
  </script>
</body>

</html>
