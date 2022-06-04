<?php 
session_start();
$servername = "localhost";
$username = "root";
$pass = "";
$database = "mktest";






$conn = mysqli_connect($servername, $username, $pass,$database);
$_SESSION['signupcorrect']= ' ';
$_SESSION['emailexist']= ' ';

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else {
	$date = date('d-m-20y');
    $fname = $_POST['fname'];
	$lname = $_POST['Lname'];
    $age = $_POST['age'];
	$phone_number =$_POST['phone_number'];
	$email = $_POST['email'];	
	$password = $_POST['password'];
	$weight = $_POST['weight'];
	$height = $_POST['height'];
	$gender = $_POST['gender'];
	//$illnesses = $_POST['illnesses'];
	$done = $_POST['done'];
	//check the email valid or not
	$check_email = "select * from user where Email = '$email'";
	$runs = mysqli_query($conn,$check_email);
    $founded = mysqli_num_rows($runs);
	if ( $founded == 1){
		$_SESSION['emailexist']= '...لا يمكن التسجيل! البريد الالكتروني مسجل بالفعل يرجى استخدام بريد الكتروني اخر';
		header('location:signup.php');
		
	}
	else{		
	    if (isset($done)){
			$ill =$_POST['illnesses'];
			
			if(empty($ill)){
					$sql = "INSERT INTO ill(ill,email) values('لا أعاني من اي مرض مزمن','$email')";
					$rsql = mysqli_query($conn,$sql);
			
				}
			else if (!empty($ill))
				{
					//if (isset($_POST['illnesses'])){
					foreach($ill as $i){
						  $sql = "INSERT INTO ill(ill,email) values('$i','$email')";
						  $rsql = mysqli_query($conn,$sql);
				  // }
				}
				}

        $insert_user = " INSERT INTO user(Email,phone_number,F_name,L_name,Wieght,Height,password,
		gender,age,role,date)
		values('$email',$phone_number,'$fname','$lname',$weight,$height,'$password','$gender',
		$age,'user','$date')";
		$insert_email_point = " INSERT INTO point(email,point) values ('$email',0)";
        $runinsert = mysqli_query($conn,$insert_user);
		$runinsert2 = mysqli_query($conn,$insert_email_point);

		$_SESSION['signupcorrect']= 'تم التسجيل بنجاح! اهلا بك في مستشارك' ;
	    header('location:signup.php');
		}

		}
}
	
?>