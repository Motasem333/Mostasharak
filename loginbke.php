<?php
 session_start();
$servername = "localhost";
$username = "root";
$pass = "";
$database = "mktest";
$conn = mysqli_connect($servername, $username, $pass,$database);

$email=$_SESSION['email'] = $_POST['Email'];
$password=$_SESSION['password'] = $_POST['password'];
$_SESSION['user_not_valid']='';

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}  
else{
    $check_user = "select * from user where email ='$email' AND password='$password'";
    $run_check_user = mysqli_query($conn,$check_user);
	$check_admin = "select * from admin where email ='$email' AND password='$password'";
	$run_check_admin = mysqli_query($conn,$check_admin);
	$rowa = mysqli_num_rows($run_check_admin);
    $rowu = mysqli_num_rows($run_check_user);
	  if ( $rowu == 1){
		  
		  header('location:main.php');
		  }
      else if ($rowa==1){
		 header('location:admin.php');
		
		 }else{
			 $_SESSION['user_not_valid'] = ' خطأ في البريد ألالكتروني او كلمه المرور !';
		  header('location:Home.php');
    	  
		 }
		
}

mysqli_close($conn);

?> 





