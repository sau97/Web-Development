<!DOCTYPE html>
<html>
<head>
<style>
div.gallery {
    border: 1px solid #ccc;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
	margin-top : 10%;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
</style>
<title> E-Reviews</title>
	<meta charset="utf-8"/>
	
	<link rel="stylesheet" href="style1.css" type="text/css"/>
	<body>
<body class="body">
	
	<header class="mainHeader">
	


		<nav><ul>
			<li><a href="home.php">Home</a></li>
			<li class="active" ><a href="ut1.php">E-Reviews</a></li>
			<li><a href="aboutus.php">About Us</a></li>
			<li><a href="contactus.php">Contact Us</a></li>
			<li><a href="login.php">Log In</a></li>
			<li><a href="registration.php">Sign Up</a></li>
		
	<form>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
	
	<img src="mainpic.png" alt="Mountain View" style="width:1270px;height:350px;">
	
</head>
<ul>
<h1>Categories :</h1>

</ul>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="mobile.jpg">
      <img src="mobile.jpg" alt="Trolltunga Norway" width="300" height="200">
    </a>
    <div class="desc">Mobile Phones</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="laptops.jpg">
      <img src="laptops.jpg" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">Laptops</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_lights.jpg">
      <img src="cameras.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Cameras</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="tvs.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">TVs</div>
  </div>
</div>

<div class="clearfix"></div>

<div style="padding:6px;">

</div>

</body>
</html>
