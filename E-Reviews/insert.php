<!DOCTYPE html>
<html>
<head>
<title>contactForm</title>
<link href="insert.css" rel="stylesheet">
</head>

<body background="tech.jpg" >
<header class="mainHeader">
		<nav><ul>
			<li><a href="home.php">Home</a></li>
			<li ><a href="ut1.php">E-Reviews</a></li>
			<li><a href="aboutus.php">About Us</a></li>
			<li class="active"><a href="insert.php">Contact Us</a></li>
			<li><a href="registration.php">Sign Up</a></li>
		
	
	</ul>
		</nav>
	</header>
	
<div class="maindiv">
<div class="form_div">
<div class="title">
<h2>Contact form</h2>
</div>
<form action="insert.php" method="post">
<label>Name:</label>
<input class="input" name="Name" type="text" value="" placeholder="Name">
<label>Email:</label>
<input class="input" name="eORm" type="text" value="" placeholder="email or mobile number">
<label for="country">Country</label>
    <select id="country" name="country">
      <option value="India">India</option>
	  <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
	<br />
	<br />
	<br />
<label>Subject:</label>
<textarea cols="25" name="subject" placeholder="write something..." rows="5"></textarea><br>
<input class="submit" name="submit" type="submit" value="Submit">
</form>
</div>
</div>
<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("eelectronics", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$Name = $_POST['Name'];
$eORm = $_POST['eORm'];
$country = $_POST['country'];
$subject = $_POST['subject'];
if($Name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("insert into contactus(Name, eORm, country, subject) values ('$Name', '$eORm', '$country', 'subject')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>

</body>
</html>