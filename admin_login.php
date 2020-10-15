<?php

require './connect.php';



$username = $_POST['username'];
$password = $_POST['password'];



$sql = "SELECT `username`,`password` FROM doctor WHERE `username`='".$username."' and `password`='".$password."'limit 1";

$result = mysqli_query($connection,$sql);

if(empty($username) || empty($password))
  {
      
      echo "<script>alert('Fill credentials');
      window.location.href='./admin_login.html';</script>";
    }
    elseif (mysqli_num_rows($result)==1)
    {
      echo "<script>alert('everything is fine');</script>";
      //   header('rohit cha page -> doctor dashboard');
    }
    else
    {
    echo "
    <script>
    alert('Invalid credentials!!');
    window.location.href='./admin_login.html';
       
    </script>
    ";
    
  }
   
?>

