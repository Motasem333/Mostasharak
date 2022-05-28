<!DOCTYPE html>

<?php
$servername = "localhost";
$username = "root";
$pass = "";
$database = "mktest";

$conn = mysqli_connect($servername, $username, $pass,$database);
if (!$conn) {
die("Connection failed) ". mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD']=='POST'){
	$user =filter_var($_POST['name'],FILTER_SANITIZE_STRING);
	$email = filter_var( $_POST['email'],FILTER_SANITIZE_EMAIL);
	$massage= filter_var($_POST['message'],FILTER_SANITIZE_STRING);
	$usererror = ' ';
	$messageError= ' ';
	
	
	$formserror = array();
	if(strlen($user)<10){
		$formserror[]= 'user must be more than 10 char!!';
		
	}
	if(strlen($massage)<10){
		$formserror[]= 'message is too short!';	
	}
	
	
	if(empty($formserror)){
		$massage = "insert into contact_form values('$user','$email','$massage')";
		$run_massage = mysqli_query($conn,$massage);
		unset($_POST);
		
	}







}
	


?>

<html>
<div class="container">
 <div class="errors">
 </div>
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <?php
	if (isset($formserror)){
		foreach($formserror as $error){
			echo $error ."<br>";
		}
		
		}
	
	
	
	
	?>
    <label for="fname">Name :  </label>
    <input type="text" id="fname" name="name" placeholder="Your name.."><br>
    <label for="lname">email :  </label>
    <input type="text" id="lname" name="email" placeholder="Your email.."><br>
    <label for="subject">message :</label>
    <textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea><br>

    <input type="submit" value="Submit">
  </form>
</div>












</html>
