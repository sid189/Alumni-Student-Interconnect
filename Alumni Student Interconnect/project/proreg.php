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
					<button onclick="myFunction()" class="button dropbtn">SignUp</button>
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
						<h1 id="title" class="hidden"><span id="logo">Alumni Student Interconnect</span></h1>
					</div>
					<div class="login-box animated fadeInUp">
						<div class="box-header">
							<h2>Enroll for project</h2>
						</div>
						<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $contactErr = "";
$name = $email = $gender = $comment = $contact = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["contact"])) {
    $contact = "";
  } else {
    $contact = test_input($_POST["contact"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    //if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      //$websiteErr = "Invalid URL"; 
    //}
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form action="regpro.php"  method="POST">
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

 <label> Name:</label> 
 <input type="text" name="name" id="name" value="<?php echo $name;?>">
  <span class="error">* </span>
  <br><br>
  <label>E-mail:</label> 
  <input type="text" name="email" id="email" value="<?php echo $email;?>">
  <span class="error">* </span>
  <br><br>
  <label>Contact:</label> 
  <input type="text" name="contact" id="contact" value="<?php echo $contact;?>">
  <span class="error"></span>
  <br><br>
 <label> Comment: </label>
 <br><textarea name="comment" id="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <label>Gender:</label>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* </span>
  <br><br>
  <a href="regpro.php"><input type="submit" name="submit" value="Submit"> </a> 
</form>
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
