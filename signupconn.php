<?php 
session_start();
$servername = "localhost";
$username = "root";
$pass = "";
$database = "mktest";






$conn = mysqli_connect($servername, $username, $pass,$database);
$_SESSION['signupcorrect']= ' ';

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else {
    $fname = $_POST['fname'];
	$lname = $_POST['Lname'];
    $age = $_POST['age'];
	$phone_number =$_POST['phone_number'];
	$email = $_POST['email'];	
	$password = $_POST['password'];
	$weight = $_POST['weight'];
	$height = $_POST['height'];
	$gender = $_POST['gender'];
	$illnesses = $_POST['illnesses'];
	$done = $_POST['done'];
	//check the email valid or not
	$check_email = "select * from user where Email = '$email'";
	$runs = mysqli_query($conn,$check_email);
    $founded = mysqli_num_rows($runs);
	if ( $founded == 1){
		echo "the mail already exist!!";
		
		
	}
	else{		
	    if (isset($done)){

        $insert_user = " INSERT INTO user(Email,phone_number,F_name,L_name,Wieght,Height,password,
		gender,age,role,illnesses)
		values('$email',$phone_number,'$fname','$lname',$weight,$height,'$password','$gender',
		$age,'user','$illnesses')";
        $runinsert = mysqli_query($conn,$insert_user);
		$_SESSION['signupcorrect']= 'تم التسجيل بنجاح! اهلا بك في مستشارك' ;
	    header('location:signup.php');
		}

		}
}
	
?>