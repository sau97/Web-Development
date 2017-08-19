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