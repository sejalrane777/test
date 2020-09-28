<?php
    $name = $_POST['name'];
    $email = $_POST['email'];   
    $pass = $_POST['pass'];
    $num = $_POST['num'];
    $conn = new mysqli('localhost','root','','signup');
   if($conn->connect_error){
       die('connection failed : '.$conn->connect_error);
   }
   else{
      
       $sql="INSERT INTO `sign` ( `name`, `email`, `pass`, `num`) VALUES ( '$name', '$email', '$pass', '$num')";
       $result = mysqli_query($conn,$sql);
      

      
   }
?>
   
  