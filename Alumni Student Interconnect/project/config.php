<?php
 
$conn = mysqli_connect("localhost","root","","qwerty");

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
?>