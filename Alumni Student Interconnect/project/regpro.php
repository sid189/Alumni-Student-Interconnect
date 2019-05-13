<?php
include 'config.php';


$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$comment = $_POST['comment'];


$sql = "INSERT INTO proreg (name, email, contact,comment) 
VALUES('$name', '$email', '$contact','$comment')";
$result = mysqli_query($conn,$sql) or die(mysql_error());
if($result) { echo "You have registered for the project."; 
}
 header("Location: reproject.php");

?>
