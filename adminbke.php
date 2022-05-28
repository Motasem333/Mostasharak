<?php
session_start();

$servername = "localhost";
$username = "root";
$pass = "";
$database = "mktest";
$conn = mysqli_connect($servername, $username, $pass,$database);
if (!$conn) {
die("Connection failed) ". mysqli_connect_error());
}

else {
	//show admin name 
	$email= $_SESSION['email'];
	$select_admin_name= "select admin_name from admin where  email = '$email'";
	$run_select_admin_name = mysqli_query($conn,$select_admin_name);
	while ($run_fetch = mysqli_fetch_assoc($run_select_admin_name)){
	     echo "hi ".$run_fetch['admin_name']."<br>";}
	}

?>

<html>
<head>
</head>
<body>
<FORM method="POST" action="">
 <div class="mb-3 col-md-6">
		<label>email  :<span class="text-danger"></span>
        <input type="email" name="email_txt" class="form-control" placeholder="search by email">
		</label>
        <input  class="btn1 btn btn-block" type="submit" name="search_by_email"  value="search user "><br>
	    <input  class="btn1 btn btn-block" type="submit" name="search_all_users"  value="users"><br>
	    <input  class="btn1 btn btn-block" type="submit" name="search_all_meals"  value="meals"><br>
	    <input  class="btn1 btn btn-block" type="submit" name="search_all_workout"  value="workouts"><br>
	    <input  class="btn1 btn btn-block" type="submit" name="search_all_products"  value="prodcuts"><br>
        <div>
            <label>امراض مزمنة<span class="" ></span></label>
                   <select  class="form-select " name="illnessesretrive" aria-label="Default select example">
				   <option selected disabled hidden></option>
                          <option value="السكري">السكري</option>
                          <option value="الضغط">الضغط</option>
                          <option value="النقرس">النقرس</option>
                          <option value="لا أعاني من اي مرض مزمن">لا أعاني من اي مرض مزمن </option>
                        </select> 
		<label>الجنس<span class=""></span></label>
                        <select  class="form-select" name = "genderdata" id="selectSex" style="width: 30%;" aria-label="Default select example">
                          <option selected disabled hidden></option>
                          <option  value="ذكر">ذكر</option>
                          <option  value="أنثى">أنثى</option>
                        </select>
		

        <div class="mb-3 col-md-4">
                            <label>العمر<span class="text-danger"></span></label>
                            <input  autocomplete="off" type="number" name="agedata" class="form-control"  min="10" max="80"placeholder="ادخل العمر" >
                        </div>
		<input type="submit" name="searchdata">
		<div>
<hr>
</div>
<?php
if(isset($_POST['searchdata'])){
	$illn = $_POST['illnessesretrive'];
	$gender = $_POST['genderdata'];
	$age = $_POST['agedata'];
	$selectformuser = "select * from user where illnesses='$illn' and gender='$gender' and age ='$age'";
	$run_selectformuser= mysqli_query($conn,$selectformuser);
	//$selectformuserage = "select * from user where illnesses='$illn' and gender='$gender' and age ='$age'";
	//$run_selectformuser= mysqli_query($conn,$selectformuser);
	$numofrowse = mysqli_num_rows($run_selectformuser);?>
	<div class="Shecdule">
        <table class="demTable">
            <thead>
                <tr>
                    <th>الاسم الاول</th>
                    <th>الاسم الثاني</th>
                    <th>البريد الألكتروني</th>						
					<th>العمر</th>
                    <th>الطول</th>
                    <th>الوزن</th>
					<th>الجنس</th>
					<th>كلمة المرور</th>
                    <th>الهاتف</th>
                    <th>المرض</th>
					<th>المنصب</th>
				</tr>
            </thead>
            <tbody>
	<?php
	if ($numofrowse > 0 ){
	while ($row = mysqli_fetch_assoc($run_selectformuser)){
		  		echo "<tr>";
                                    echo "<td>".$row["F_name"]."</td>";
									echo "<td>".$row["L_name"]."</td>";
									echo "<td>".$row["Email"]."</td>";
								    echo "<td>".$row["age"]."</td>";
									echo "<td>".$row["Height"]."</td>";
									echo "<td>".$row["Wieght"]."</td>";
									echo "<td>".$row["gender"]."</td>";
									echo "<td>".$row["password"]."</td>";
									echo "<td>".$row["phone_number"]."</td>";
									echo "<td>".$row["illnesses"]."</td>";
									echo "<td>".$row["role"]."</td>";
						echo "</tr>";
				
	
			}
}else
			{
	          	echo "<tr>";
                                    echo "<td>فارغ</td>";
									echo "<td>فارغ</td>";
									echo "<td>فارغ</td>";
									echo "<td>فارغ</td>";
									echo "<td>فارغ</td>";
									echo "<td>فارغ</td>";
									echo "<td>فارغ</td>";
									echo "<td>فارغ</td>";
									echo "<td>فارغ</td>";
									echo "<td>فارغ</td>";
									echo "<td>فارغ</td>";

									
						echo "</tr>";
				
	
	        }
	
	
}

?>
</tbody>

<div class="mb-3 col-md-4">
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                            <label>الاسم الاول<span class="text-danger"></span></label>
                            <input  autocomplete="off" type="text" name="fname_add" class="form-control" placeholder="ادخل الاسم الاول">
                        </div>


                        <div class="mb-3 col-md-4">
                            <label>اسم العائلة<span class="text-danger"></span></label>
                            <input  autocomplete="off" type="text" name="Lname_add" class="form-control" placeholder="ادخل اسم العائلة">
                        </div>


                        <div class="mb-3 col-md-4">
                            <label>العمر<span class="text-danger"></span></label>
                            <input  autocomplete="off" type="number" name="age_add" class="form-control"  min="10" max="80"placeholder="ادخل العمر" >
                        </div>


                        <div class="mb-3 col-md-6">
                            <label>رقم الهاتف<span class="text-danger"></span></label>
                            <input  autocomplete="off" type="tel" name="phone_number_add" class="form-control" placeholder="ادخل رقم الهاتف" maxlength="10" >

                        </div>


                        <div class="mb-3  col-md-6">
                            <label>البريد الألكتروني<span class="text-danger"></span></label>
                            <input  autocomplete="off" type="email" name="email_add" class="form-control" placeholder="ادخل البريد الألكتروني" >
                        </div>


                        <div class="mb-3 col-md-6">
                            <label>كلمة المرور<span class="text-danger"></span></label>
                            <input  autocomplete="off" id="pass" type="password" name="password_add" class="form-control" placeholder="*************" >
                        </div>


                        <h4>المعلومات  الجسدية</h4>


                        <div class="mb-3 col-md-4">
                            <label>الطول<span class="text-danger"></span></label>
                            <input  autocomplete="off" type="number" name="height_add" class="form-control" placeholder="ادخل الطول بال ( سم)" >
                        </div>


                        <div class="mb-3 col-md-4">
                            <label>الوزن<span class="text-danger"></span></label>
                            <input  autocomplete="off" type="number" name="weight_add" class="form-control" placeholder="ادخل الوزن بال ( كغ )" >
                        </div>


                        <label>الجنس<span class=""></span></label>
                        <select  class="form-select" name = "gender_add" id="selectSex" style="width: 30%;" aria-label="Default select example">
                          <option selected disabled hidden></option>
                          <option  value="ذكر">ذكر</option>
                          <option  value="أنثى">أنثى</option>
                        </select>


                    <div  style="buttom:8%;
                      left: 28%;
                      position:absolute;
                      width:30%">
                      
                        <label>امراض مزمنة<span class="" ></span></label>
                        <select 
						class="form-select " name="illnesses_add" aria-label="Default select example">
                          <option selected disabled hidden></option>
                          <option value="السكري">السكري</option>
                          <option value="الضغط">الضغط</option>
                          <option value="النقرس">النقرس</option>
                          <option value="لا أعاني من اي مرض مزمن">لا أعاني من اي مرض مزمن </option>
                        </select> 
                      </div>
                      </div>
                      <br>
                      <div class="col-md-12" id="end" style="border:none" >
                    </div></div></form></div></div></div></div>	
					<hr>
							<input type="submit" name="add_user" value="add user"><br>


<hr>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
<label> product id :
<input type="int" name="product_id"></label><br>
<label> product name :
<input type="text" name="product_name"></label><br>
<label> price :
<input type="int" name="price"></label><br>
<label> quantity :
<input type="text" name="quantity"></label><br>
<label> image :
<input type="file" name="imgproduct"></label><br>
<hr>
<input type="submit" name="add_product" value="add product">
</form>
<hr>
<?php
// ADD PRODUCT CODE

if (isset($_POST['add_product'])){
	$p_id = $_POST['product_id'];
	$p_name = $_POST['product_name'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$img = $_POST['imgproduct'];
	$insert_product = "insert into product values($p_id,'$p_name',$price,$quantity,$img)";
	$insert_run_product = mysqli_query($conn,$insert_product);
	echo "inserted";
	
}
?>
<?php
if (isset($_POST['add_user'])){
	$fn = $_POST['fname_add'];
    $ln = $_POST['Lname_add'];
    $phone =$_POST['phone_number_add'];
    $age = $_POST['age_add'];
    $gender =$_POST['gender_add'];
    $password =$_POST['password_add'];
    $ill = $_POST['illnesses_add'];
    $h = $_POST['height_add'];
    $w  = $_POST['weight_add'];
    $e = $_POST['email_add'];
	$check_email = "select * from user where Email = '$email'";
	$runs = mysqli_query($conn,$check_email);
    $founded = mysqli_num_rows($runs);
	if ( $founded == 1){
		echo "the mail already exist!!";
	}
	else{
    $add_user1 = " INSERT INTO user(Email,phone_number,F_name,L_name,Wieght,Height,password,
	   	gender,age,role,illnesses)
		values('$e',$phone,'$fn','$ln',$w,$h,'$password','$gender',$age,'user','$ill')";
	$runq = mysqli_query($conn,$add_user1);
	echo "inserted";
	}
}
?>
<?php
	  //search_all_email
	if (isset($_POST['search_by_email'])){
	$emails=$_POST['email_txt'];
	$search_by_email  = "select * from user where Email = '$emails'";
	$run_search_by_email = mysqli_query($conn,$search_by_email);
	$num_of_rowse = mysqli_num_rows($run_search_by_email);?>
	<div class="Shecdule">
        <table class="demTable">
            <thead>
                <tr>
                    <th>الاسم الاول</th>
                    <th>الاسم الثاني</th>
                    <th>البريد الألكتروني</th>						
					<th>العمر</th>
                    <th>الطول</th>
                    <th>الوزن</th>
					<th>الجنس</th>
					<th>كلمة المرور</th>
                    <th>الهاتف</th>
                    <th>المرض</th>
					<th>المنصب</th>
				</tr>
            </thead>
            <tbody>
			<?php
	        if ($num_of_rowse >0){
	        while($row = mysqli_fetch_assoc($run_search_by_email)){
			    		echo "<tr>";
                                    echo "<td>".$row["F_name"]."</td>";
									echo "<td>".$row["L_name"]."</td>";
									echo "<td>".$row["Email"]."</td>";
								    echo "<td>".$row["age"]."</td>";
									echo "<td>".$row["Height"]."</td>";
									echo "<td>".$row["Wieght"]."</td>";
									echo "<td>".$row["gender"]."</td>";
									echo "<td>".$row["password"]."</td>";
									echo "<td>".$row["phone_number"]."</td>";
									echo "<td>".$row["illnesses"]."</td>";
									echo "<td>".$row["role"]."</td>";
						echo "</tr>";
				
	
			}
			}else
			{
	          	echo "<tr>";
                                    echo "<td>فارغ</td>";
									echo "<td>فارغ</td>";
									echo "<td>فارغ</td>";
									echo "<td>فارغ</td>";
									echo "<td>فارغ</td>";
									echo "<td>فارغ</td>";
									echo "<td>فارغ</td>";
									echo "<td>فارغ</td>";
									echo "<td>فارغ</td>";
									echo "<td>فارغ</td>";
									echo "<td>فارغ</td>";

									
						echo "</tr>";
				
	
	        }	

// end search by email code
	}?>
</tbody>
</form>

<?php
// search all user code 
if (isset($_POST['search_all_users'])){
	$select_data_user = "select * from user";
	$run_select_data_user = mysqli_query($conn,$select_data_user);
	$num_of_rows = mysqli_num_rows($run_select_data_user);
	echo "Number Of users in mostasharak : " .$num_of_rows ;
	echo "<br>";
	$greater = "select * from user where age >= 18";
	$run_greater = mysqli_query($conn,$greater);
	$num_of_rowsage = mysqli_num_rows($run_greater);
	echo "Number Of users above than 18: " .$num_of_rowsage ;
	echo "<br>";
    $less = "select * from user where age <= 18";
	$run_less = mysqli_query($conn,$less);
	$num_of_rowsagel = mysqli_num_rows($run_less);
	echo "Number Of users less than 18: " .$num_of_rowsagel ;
	echo "<br>";
    $male = "select * from user where gender ='male' or gender='ذكر'";
	$run_male = mysqli_query($conn,$male);
	$num_of_rowsmale = mysqli_num_rows($run_male);
	echo "Number Of male users : " .$num_of_rowsmale ;
	echo "<br>";
    $female = "select * from user where gender ='female' or gender='أنثى'";
	$run_female = mysqli_query($conn,$female);
	$num_of_rowsfemale = mysqli_num_rows($run_female);
	echo "Number Of female users : " .$num_of_rowsfemale ;
	echo "<br>";
    $illnesses = "select * from user where illnesses='null' or illnesses='لا أعاني من اي مرض مزمن'";
	$run_illnesses = mysqli_query($conn,$illnesses);
	$num_of_noneillnesses = mysqli_num_rows($run_illnesses);
	echo "Number Of users  there is no illnesses  : " .$num_of_noneillnesses ;
	echo "<br>";
    $illnessesD = "select * from user where illnesses='السكري'";
	$run_illnessesD = mysqli_query($conn,$illnessesD);
	$num_of_illD = mysqli_num_rows($run_illnessesD);
	echo "Number Of users how has diabeties : " .$num_of_illD ;
	echo "<br>";
    $illnessesP = "select * from user where illnesses='الضغط'";
	$run_illnessesP = mysqli_query($conn,$illnessesP);
	$num_of_illP = mysqli_num_rows($run_illnessesP);
	echo "Number Of users how has PURSUERS : " .$num_of_illP ;
	echo "<br>";
    $illnessesN = "select * from user where illnesses='النقرس'";
	$run_illnessesN = mysqli_query($conn,$illnessesN);
	$num_of_illN = mysqli_num_rows($run_illnessesN);
	echo "Number Of users how has nucres : " .$num_of_illN ;
?>
	<div class="Shecdule">
	           <div class="head">
                    <h3 style="margin-bottom:5vh">Users  </h3>
                </div>
        <table class="demTable">
            <thead>
                <tr>
                    <th>الاسم الاول</th>
                    <th>الاسم الثاني</th>
                    <th>البريد الألكتروني</th>						
					<th>العمر</th>
                    <th>الطول</th>
                    <th>الوزن</th>
					<th>الجنس</th>
					<th>كلمة المرور</th>
                    <th>الهاتف</th>
                    <th>المرض</th>
					<th>المنصب</th>
				</tr>
            </thead>
            <tbody>
			<?php
             if($num_of_rows > 0){
                    while($row = mysqli_fetch_assoc($run_select_data_user)){
						echo "<tr>";
                                    echo "<td>".$row["F_name"]."</td>";
									echo "<td>".$row["L_name"]."</td>";
									echo "<td>".$row["Email"]."</td>";
								    echo "<td>".$row["age"]."</td>";
									echo "<td>".$row["Height"]."</td>";
									echo "<td>".$row["Wieght"]."</td>";
									echo "<td>".$row["gender"]."</td>";
									echo "<td>".$row["password"]."</td>";
									echo "<td>".$row["phone_number"]."</td>";
									echo "<td>".$row["illnesses"]."</td>";
									echo "<td>".$row["role"]."</td>";
						echo "</tr>";
				
		                }
	                    }
	                    else{
		          		  echo "there is no users!";
	                        }
				// end of code all user
}?>

<?php 
//desc maels
if (isset($_POST['search_all_meals'])){
	$meals="select * from meal";
	$run_select_meals = mysqli_query($conn,$meals);
	$run_num = mysqli_num_rows($run_select_meals);
?>
</div>
            <div class="Sec1" style="margin-top:2vh ">
			
                <div class="head">
                    <h3 style="margin-bottom:5vh">الجدول الغذائي </h3>
                </div>

                <div class="Shecdule">
                    <table class="demTable">
                        <thead>
                            <tr>
                                <th>موعد الوجبة</th>
                                <th>مكونات الوجبة&nbsp;</th>
                                <th>السعرات الحراية</th>
                                <th>الوجبة المثالية</th>
                            </tr>
                        </thead>
                        <tbody>
						<?php
						if ( $run_num > 0){
						while($row = mysqli_fetch_assoc($run_select_meals)){
						  echo "<tr>";									
                                echo "<td> "."<b>".$row['meal_time']."</b>"."</td>";
                                echo "<td>".$row['meal_name']."</td>";
								echo "<td>".$row['calories']."</td>";
                                echo "<td>".'<img src="data:image;base64,'.base64_encode($row['meal_pic']).'alt="image" style="width:100; height:100;"/>' ."</td>";
								
                           echo "</tr>";
						}
						} 
						else {
							 echo "<td> "."<b> فارغ </b>"."</td>";
							 echo "<td> "."<b> فارغ </b>"."</td>";
							 echo "<td> "."<b> فارغ </b>"."</td>";
							 echo "<td> "."<b> فارغ </b>"."</td>";	
						}
}?>
                        </tbody>
                    </table>
<?php

 //end code of meals

?>	

<?php
//code workout

if(isset($_POST['search_all_workout'])){
	$workouts = "select * from workout";
	$run_workout = mysqli_query($conn,$workouts);
	$num_rows = mysqli_num_rows($run_workout);
	

?>
   <div class="Sec1" style="margin-top:2vh ">
			
                <div class="head">
                    <h3 style="margin-bottom:5vh">workouts </h3>
                </div>

                <div class="Shecdule">
                    <table class="demTable">
                        <thead>
                            <tr>
                                <th> رقم التمرين |</th>
                                <th> اسم التمرين |</th>
                                <th> وقت التمرين |</th>
                            </tr>
                        </thead>
                        <tbody>
						<?php
						if (isset($num_rows)> 0){
						while($row = mysqli_fetch_assoc($run_workout)){
						  echo "<tr>";									
                                echo "<td> "."<b>".$row['workout_id']."</b>"."</td>";
                                echo "<td>".$row['workout_name']."</td>";
								echo "<td>".$row['workout_time']."</td>";
							
                           echo "</tr>";
						}
						} 
						else {
							 echo "<td> "."<b> فارغ </b>"."</td>";
							 echo "<td> "."<b> فارغ </b>"."</td>";
							 echo "<td> "."<b> فارغ </b>"."</td>";
						}

}

//end of workout
?>						
</tbody>



<?php
//search products
if (isset($_POST['$search_all_products'])){
	$product = "select * from product";
	$run_product = mysqli_query($conn,$product);
	$num_rowsp = mysqli_num_rows($run_product);
?>
<div class="Sec1" style="margin-top:2vh ">
			
                <div class="head">
                    <h3 style="margin-bottom:5vh">products </h3>
                </div>

                <div class="Shecdule">
                    <table class="demTable">
                        <thead>
                            <tr>
                                <th>رقم المنتج</th>
                                <th>اسم المنتج</th>
                                <th>السعر</th>
                                <th>الكميه</th>
								<th>صور</th>
                            </tr>
                        </thead>
                        <tbody>
						<?php
						if (isset($num_rowsp)>0){
						while($row = mysqli_fetch_assoc($run_product)){
						  echo "<tr>";									
                                echo "<td> "."<b>".$row['product_id']."</b>"."</td>";
                                echo "<td>".$row['product_name']."</td>";
								echo "<td>".$row['price']."</td>";
                                echo "<td>".$row['quantity']."</td>";
                                echo "<td>".'<img src="data:image;base64,'.base64_encode($row['pics']).'alt="image" style="width:100; height:100;"/>' ."td>";
							
                           echo "</tr>";
						}
						} 
						else {
							 echo "<td> "." فارغ "."</td>";
							 echo "<td> "."فارغ "."</td>";
							 echo "<td> "." فارغ "."</td>";
							 echo "<td> "." فارغ "."</td>";	
							 echo "<td> "." فارغ "."</td>";	
                        }
                       
						}
						

						?>
						</tbody>
		

</body>

</html>