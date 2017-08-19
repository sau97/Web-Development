<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-Reviews</title>
  <style>
		
		body {
    background-image: url("wood.png");
	opacity: 0.8;
}
.footer-default {
	position:fixed;
	background-color:white;
	height:40px;
	padding-top:10px;
	bottom:0px;
	opacity:0.8;
	width:100%;
	text-align:center;
	}

  
  </style>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="ut1.php">E-Reviews</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Phones<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Samsung.php">SAMSUNG</a></li> 
            <li><a href="motorola.php">MOTOROLA</a></li>
			<li><a href="redmi.php">REDMI</a></li>
            <li><a href="iphone.php">IPHONE</a></li>
           
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Laptops <span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li><a href="msi.php">MSI</a></li>
            <li><a href="dell.php">Dell</a></li>
            <li><a href="macbook.php">Apple</a></li>
            <li><a href="HP.php">HP </a></li>
          </ul>
        </li>
      <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Television <span class="caret"></span></a>
          <ul class="dropdown-menu">
			<li><a href="micromax.php">Micromax</a></li>
            <li><a href="try.php">LG</a></li>
          </ul>
        </li>
			<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Camera <span class="caret"></span></a>
          <ul class="dropdown-menu">
           <li><a href="nikon.php">NIKON</a></li>
            <li><a href="canon.php">CANON</a></li>
          </ul>
        </li>
		<a></a>
  <a class="navbar-brand" href="registration.php">SIGNUP</a>
	  </ul>
      <ul class="nav navbar-nav navbar-right">
     <form class="navbar-form navbar-right">
  </div>
</form>
      </ul>
    </div>
  </div>
</nav>

<h1>CATEGORIES : </h1>

<style>
div.gallery {
    margin: 20px;
    border: 1px solid #ccc;
    float: left;
    width: 280px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
	background-color:white;
}
</style>
</head>
<body>

<div class="gallery">
  <a target="_blank" href="">
    <img src="mobile.jpg" alt="Trolltunga Norway" width="600" height="350">
  </a>
  <div class="desc">Mobile Phones</div>
</div>

<div class="gallery">
  <a target="_blank" href="">
    <img src="laptops.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Laptops</div>
</div>

<div class="gallery">
  <a target="_blank" href="">
    <img src="tvs.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Television</div>
</div>

<div class="gallery">
  <a target="_blank" href="">
    <img src="cameras.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Cameras</div>
</div>


<footer class="footer-default">
		<p>copyright@2017 <a>E-Reviews.com</a></p>
</footer>
</body>
</html>
