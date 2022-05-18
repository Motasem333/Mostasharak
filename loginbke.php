<?php
 
$servername = "localhost";
$username = "root";
$pass = "";
$database = "mostashark";

$conn = mysqli_connect($servername, $username, $pass,$database);

$email = $_POST['Email'];
$password = $_POST['password'];
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
    $check_user = "select * from user where email ='$email' AND password='$password'";
    $run = mysqli_query($conn,$check_user);
    $rows = mysqli_num_rows($run);
	  if ( $rows == 1){
		  
           header('location:main.php');
		  }
     else {
    	 echo "inncorect username or password!";
		 }
}

mysqli_close($conn);

?> 





?>