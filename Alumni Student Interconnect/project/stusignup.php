<?php
session_start();
include 'config.php';

$name = $_POST['sname'];
$username = $_POST['susername'];
$email = $_POST['semail'];
$password = $_POST['spassword'];


$sql = "INSERT INTO alumni_signup (name, username, email, password) 
VALUES('$name', '$username', '$email', '$password')";
$result = mysqli_query($conn,$sql) or die(mysql_error());

 header("Location: relogin.php");

?>
