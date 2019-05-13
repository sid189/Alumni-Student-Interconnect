
<?php
   session_start();
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

	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">Alumni Student Interconnect</span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Complete Your Profile</h2>
			</div>
			<form action="studentpro.php"  method="POST">
			<label for="student_name">Name</label>
			<br/>
			<input type="text" id="student_name" name="student_name">
			<br/>
			<label for="birthdate">Birthdate</label>
			<br/>
			<input type="text" id="birthdate" name="birthdate">
			<br/>
			<label for="dept_name">Department-Name</label>
			<br/>
			<input type="text" id="dept_name" name="dept_name">
			<br/>
			<label for="AOI">Area of Interest</label>
			<br/>
			<input type="text" id="AOI" name="AOI">
			<br/>
			<label for="roll_number">Roll Number</label>
			<br/>
			<input type="text" id="roll_number" name="roll_number">
			<br/>
			<label for="email_id">Email-Id</label>
			<br/>
			<input type="text" id="email_id" name="email_id">
			<br/>
			<label for="contact_number">Contact Number</label>
			<br/>
			<input type="text" id="contact_number" name="contact_number">
			<br/>
			<label for="academic_aggregate">Academic Aggregate</label>
			<br/>
			<input type="text" id="academic_aggregate" name="academic_aggregate">
			<br/>
			<label for="project_experience">Project Experience</label>
			<br/>
			<input type="text" id="project_experience" name="project_experience">
			<br/>
			<label for="work_experience">Work Experience</label>
			<br/>
			<input type="text" id="work_experience" name="work_experience">
			<br/>
			<label for="extra_currcular">Extra Curricular</label>
			<br/>
			<input type="text" id="extra_currcular" name="extra_curricular">
			<br>
			<button type="update">Update</button>
			<br/>
			</form>
		</div>
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
