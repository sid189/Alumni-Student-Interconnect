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
				 	<li><img src="logo.png"></li>
				 	<li><p style="font-size:27px" style="float:center">Alumni Students Interconnect, MITCOE</p></li>
				 	<li style="float: right"><div class="dropdown">
												<button onclick="myFunction()" class="dropbtn">SignUp</button>
												  <div id="myDropdown" class="dropdown-content">
												    <a href="studentspre.html">Student SignUp</a>
												    <a href="alumnipre.html">Alumni SignUp</a>
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
															}
												</script>
					</li>
				 </ul> 
			</div>
			<div class="row">
				 <ul>
				 	<li style="float:center"><a href="main.html" class="button">Home</a></li>
					<li style="float:center"><a href="studentspre.html" class="button">Students</a></li>
					<li style="float:center"><a href="alumnipre.html" class="button">Alumni</a></li>
					<li style="float:center"><a href="project.html" class="button">Projects</a></li>
					<li style="float:center"><a href="guidance.html" class="button">Guidance</a>
						<div class="dropdown-content">
      							<a href="#">Education</a>
							<ul id="side">
								<li>GRE</li>
								<li>IELTS</li>
								<li>UPSC</li>
								<li>GATE</li>
								<li>GMAT</li>
							</ul>							
      							<a href="#">Career</a>
							<ul id="side">
								<li>Placements</li>
								<li>Internships</li>
								<li>Entrepreneurships</li>
							</ul>
    						</div>
					</li>
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
						<h1 id="title" class="hidden"><span id="logo">Alumni Student Interconnect</span></h1>
					</div>
					<div class="login-box animated fadeInUp">
						<div class="box-header">
							<h2>Sign Up, It's Absolutely Free</h2>
						</div>
						<form action="stusignup.php"  method="POST">
						<label for="sname">Name</label>
						<br/>
						<input type="text" id="sname">
						<br/>
						<label for="susername">Username</label>
						<br/>
						<input type="text" id="susername">
						<br/>
						<label for="semail">Email Id</label>
						<br/>
						<input type="text" id="semail">
						<br/>
						<label for="spassword">Password</label>
						<br/>
						<input type="password" id="spassword">
						<br/>
						<label for="confirmpassword">Confirm Password</label>
						<br/>
						<input type="password" id="spassword">
						<br/>
						<button type="submit">Sign Up</button>
						<br/>
						</form>
					</div>
				</div>
			</div>
		</section>
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

<?php
if(isset($_POST['submit'])){
header("Location: stusignup.php");
}
?>