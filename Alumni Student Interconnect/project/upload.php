<?php
include 'config.php';
if(isset($_POST['submit']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_type = $_FILES['file']['type']; 
 $file_size = $_FILES['file']['size'];
$folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $sql="INSERT INTO upload(name,type,size) VALUES('$file','$file_type','$file_size')";
 $result=mysqli_query($conn, $sql); 
}
if(!$row = mysqli_fetch_assoc($result)){
        header("Location: nupfile.php");
        }else{
         header("Location: upfile.php");
     }
?>