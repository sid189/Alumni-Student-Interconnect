<?php
   session_start();
   if(!isset($_SESSION['susername']))
   	header("Location: index.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>Alumni Student Interconnect</title>
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" type="text/css" href="daily_ui_day1_sign_in/css/animate.css">
		<link rel="stylesheet" type="text/css" href="daily_ui_day1_sign_in/css/style.css"> 
		
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	</head>
	<body>
		<header class="container">
			<div class="row">
				 <ul>
				 	<li><div class="logo"><a href="main.html"><img src="logo.png"></a></div></li>
				 	<li><p style="font-size:27px" style="float:center">Alumni Students Interconnect, MITCOE</p></li>
				 	<li style="float: right"><div class="dropdown">
					<button onclick="myFunction()" class="button dropbtn">Welcome <?php echo $_SESSION['susername']; ?></button>
					<div id="myDropdown" class="dropdown-content">
						<a href="profilestudent.html">Profile</a>
						<a href="logout.php">Logout</a>
					</div>
				
			</div>

			<script>
			/* When the user clicks on the button,
			toggle between hiding and showing the dropdown content */
			function myFunction() {
				document.getElementById("myDropdown").classList.toggle("show");
			}
			// Close the dropdown if the user clicks outside of it
			window.onclick = function(event) {
         		if (!event.target.matches('.dropbtn')) {
          		var dropdowns = document.getElementsByClassName("dropdown-content");
			var i;
			for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if (openDropdown.classList.contains('show')) {
			openDropdown.classList.remove('show');
			}
			}
			}
			</script>
			</li>
		 </ul> 
		</div>
			<div class="row">
				 <ul>
				 	<li style="float:center"><a href="main.html" class="button">Home</a></li>
					<li class="dropdown" style="float:center"><a href="studentspre.html" class="button dropbtn">Students</a>
					<div class="dropdown-content">
      							<a href="poststudent.php">Computer</a>
      							<a href="entc.php">ENTC</a>
      							<a href="mech.php">Mechanical</a>
							<a href="it.php">IT</a>
							<a href="civil.php">Civil</a>
							<a href="fe.php">FE</a>
    						</div>
    					</li>	
					<li style="float:center"><a href="alumnipre.html" class="button">Alumni</a></li>
					<li style="float:center"><a href="project.php" class="button">Projects</a></li>
					<li class="dropdown" style="float:center"><a href="guidance.php" class="button dropbtn">Guidance</a>
						<div class="dropdown-content">
      							<a href="education.html">Education</a>				
      							<a href="career.html">Career</a>
    						</div>
					</li>
					<li style="float:center"><a href="contact.html" class="button">Contact Us</a></li>
				</ul> 
			</div>
		</header>
				<section class="jumbotron">
			<div class="col-sm-6">
				<h4 align="center"></h4>
			</div>
			<div class="col-sm-6">
				<div class="container">
					<div class="top">
						
						<h1 id="title" class="hidden"><span id="logo">Welcome to Alumni Student Interconnect</span></h1>
						<br>
						<p style="text-align: Center; font-size: 24px">
						<b>Build, Maintain and Strengthen Alumni-Student Relationships</b>
						<br>
						For Interconnection, go to<a href="guidance.php" class="text"> Guidance section</a> or<a href="project.html" class="text"> Project section.</a>
						</p>
					</div>
					
				</div>
			</div>
		</section>
		<div class="footer">
			<p>Copyright 2016</p>
		</div>
	</body>
	<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>
</html>									
