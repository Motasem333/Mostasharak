<?php
session_start();
if (!empty($_SESSION['email'])){
$servername = "localhost";
$username = "root";
$pass = "";
$database = "mktest";
$conn = mysqli_connect($servername, $username, $pass,$database);
if (!$conn) {
die("Connection failed) ". mysqli_connect_error());
}


?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> مستشارك | المسؤولين </title>
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="img/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="img/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/admin.js"></script>
  </head>

</head>
<body>
<div class="">
      <nav class="navbar navbar-expand-lg bg-dark  sticky-top ">
      <div class="container-fluid">
       
       
       <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
           <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse " id="main_nav">
       <ul class="items navbar-nav ms-auto">
         <li class="nav-item active"> <a class="nav-link " href="logout.php" style="color:white;">خروج</a> </li>


       </ul>
      
       </div> <!-- navbar-collapse.// -->
       <img src="img/logoedit.png" alt="mmm" style="height:10vh">
      </div> <!-- container-fluid.// -->
     </nav>
    <div class="container  mx-auto ">
        <header>
        <div class="logo">
        <img src="img/logo.png" alt="">
        </div>
        <h1>مستشارك</h1>
        </header>
		

        <div class="alert alert-success" role="alert" style="margin-top:10vh; margin-bottom:2vh ;direction:rtl">
            <h4 class="alert-heading" style="direction:rtl; float:start">: المسؤول المسجل حاليا  </h4>
				<?php
		
	//show admin name 
	        $email= $_SESSION['email'];
	        $select_admin_name= "select admin_name from admin where  email = '$email'";
	        $run_select_admin_name = mysqli_query($conn,$select_admin_name);
            while ($run_fetch = mysqli_fetch_assoc($run_select_admin_name)){
				echo $run_fetch['admin_name'];
			
				  }
	      
		?>
			
			
		
        </div>

            <div class="Sec1" style="margin-top:2vh ;  height: auto; padding-bottom: 10px; ">
                <div class="head">
				<form action="" method="POST">
                    <h1 style="margin-bottom:5vh"> خدمات المستخدمين</h1>
                    <h3 style="margin-bottom:5vh"> - بحث خاص </h3>
                    <div class="input-group"  style="width:40%; ">
                        <input type="email"  class="form-control rounded"name="email_txt" placeholder="البريد الالكتروني الخاص بالمستخدم" aria-label="Search" aria-describedby="search-addon" />
                        <input type="submit" name="search_by_email" class="btn btn-outline-success bg-white" value="بحث">
                      </div>
                </div>
</form>
               <!-- <div class="edit_section" style="" >
                    <div style="display:flex; justify-content:space-between ; height: 3%;;margin-right: 5vh;">
                        <label for=""  >الاسم  : </label>
                        <input type="text"  id="name" class="form-control rounded d-inline" style="width:30%" disabled value="احمد"/>
                        <label for="" >اسم العائلة : </label>
                        <input type="text" id="Lname"  class="form-control rounded d-inline" style="width:30%"  disabled  value="احمد"/>
                    </div>

                    <div style="display:flex; justify-content:space-between ; height: 3%; margin-top: 5vh;margin-right: 5vh;">
                        <label for=""  >العمر :  </label>
                        <input type="number" id="age"  class="form-control rounded d-inline" style="width:30%"  disabled   value="احمد"/>
                        <label for="" >رقم الهاتف :  </label>
                        <input type="tel"  id="tel" class="form-control rounded d-inline" style="width:30%"  disabled   value="احمد"/>
                    </div>  
                    
                    <div style="display:flex; justify-content:space-between ; height: 3%; margin-top: 5vh;margin-right: 3vh;">
                        <label for=""  >الوزن :   </label>
                        <input type="number" id="age"  class="form-control rounded d-inline" style="width:30%"  disabled   value="احمد"/>
                        <label for="" > الطول :   </label>
                        <input type="text"  id="tel" class="form-control rounded d-inline" style="width:30%"  disabled   value="احمد"/>
                    </div>  

                    <div style="display:flex; justify-content:space-between ; height: 3%; margin-top: 5vh;margin-right: 3vh;">
                        <label for=""  >الجنس :   </label>
                        <input type="" id="age"  class="form-control rounded d-inline" style="width:30%"  disabled   value="احمد"/>
                        <label for="" >المرض :   </label>
                        <input type="text"  id="tel" class="form-control rounded d-inline" style="width:30%"  disabled   value="احمد"/>
                    </div>  
            </div>-->
            <div class="head">
			
			<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                <h3 style="margin-bottom:5vh"> - بحث عام</h3>
				<button type="submit" name="search_all_users" style="margin:auto; width:22%; margin-top: 2vh; margin-bottom:5vh" class="btn btn-outline-success bg-white">جميع المستخدمين</button>
				<button type="submit" name="search_all_meals" style="margin:auto; width:22%; margin-top: 2vh;  margin-bottom:5vh" class="btn btn-outline-success bg-white">جميع الوجبات</button>
				<button type="submit" name="search_all_workout" style="margin:auto; width:22%; margin-top: 2vh;  margin-bottom:5vh" class="btn btn-outline-success bg-white"> جميع التمارين </button>
				<button type="submit" name="search_all_products" style="margin:auto; width:22%; margin-top: 2vh;  margin-bottom:5vh" class="btn btn-outline-success bg-white"> جميع المنتجات </button>

                <div class="input-group"  style="width:45%; margin: auto; ">
                    <select class="form-select" name="illnessesretrive" aria-label="Default select example ">
                        <option selected hidden disabled style="width:33%" >المرض</option>
                        <option value="السكري">السكري</option>
                        <option value="الضغط">الضغط</option>
                        <option value="النقرس">النقرس</option>
                        <option value="لا أعاني من اي مرض مزمن">سليم من الامراض</option>
                      </select>
                      <select class="form-select" name="genderdata" aria-label="Default select example" style="margin-right:5vh">
                        <option selected hidden disabled >الجنس</option>
                        <option value="ذكر">ذكر</option>
                        <option value="انثى">انثى</option>
                      </select>
                      <input type="number"  placeholder="العمر" name="agedata"class="form-control rounded d-inline" style="width:33%; margin-right:5vh"  />
                      <button type="submit" name="searchdata" style="margin:auto; width:45%; margin-top: 2vh" class="btn btn-outline-success bg-white">ابحث</button>

				  </div>
				 

				  </form>
                  </div>
                  <div class="Result">
				  <?php
//search products
                   if (isset($_POST['$search_all_products'])){
	                       $product = "select * from product";
	                       $run_product = mysqli_query($conn,$product);
                           $num_rowsp = mysqli_num_rows($run_product);
				   ?>
                    <div class="Sec1" style="margin-top:2vh ">
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
                               
				   }?>
						</tbody>
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
			
               <!-- <div class="head">
                    <h3 style="margin-bottom:5vh">workouts </h3>
                </div>-->

                <div class="Shecdule">
                    <table class="demTable">
                        <thead>
                            <tr>
                                <th> رقم التمرين </th>
                                <th> اسم التمرين </th>
                                <th> وقت التمرين </th>
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
// search all user code 
if (isset($_POST['search_all_users'])){
	$select_data_user = "select * from user";
	$run_select_data_user = mysqli_query($conn,$select_data_user);
	$num_of_rows = mysqli_num_rows($run_select_data_user);
	
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
if(isset($_POST['searchdata'])){
	$illn = $_POST['illnessesretrive'];
	$gender = $_POST['genderdata'];
	$age = $_POST['agedata'];
	$selectformuser = "select * from user where illnesses='$illn' and gender='$gender' and age ='$age'";
	$run_selectformuser= mysqli_query($conn,$selectformuser);
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
                    <table>


<?php
	  //search by email
	if (isset($_POST['search_by_email'])){
	$emails=$_POST['email_txt'];
	$search_by_email  = "select * from user where Email = '$emails'";
	$run_search_by_email = mysqli_query($conn,$search_by_email);
	$num_of_rowse = mysqli_num_rows($run_search_by_email);
	
	?>
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
	        }	

// end search by email code
	?>
                   </tbody>
                    </table>
                  </div>
                </div>
<div class="Sec2" style="margin-top : 10vh">
    

    <div class="Product">
        <h1>اضافة منتج </h1> 
        <form action="" method="post" enctype='multipart/form-data' >
                <label for=""  >اسم المنتج :  </label>
                <input type="text"  class="form-control rounded d-inline" style="width:90%"  name="product_name"/>
				<label for=""  >رقم المنتج :  </label>
                <input type="text"  class="form-control rounded d-inline" style="width:90%"  name="product_id"/>
                <label for="" >سعر المنتج : </label>
                <input type="number"  class="form-control rounded d-inline" style="width:90%"    name="price"/>
				<label for="" > الكميه : </label>
                <input type="number"  class="form-control rounded d-inline" style="width:90%"    name="quantity"/>

                <select class="form-select" aria-label="Default select example" style="width:90% ; margin-top: 5vh;margin-right: 3vh;">
                    <option selected hidden disabled>نوع المنتج</option>
                    <option value="ملابس">ملابس</option>
                    <option value="اثقال">اثقال</option>
                    <option value="بروتين">بروتين</option>
                  </select>

                  <button type="submit" name="add_product" style="margin-right:10vh; width:45%; margin-top: 2vh" class="btn btn-success">اضافة</button>
            </form>
    </div>
<?php
// ADD PRODUCT CODE

if (isset($_POST['add_product'])){
	$p_id = $_POST['product_id'];
	$p_name = $_POST['product_name'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
   // $filename = $_FILES['imgproduct']['name'];
	//$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	//$extensions_arr = array("jpg","jpeg","png","gif");
    //if( in_array($imageFileType,$extensions_arr) ){
    //if(move_uploaded_file($_FILES["imgproduct"]["tmp_name"],'upload/'.$filename)){
	
	$insert_product = "insert into product values($p_id,'$p_name',$price,$quantity)";
	//$i//nsert_run_product = mysqli_query($conn,$insert_product);
	//echo "inserted";
	//}}
}
?>
	
    <div class="Meal">
	<form  action="" method="POST">
        <h1>اضافة وجبة غذائية</h1>
		
        <div class="form">
		    <label for=""  > وقت الوجبة : </label>
            <input type="text" name="mealtime" class="form-control rounded d-inline" style="width:90%"  value=""/>
            <br>
            <label for=""  > المكونات : </label>
            <input type="text" name="mealname" class="form-control rounded d-inline" style="width:90%"  value=""/>
            <br>
            <label for="" >عدد السعرات الحرارية :  </label>
            <input type="text"  name="calories"class="form-control rounded d-inline" style="width:90%"    value=""/>



              <button type="submit" name="add" style="margin:auto; width:45%; margin-top: 2vh" class="btn btn-success">اضافة</button>
        </div>
		</form>
    </div>
<?php
if(isset($_POST['add'])){
	$mt = $_POST['mealtime'];
	$mn= $_POST['mealname'];
	$c = $_POST['calories'];
	//$mealpic=$_POST[''];
//	$insertintomeal  = "insert into meal(meal_id,meal_time,meal_name,calories,Email) values(7,'$mt','$mn','c','nadeem@yahoo.com')";
	//$run_insertontomeaal = mysqli_query($conn,$insertintomeal);
}





?>
    <div class="Workout">
	<form action="" method="POST">
        <h1>اضافة تمرين</h1>
        <div class="form">
		<label for=""  >رقم التمرين :  </label>
            <input type="number" name="workoutid"  class="form-control rounded d-inline" style="width:90%"  value=""/>
            <br>
            <label for=""  >اسم التمرين :  </label>
            <input type="text"  name="workoutname"class="form-control rounded d-inline" style="width:90%"  value=""/>
            <br>
            <label for="" > وقت التمرين : </label>
            <input type="text" name="workouttime" class="form-control rounded d-inline" style="width:90%"    value=""/>
             <button type="submit" name="insertworkout" style="margin:auto; width:45%; margin-top: 2vh" class="btn btn-success">اضافة</button>
        </form></div>
    </div>
<?php
if (isset($_POST['insertworkout'])){
	$wid = $_POST['workoutid'];
	$wname=$_POST['workoutname'];
	$wtime =$_POST['workouttime'];
	$insertworkout = "insert into workout(workout_id,workout_name,workout_time)values($wid,'$wname','$wtime')";
	$run_insertwork = mysqli_query($conn,$insertworkout);
	
}



?>

</div>
<br>
<br>
<br>

<br>
<div>
<div>
<div class="Sec3">

    <div class="head">
	<form action="" method="POST" enctype="multipart/form-data">
        <h1 style="margin-bottom:5vh"> نشر أعلان</h1>

        <label for=""  >موضوع الاعلان :   </label>
        <input type="text"  class="form-control rounded d-inline" style="width:50%" name="ad_subject" value=""/>
        <br><br><br>
        <label for="" style="font-size:1.5rem" >نص الاعلان :   </label>
        <textarea class="form-control" aria-label="With textarea" name="ad_text" style="height:15vh"></textarea>
        <button type="submit" name="submitads" style="margin-right: 40vh; width:45%; margin-top: 2vh" class="btn btn-outline-success bg-white">نشر الاعلان </button>
</form>
</div>
   
	  
<?php

if (isset($_POST['submitads'])){
	$adsub = $_POST['ad_subject'];
	$adtxt = $_POST['ad_text'];
/*$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	$insertad = "insert into ads values('$adsub','$adtxt')";
    $insertttt ="in)";
	
*/

?>

</div>
</div>
</div>
<div class="Sec3" style="height:80vh">
<h1 style="color:white; margin:auto ;margin-top:5vh ">احصائيات المسجلين</h1>
<div style=" display:block; margin-left:50vh;margin-top:25vh ; color : white ; font-size:1.15rem ; line-height:200% ;">

<?php
if (isset($_POST['test'])){
$select_data_user = "select * from user";
	$run_select_data_user = mysqli_query($conn,$select_data_user);
	$num_of_rows = mysqli_num_rows($run_select_data_user);
	echo "عدد المسجلين  : " .$num_of_rows ;
	echo "<br>";
	$greater = "select * from user where age >= 18";
	$run_greater = mysqli_query($conn,$greater);
	$num_of_rowsage = mysqli_num_rows($run_greater);
	echo "عدد المستخدمين اكبر من 18 عام : " .$num_of_rowsage ;
    echo "<br>";

    $less = "select * from user where age < 18";
	$run_less = mysqli_query($conn,$less);
	$num_of_rowsagel = mysqli_num_rows($run_less);
	echo "عدد المستخدمين اقل من 18 عام :  " .$num_of_rowsagel ;
	echo "<br>";
    $male = "select * from user where gender ='male' or gender='ذكر'";
	$run_male = mysqli_query($conn,$male);
	$num_of_rowsmale = mysqli_num_rows($run_male);
	echo "عدد المستخدمين الذكور" .$num_of_rowsmale ;
	echo "<br>";
    $female = "select * from user where gender ='female' or gender='أنثى'";
	$run_female = mysqli_query($conn,$female);
	$num_of_rowsfemale = mysqli_num_rows($run_female);
	echo "عدد المستخدمين الاناث : " .$num_of_rowsfemale ;
	echo "<br>";
    $illnesses = "select * from user where illnesses='null' or illnesses='لا أعاني من اي مرض مزمن'";
	$run_illnesses = mysqli_query($conn,$illnesses);
	$num_of_noneillnesses = mysqli_num_rows($run_illnesses);
	echo " عدد المستخدمين  الذين لا يعانون من امراض : " .$num_of_noneillnesses ;
	echo "<br>";
    $illnessesD = "select * from user where illnesses='السكري'";
	$run_illnessesD = mysqli_query($conn,$illnessesD);
	$num_of_illD = mysqli_num_rows($run_illnessesD);
	echo "عدد المستخدمين الذين يعانون من السكري :  " .$num_of_illD ;
	echo "<br>";
    $illnessesP = "select * from user where illnesses='الضغط'";
	$run_illnessesP = mysqli_query($conn,$illnessesP);
	$num_of_illP = mysqli_num_rows($run_illnessesP);
	echo "عدد المستخدمين الذين يعانون من الضغط : " .$num_of_illP;
	echo "<br>";
    $illnessesN = "select * from user where illnesses='النقرس'";
	$run_illnessesN = mysqli_query($conn,$illnessesN);
	$num_of_illN = mysqli_num_rows($run_illnessesN);
	echo " عدد المستخدمين الذين يعانون من النقرس : " .$num_of_illN ;
}
	?>
</div>
</div>
</body>
</html>
<?php

}
}
else {
	header('location:Home.php');
}
?>