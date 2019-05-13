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
				 	<li><div class="logo"><a href="main.html"><img src="logo.png"></a></div></li>	<a href="poststudent.php">Computer</a>
      							<a href="entc.php">ENTC</a>
      							<a href="mech.php">Mechanical</a>
							<a href="it.php">IT</a>
							<a href="civil.php">Civil</a>
							<a href="fe.php">FE</a>
				 	<li><p style="font-size:27px" style="float:center">Alumni Students Interconnect, MITCOE</p></li>
				 <?php
if(isset($_SESSION['username'])) { ?>
				 <button onclick="myFunction()" class="button dropbtn">Welcome <?php echo $_SESSION['susername']; ?></button>
					<div id="myDropdown" class="dropdown-content">
						<a href="profilestudent.html">Profile</a>
						<a href="logout.php">Logout</a>
					</div>
<?php } 
else{ ?>
				 	<li style="float: right"><div class="dropdown">
					<button onclick="myFunction()" class="button dropbtn">SignUp</button>
					<div id="myDropdown" class="dropdown-content">
						<a href="studentspre.html">Student SignUp</a>
						<a href="alumnipre.html">Alumni SignUp</a>
					</div>
				
			</div>
<?php }
?>
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
			<table>
			<form>
                <?php
                    $conn=mysqli_connect('localhost','root','','qwerty');
                    // Check connection
                    if (mysqli_connect_errno())
                    {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }
                    $result = mysqli_query($conn,"SELECT * FROM upload");?>
              
                   <table width='100%'>
                    <tr>
                        <th>Project</th>
                        <th>Format</th>
                        <th>Guide</th>
                        <th>View</th>
                        <th>Availability Status</th>
                       
                    </tr>           

                    <?php while($row = mysqli_fetch_array($result)) {?>

                        <tr>
						<td><?php echo $row['name']?></td>
						<td><?php echo $row['type']?></td>
						<td><?php echo $row['sname']?></td>
						<td><a href="uploads/<?php echo $row['name'] ?>" target="_blank">view file</a></td>
						<td><a href="proreg.php" style="color:red">Available</a></td>
					</tr>
                      
             
                    <?php }
                    mysqli_close($conn);
              ?>
          </form>
			</table>
			


				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<u><a href="contact.html" style="text-align:center; color: #D2691E">Have a new project? Want to add? Contact the admin now!</a></u>
				<br>
				<br>
				<br>
				</div>	

				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				
				<form action="upload.php" method="post" enctype="multipart/form-data">
   <div style="text-align:center"> Select file to upload:</div>
   <div style="text-align:center"> 
    <input type="file" name="file" id="file" ">
    <input type="submit" value="Upload File"  name="submit">
    </div>
</form>
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
