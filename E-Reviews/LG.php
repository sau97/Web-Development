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
<title>lg</title>
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
  <a class="active" href="LG.php">LG</a>
  <a href="aboutus.php">AboutUs</a>
  <a href="insert.php">ContactUs</a>
  <a href="registration.php">SIGNUP</a>
  
</div>

<h1 style="text-align:center">LG TV</h1>

<img src="lgtv.jpeg"  style="width:550px; height:350px;">
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
    <li class="grey">LG Ready LED TV</li>
    <li>32 Inches</li>
    <li>NO</li>
    <li>1920 x 1080</li>
    <li>20W</li>
    <li>19398/-</li>
  </ul>
</div>
<br>
<h2> Write your review here...</h2>

<?php
		echo "<form method='POST' action='".setComments($conn)."'>
			<input type='hidden' name='uid' value='uid'>
			<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
			<textarea name='message'></textarea><br>
			<button type='submit' name='commentSubmit'>Comment</button>
		</form>"; 
getComments($conn);  
?>	

</body>
</html>
