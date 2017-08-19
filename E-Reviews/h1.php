<?php
//$dbhost='localhost';
//$username='root';
//$password='';
//$db='New';
define('Db','eelectronics');
define('Db_user','root');
define('Db_host','localhost');
define('Db_password','');
mysql_connect(Db_host, Db_user, Db_password);
mysql_select_db(Db) or die();
echo "connected";

$email =$_POST['email'];
$pass=$_POST['password'];
//$sql ="INSERT INTO table1 (email,password) VALUES ('$email','$pass')";
//$sql="SELECT FROM table1 password WHERE email=$email"; 
//$sql2="SELECT FROM table1 Name WHERE email=$email"; 
 
$result=mysql_query("SELECT * FROM user WHERE email='$email'");
//$username=mysql_query("SELECT FROM table1 Name WHERE email=$email");
$row=mysql_fetch_array($result);
if($row['password']==$pass)
{
	header("Location: index2.php"); 
}

else{
echo"Invalid email or password password=".$row['password'];
}	


mysql_close();
?>
