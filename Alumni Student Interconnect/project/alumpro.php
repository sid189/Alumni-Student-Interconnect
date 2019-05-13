<?php
include 'config.php';

$alumniname = $_POST['alumniname'];
$birthdate = $_POST['birthdate'];
$email_id = $_POST['email_id'];
$contact_number = $_POST['contact_number'];
$company_name = $_POST['company_name'];
$designation = $_POST['designation'];
$AOI = $_POST['AOI'];
$project_experience = $_POST['project_experience'];


$sql = "INSERT INTO alumni_profile (alumniname, birthdate, email_id, contact_number,company_name,designation,AOI,project_experience) 
VALUES('$alumniname, '$birthdate', '$email_id', '$contact_number','$company_name','$designation','$AOI','$project_experience')";
$result = mysqli_query($conn,$sql) or die(mysql_error());
if($result) { echo "Profile Updated!"; }
 header("Location: loggedin.html");

?>
