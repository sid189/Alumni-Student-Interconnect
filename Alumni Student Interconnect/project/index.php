<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = $_POST['susername'];
      $password = $_POST['spassword']; 
      
      $sql = "SELECT * FROM student_signup WHERE susername = '$username' and spassword = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      if($count == 1) {
        //session_register("username");
        
         $_SESSION['susername'] = $username;
         
         header("location: loggedin.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
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

   <div class="container">
      <div class="top">
         <h1 id="title" class="hidden"><span id="logo">Alumni Student Interconnect</span></h1>
      </div>
      <div class="login-box animated fadeInUp">
         <div class="box-header">
            <h2>Log In</h2>
         </div>
         <form action="process.php"  method="POST">
         <label for="susername">Username</label>
         <br/>
         <input type="text" id="susername" name="susername" class="required">
         <br/>
         <label for="spassword">Password</label>
         <br/>
         <input type="password" id="spassword" name="spassword" class="required">
         <br/>
         <a href="process.php"><button type="submit">Sign In</button></a>
         <br/>
         <a href="#"><p class="small">Forgot your password?</p></a>
         </form>
        <?php
       if (isset($_SESSION['username'])){
            echo $_SESSION['username'];
         }else{
            echo" You are not logged in!";
         }

         ?> 
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
