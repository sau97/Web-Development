<?php
define('Db','eelectronics');
define('Db_user','root');
define('Db_host','localhost');
define('Db_password','');
mysql_connect(Db_host, Db_user, Db_password);
mysql_select_db(Db) or die();	
$uid=$_POST['uid'];
	$email=$_POST['username'];
	//$date=$_POST['date'];
	$mob=$_POST['mobile'];
	$gender=$_POST['gender'];
	$agree=$_POST['tc'];
	$password=$_POST['password'];
	$retpassword=$_POST['retpassword'];
	if($password == $retpassword )
	{	
	$sql ="INSERT INTO user (email,password,uid,Gender,Mob) VALUES ('$email','$password','$uid','$gender','$mob')";
	header("Location: ut1.php");
	if (!mysql_query($sql)){
	die('Error: ' .mysql_error());
}
mysql_close();
	}
	else{
		echo "Password do no match";
		echo "Go back";
	}
		
?>
