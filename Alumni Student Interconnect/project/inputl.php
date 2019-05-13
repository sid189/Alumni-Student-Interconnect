  <?php include 'config.php'; ?>
<?php
	
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{

    $username=$_POST["username"];
    $password=$_POST["password"];
    if(empty($username) && empty($password))
      {  $error='Please enter username and password';
         $_SESSION['error']=$error;
          die(header('Location:index.php'));
      }  
		
    if(empty($username))
      {  $error='Please enter uname';
         $_SESSION['error']=$error;
          die(header('Location:index.php'));

      }  
      if(empty($password))
      {  $error='Please enter password';
         $_SESSION['error']=$error;
         $_SESSION['username']=$username;
          die(header('Location:index.php'));

      }  
      
		if(!filter_var($username,FILTER_VALIDATE_EMAIL))
		    {
             
                $sql="SELECT * FROM alumni WHERE username='$username' LIMIT  1";
                $result=mysqli_query($conn,$sql);
                $result=mysqli_num_rows($result);
               if($result==0)
               {
                       $error="INCORECT USERNAME";
                       $_SESSION['error']=$error;
                       $_SESSION['username']='';
                        die(header('Location:index.php'));

                }
               else{
               	      $sql="SELECT * FROM alumni WHERE username='$username' AND password='$password' LIMIT 1";
               	      $result=mysqli_query($conn,$sql);
                      $result=mysqli_num_rows($result);
                     
                      
                      if($result!=0){
                         $result=mysqli_query($conn,$sql);
                        $result=mysqli_fetch_assoc($result);
                        $_SESSION['uid']=$result['uid'];
                        if($result['field']=="none"){
                          die(header('Location:main.html'));
                          // echo $result['field'];
                        }
                        else{
                          $_SESSION['field']=$result['field'];
                          // echo $result['field'];
                            die(header('Location:loggedin.php'));
                        }
                        //echo $result;
                        //echo $result['uid'];
                      
                      
                       }
                      else{
                      	$error="INCORRECT PASSWORD";
                        $_SESSION['error']=$error;
                         $_SESSION['username']=$username;
                         die(header('Location:index.php'));
                      } 
                  }

               }
              
         else{
                
             
                $sql="SELECT * FROM alumni WHERE email='$username' LIMIT  1";
                $result=mysqli_query($conn,$sql);
                $result=mysqli_num_rows($result);
                
               if($result==0)
               {
                       $error="INCORECT USERNAME";
                       $_SESSION['error']=$error;
                        $_SESSION['username']='';
                        die(header('Location:index.php'));
                }
               else{
                      $sql="SELECT * FROM alumni WHERE email='$username' AND password='$password' LIMIT 1";
                      $result=mysqli_query($conn,$sql);
                      $result=mysqli_num_rows($result);
                      if($result!=0){
                         $result=mysqli_query($conn,$sql);
                        $result=mysqli_fetch_assoc($result);
                        $_SESSION['uid']=$result['uid'];
                        if($result['field']=="none"){
                          die(header('Location:main.html'));
                        }
                        else{
                          $_SESSION['field']=$result['field'];
                            die(header('Location:loggedin.php'));
                        }
                        //echo $result;
                        //echo $result['uid'];
                      
                      
                       }
                      else{
                        $error="INCORECT PASSWORD";
                        $_SESSION['error']=$error;
                         $_SESSION['username']=$username;
                         die(header('Location:index.php'));
                      } 
                  }

         }   
        
    }

?>