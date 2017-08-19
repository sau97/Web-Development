<?php

?>
<!doctype>
<html>
<head>
<title>sign up</title>
<link rel="icon" type="text/jpg" href="1.jpg">
<meta charset="utf-8"/>
	<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
	
<style>
	form
	{
		text-align:center-right;
		padding:10px;
		width:500px;
		background-color: #014448;
		position:absolute;
		color:white;
		font-weight:italic;
		top:230px;
		left:450px;
		font-size:20px;
		height:640px;
		margin-bottom:100px;
		-webkit-box-shadow: 10px 10px 5px -3px rgba(0,0,0,0.75);
		-moz-box-shadow: 10px 10px 5px -3px rgba(0,0,0,0.75);
		box-shadow: 10px 10px 5px -3px rgba(0,0,0,0.75);
		opacity:0.7;
	
	}
	body {
		background-image:boat.jpg;
	}
	
	h1 {
		
		margin-top:60px;
		margin-left:500px;
		font-weight:400px;
		font-family:Roboto Slab;
		font-size:4em;
		color:black;
		width:370px;
		height:60px;
		padding:20px;
		background: rgba(70, 72, 82, 0.2);
	}
	
	input{
	border-color:black;
	border-width:1px;
	font-size:14px;
	font-weight:300;}
	
	
	a {
		color:pink;
		text-decoration:none;
	}
	a:hover{
		color:orange;
		text-decoration:underline;
	}
	input ,select{
	padding:4px 10px 4px 5px;
	border-radius:3px;
	width:145px;
	}
	input.user, input.pass,input.ret{
	width:350px;
	}
	input.lname{
	
	width:165px;
	
	}
	input.fname{
	margin-right:5px;
	}
	input.mob{
	
	margin-left:5px;
	width: 200px;
	}
	a.lin{
	color:white;
	text-decoration:none;}
	a:hover{
	text-decoration:underline; 
	}
	input.button{
	font-size:15px;
	
	webkit-box-shadow: 7px 7px 5px -3px rgba(51,22,35,1);
		-moz-box-shadow: 7px 7px 5px -3px rgba(51,22,35,1);
		box-shadow: 7px 7px 5px -3px rgba(51,22,35,1);

	}
	h2{
	padding-left:150px;
	font-size:2em;
	}
	input.user{
	width:200px;
	font-weight:700;}
	select.gender,input.ppic{
	border:1px solid black;
	background-color:white;
	font-weight:500;
	color:black;
	font-size:15px;
	}
	input.gender{
		margin-right:5px;
		}
	#radio{
		width:20px;
		}
	input{
		font-size:15px;
		}
</style>
</head>
<body background="pic2.jpg" >

<header class="mainHeader">
		<nav><ul>
			<li><a href="home.php">Home</a></li>
			<li ><a href="ut1.php">E-Reviews</a></li>
			<li><a href="aboutus.php">About Us</a></li>
			<li><a href="insert.php">Contact Us</a></li>
			<li class="active"><a href="registration.php">Sign Up</a></li>
		
	
	</ul>
		</nav>
	</header>
    
    
       
<h1>E-Reviews</h1>

	<form action="h2.php" method="post">
		<h2>SIGN UP</h2>
		Name :<br><input class="uid" placeholder="username" type="text" size="20" maxlength="20" name="uid">
		&emsp;&emsp;
		<br />
		<br />
		Gender :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;Mobile no :<br><select class="gender"name="gender">
			<option>Male</option>
			<option>Female</option>
			<option>Transgender</option>
		</select>&emsp;&emsp;&emsp;
		<input class="mob" type="text" size="10" maxlength="20" name="mobile">
		<br/>
		<br/>
		email :<br><input class="user "type="text" size="20" maxlength="20" name="username">
		<br><br>
		Password :<br><input class="pass" type="password" name="password">
		<br/>
		<br/>
		Confirm Password:<br><input class="ret" type="password" name="retpassword">
		<br/>
		<br/>
		<a class="lin" href="t&c.html">Confirm & Save</a>
		<br/>
		<input id="radio" type="radio" name="tc">&ensp;
		I Agree
		<br/>
		<br />
		<input class="button" type="submit" value="Submit" name="submit">
	</form>
</body>
</html>