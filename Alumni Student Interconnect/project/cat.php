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
		<link rel="stylesheet" type="text/css" href="project.css">
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

		<div class="table">
			<table width="100%">
				<caption><label><div style='text-align:center' /><h3>Guidance for CAT</h3></label></caption>
					<form>
                <?php
                    $conn=mysqli_connect('localhost','root','','qwerty');
                    // Check connection
                    if (mysqli_connect_errno())
                    {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }
                    $sqlg="SELECT * FROM guidance_section WHERE education= 'cat'";
                    $result = mysqli_query($conn,$sqlg);?>
              
                   <table width='100%'>
                    <tr>
                        <th>Alumni Name</th>
                        <th>Email ID</th>
                        <th>Phone Number</th>
                       
                    </tr>           

                    <?php while($row = mysqli_fetch_array($result)) {?>

                        <tr>
						<td><?php echo $row['alumni_name']?></td>
						<td><?php echo $row['email_id']?></td>
						<td><?php echo $row['contact_number']?></td>
					</tr>
                      
             
                    <?php }
                    mysqli_close($conn);
              ?>
          </form>
			</table>
					
		</div>
	</body>
