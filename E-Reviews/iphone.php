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
<title>iphone</title>
<link rel="stylesheet" type="text/css" href="style3.css">
</head>

<body>

<div class="topnav">
  <a href="home.php">Home</a>
  <a href="ut1.php">E-Reviews</a>
  <a class="active" href="iphone.php">iphone</a>
  <a href="aboutus.php">AboutUs</a>
  <a href="insert.php">ContactUs</a>
  <a href="registration.php">SIGNUP</a>
  
</div>

<h1 style="text-align:center">Iphone 7</h1>

<img src="index.jpg"  style="width:300px; height:350px;">
<h2 style="text-align:center">Products specification</h2>

<div class="columns">
  <ul class="price">
    <li class="header">Specification</li>
    <li class="grey">Model</li>
    <li>Screen size</li>
    <li>Camera</li>
    <li>Battery Life</li>
    <li>Storage</li>
	<li>Os</li>
    <li>Price</li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#34495E">Details</li>
    <li class="grey">IPhone 7</li>
    <li>5.50 inches</li>
    <li>12MP Front & 7MP Back</li>
    <li>4050 mAh</li>
    <li>32 GB </li>
	<li>IOS 10</li>
    <li>49999/-</li>
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