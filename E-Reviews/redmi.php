<?php
	date_default_timezone_set('Europe/Copenhagen');	
	include 'dbh.inc.php';
	include 'comments.inc.php';
	session_start();	
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>redmi</title>
<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>

<?php
	echo "<form method='POST' action='".userLogout()."'>
	</form>";

?>
		

<div class="topnav">
  <a href="home.php">Home</a>
  <a href="ut1.php">E-Reviews</a>
  <a class="active" href="redmi.php">Redmi</a>
  <a href="aboutus.php">AboutUs</a>
  <a href="insert.php">ContactUs</a>
  <a href="registration.php">SIGNUP</a>
  
</div>

<h1 style="text-align:center">Redmi Note 3</h1>

<img src="redmi.jpeg"  style="width:550px; height:350px;">
<h2 style="text-align:center">Products specification</h2>

<div class="columns">
  <ul class="price">
    <li class="header">Specification</li>
    <li class="grey">Model</li>
	<li>Release date</li>
    <li>Screen size</li>
    <li>Camera</li>
    <li>Battery Life</li>
    <li>Storage</li>
	<li>RAM</li>
    <li>Price</li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#34495E">Details</li>
    <li class="grey">xioami redmi note 3</li>
	<li>November 2015</li>
    <li>5.50 inches</li>
    <li>16MP Front & 5MP Back</li>
    <li>4050 mAh</li>
    <li>16 GB </li>
	<li>2GB</li>
    <li>9999/-</li>
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