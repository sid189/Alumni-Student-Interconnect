
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
               <li style="float: right"><a href="main.html" class="button button1">Sign Up</li></a>
               <li style="float: right"><a href="index.html" class="button button1">Log In</li></a>
             </ul> 
         </div>
         <div class="row">
             <ul>
               <li style="float:center"><a href="main.html" class="button button2">Home</a></li>
               <li style="float:center"><a href="#students" class="button button2">Students</a></li>
               <li style="float:center"><a href="#" class="button button2">Alumni</a></li>
               <li style="float:center"><a href="about.html" class="button button2">About</a></li>
               <li style="float:center"><a href="#" class="button button2">Archives</a></li>
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
                  <form action="index.php"  method="POST">
                  <label for="name">Name</label>
                  <br/>
                  <input type="text" id="name">
                  <br/>
                  <label for="username">Username</label>
                  <br/>
                  <input type="text" id="username">
                  <br/>
                  <label for="email">Email Id</label>
                  <br/>
                  <input type="text" id="email">
                  <br/>
                  <label for="password">Password</label>
                  <br/>
                  <input type="password" id="password">
                  <br/>
                  <label for="confirmpassword">Confirm Password</label>
                  <br/>
                  <input type="password" id="password">
                  <br/>
                  <a href="login.php"><button type="submit">Sign Up</button></a>
                  <br/>
                  </form>
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


