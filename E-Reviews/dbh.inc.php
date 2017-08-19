<?php

$conn = mysqli_connect('localhost', 'root', '', 'eelectronics');

if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}