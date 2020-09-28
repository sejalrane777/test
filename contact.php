    
   
   <?php
    $name = $_POST['name'];
    $email = $_POST['email'];   
    $num = $_POST['num'];
    $cmnt = $_POST['cmnt'];
    $conn = new mysqli('localhost','root','','contact');
   if($conn->connect_error){
       die('connection failed : '.$conn->connect_error);
   }
   else{
      
       $sql="INSERT INTO `contact_us` ( `name`, `email`, `num`, `cmnt`) VALUES ( '$name', '$email', '$num', '$cmnt')";
       $result = mysqli_query($conn,$sql);
       header("location:contact.html");
       
   }
   
?>
  