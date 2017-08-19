<?php
	date_default_timezone_set('Europe/Copenhagen');	
	include 'dbh.inc.php';
	include 'redhan.inc.php';
	session_start();	
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Micromax</title>
<link rel="stylesheet" type="text/css" href="style3.css">
</head>

<body>

<div class="topnav">
  <a href="home.php">Home</a>
  <a href="ut1.php">E-Reviews</a>
  <a class="active" href="micromax.php">micromax</a>
  <a href="aboutus.php">AboutUs</a>
  <a href="insert.php">ContactUs</a>
  <a href="registration.php">SIGNUP</a>
</div>

<h1 style="text-align:center">Micromax Canvas</h1>

<img src="mmaxtv.jpeg"  style="width:550px; height:350px;">
<h2 style="text-align:center">Products specification</h2>

<div class="columns">
  <ul class="price">
    <li class="header">Specification</li>
    <li class="grey">Model</li>
    <li>Display</li>
    <li>WIFI</li>
    <li>Screen Resolution</li>
    <li>Speaker Output</li>
    <li>Price</li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#34495E">Details</li>
    <li class="grey">Micromax Canvas HD Smart LED TV</li>
    <li>50 Inches</li>
    <li>YES</li>
    <li>1920 x 1080</li>
    <li>24W</li>
    <li>37000/-</li>
  </ul>
</div>
<br>
<h2> Write your review here...</h2>

<?php
	echo "<form method='POST' action='".getLogin($conn)."'>
		<input type='text' name='uid'>
		<input type='password' name='password'>
		<button type='submit' name='loginSubmit'>Login</button>
	</form>";
	echo "<form method='POST' action='".userLogout()."'>
		<button type='submit' name='logoutSubmit'>Logout</button>
	</form>";

?>
<br><br>

<?php
	if(isset($_SESSION['id'])) {
		echo "<form method='POST' action='".setComments($conn)."'>
			<input type='hidden' name='uid' value='".$_SESSION['id']."'>
			<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
			<textarea name='message'></textarea><br>
			<button type='submit' name='commentSubmit'>Comment</button>
		</form>";
	} else {
		echo "You need to be logged in to comment!
		<br><br>";
	}

getComments($conn);  
?>	

</body>
</html>
