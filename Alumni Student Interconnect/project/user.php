<?php
session_start(); // Right at the top of your script
?>

<li class='active' style='float:right;'>
  <?php 
  if($_SESSION['logged']==true)
    { 
      echo $_SESSION["username"];
      echo '<a href="main.html"><span>Logout</span></a></li>';
    }
  elseif($_SESSION['logged']==false)
    {
      echo '<a href="relogin.html"><span>Login/Register</span></a></li>';
    }
  ?>