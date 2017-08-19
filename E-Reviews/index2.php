<?php
	date_default_timezone_set('Europe/Copenhagen');	
	include 'dbh.inc.php';
	include 'comments.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>redmi</title>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
<?php
	echo "<form method='POST' action='".userLogout()."'>
	</form>";

?>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="#news">Logout</a>
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
    <li class="header" style="background-color:#4CAF50">Details</li>
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