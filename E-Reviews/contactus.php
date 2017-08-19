<!DOCTYPE html>
<head>
	<title> Elecctronics world</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
	<meta name="viewport" conntent="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <style>
 input[type=text], select, textarea {
    font-family: 'Roboto','sans-serif';
	font-size:15px;
	width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

h2 {
	color:royalblue;
	font-family: 'Roboto','sans-serif';
	text-align:center;
}
input[type=submit] {
    background-color: #5578ED;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    width:60%;
	margin:0 20%;
	padding: 20px;
}

form {
	font-family: 'Roboto','sans-serif';
	}
 </style>
	</head>

<body class="body">
	
	<header class="mainHeader">
		<nav><ul>
			<li><a href="home.php">Home</a></li>
			<li ><a href="ut1.php">E-Reviews</a></li>
			<li><a href="aboutus.php">About Us</a></li>
			<li class="active"><a href="contactus.php">Contact Us</a></li>
			<li><a href="registration.php">Sign Up</a></li>
		
	
	</ul>
		</nav>
	</header>
	
	<div class="container">
		<h2>Contact Form</h2>
 <form action="/action_page.php">
    <label for="fname">Full Name</label>
    <input style="margin-left:0px;" type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Email Id or Mobile number</label>
    <input style="margin-left:0px;" type="text" id="lname" name="email or number" placeholder="Enter your Email Id or Mobile number..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="India">India</option>
	  <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>


<footer style="text-align:center;background-color:#45B39D;">
<p>Copyright&copy <a href="#" title="electronicsworld">electronicsworld.com</a></p>	
</footer>	
	
	
	
	
	
	
	
	</body>
</html>