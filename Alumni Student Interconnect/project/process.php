<?php
	session_start();
	include 'config.php';

    /*$username = $_POST['username'];
	$password = $_POST['password'];*/
	$susername = $_POST['susername'];
	$spassword = $_POST['spassword'];
	

	$sql = /*"SELECT * FROM alumni_signup WHERE username='$username' AND password='$password'  ";
	/*UNION */
	"SELECT * FROM student_signup WHERE susername='$susername' AND spassword='$spassword'";
	$result = mysqli_query($conn, $sql);
    
	if(!$row = mysqli_fetch_assoc($result)){
		echo "Your username or password is incorrect!";
		header("Location: reindex.php");
		}else{
		$_SESSION['susername'] = $row['susername'];	
		
 header("Location: loggedin.php");
}
?>