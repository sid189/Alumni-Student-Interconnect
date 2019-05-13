<?php
session_start();
include 'config.php';

$sname = $_POST['sname'];
$susername = $_POST['susername'];
$semail = $_POST['semail'];
$spassword = $_POST['spassword'];


$sql = "INSERT INTO student_signup (sname, susername, semail, spassword) 
VALUES('$sname', '$susername', '$semail', '$spassword')";
$result = mysqli_query($conn,$sql) or die(mysql_error());

 header("Location: relogin.php");

?>
