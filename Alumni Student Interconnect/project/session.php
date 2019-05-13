<?php
   include('config.php');
   session_start();
   
   $username = $_SESSION['username'];
   
   $ses_sql = mysqli_query($db,"select username from alumni where username = '$username' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['username'])){
      header("Location:index.php");
   }
?>