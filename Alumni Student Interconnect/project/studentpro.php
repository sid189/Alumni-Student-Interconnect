<?php
session_start();
include 'config.php';

$student_name = $_POST['student_name'];
$birthdate = $_POST['birthdate'];
$dept_name = $_POST['dept_name'];
$AOI = $_POST['AOI'];
$roll_number = $_POST['roll_number'];
$email_id = $_POST['email_id'];
$contact_number = $_POST['contact_number'];
$academic_aggregate = $_POST['academic_aggregate'];
$project_experience = $_POST['project_experience'];
$work_experience = $_POST['work_experience'];
$extra_curricular = $_POST['extra_curricular'];


$sqls = "INSERT INTO student_profile (student_name, birthdate, dept_name, AOI,roll_number,email_id,contact_number,academic_aggregate,project_experience,work_experience,extra_curricular) 
VALUES('$$student_name, '$birthdate', '$dept_name', '$AOI','$roll_number','$email_id','$contact_number','$academic_aggregate','$project_experience','$work_experience ','$extra_curricular')";
$result = mysqli_query($conn,$sqls) or die(mysql_error());

 header("Location: loggedin.php");

?>
