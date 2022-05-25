<!DOCTYPE html>

<!--
<?php
/*
$servername = "localhost";
$username = "root";
$pass = "";
$database = "mostashark";

$conn = mysqli_connect($servername, $username, $pass,$database);
if (!$conn) {
die("Connection failed) ". mysqli_connect_error());
}

else {
	$day = time();
	$time1= strtotime("18-05-2022");
    $d = $day - $time1;
    $c= round($d/(60*60*24));	
	$select_data_user = "select meal_name,meal_pic,calories,perfect_meal,meal_time,day from meal limit 3 offset $c";
	$run_select = mysqli_query($conn,$select_data_user);
	$run_num = mysqli_num_rows($run_select);

}
*/
?>
-->
<html lang="en" dir="ltr">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Main.css">
    <title>مستشارك | صفحة المستخدم  </title>
</head>
<body>
    <header>
        <div class="logo">
        <img src="img/logo.png" alt="">
        </div><h1>مستشارك</h1>
    </header>

      <div class="container">
<div class="alert alert-success" role="alert" style="margin-top:10vh; margin-bottom:2vh ;direction:rtl">
  <h4 class="alert-heading" style="direction:rtl; float:start">مرحبا بك !</h4>
  <!---
  <?php
  /*
   $email = $_POST['Email'];
   $select_name ="select F_name from user where Email = '$email'";
   $run_select1 = mysqli_query($conn,$select_name);
   while($result = mysqli_fetch_assoc($run_select1)){
   echo "<p>   <b>".$result['F_name']."</b>  تبين من خلال بياناتك التي ادخلتها ان هذا هو انسب برنامج غذائي لمدة 30 يوم القادمة </p>";}
 */ ?>-->
  <hr>
</div>
            <div class="Sec1" style="margin-top:2vh ;  height: 195vh; ">
			
                <div class="head">
                    <h1 style="margin-bottom:5vh">الجدول الغذائي المقترح</h1>
                </div>

                <div class="Shecdule">
                    <table class="demTable">
                        <thead>
                            <tr>
                                <th><br></th>
                                <th>مكونات الوجبة&nbsp;</th>
                                <th>السعرات الحراية</th>
                                <th>الوجبة المثالية</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!---
						<?php
                        /*
						if ( $run_num > 0){
						while($row = mysqli_fetch_assoc($run_select)){
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
                        */
						?> -->
                        </tbody>
                    </table>
					
					<td>&nbsp;<button class="btn btn-success bg-white text-success btn-lg" id="Done"
					style = "width:40vh ;margin : 3vh 50vh ;margin-bottom:0.5vh"
					
					
					>تم انجاز الاعمال اليومية</button></td>

                    <div class="Pr">
                        <h3>ألانجاز العام</h3>
                        <div class="progress">
                            <div class="progress-bar" id="progress-bar" role="progressbar" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="1500" style="width:999px">
                            </div>
                          </div>
                          <div class="Prpoint">
                              <br>
                              <h3> نقاطي = </h3>
                          </div>
                          <div class="points" id="points"></div>
                          <br><br>
                          <h5>-يتم الحصول على كود خصم بمقدار 25% عند انجاز 500 نقطة فأكثر</h5>
                          <h5>-يتم الحصول على هدية من اختيارك في حال الوصول الى 1000 نقطة في اقل من 50 يوم</h5>
                          <h5>-استخدم كود الهدية او الخصم في المتجر لتفعيلهما </h5>
                          <button class="btn btn-outline-success btn-lg bg-white" id="Get1">طلب الحصول على خصم</button>
                          <button class="btn btn-outline-success btn-lg bg-white" id="Get0" style="pointer-events:none">XXXXXX </button>
                          <img src="img/cancel.png"  id="cancel"alt="">
                          <br><br>
                          <button class="btn btn-outline-success btn-lg bg-white" id="Get2">طلب الحصول على هدية</button>
                          <button class="btn btn-outline-success btn-lg bg-white" id="Get02" style="pointer-events:none ;z">XXXXXX </button>
                          <img src="img/cancel.png"  id="cancel2" alt="">

                    </div>
                </div>
            </div>
        <div class="Sec2">
            <div class="row"  style=" width:100%;justify-content: space-around;">
                <!-- counter -->

                <div id="Icon_hover" class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;">
                  <img src="img\scale.png"  style="width:20vh"  alt="">
                    <span id="anim-number-pizza" class="counter-number"></span>
                    <span class="timer counter alt-font appear" data-to="980" data-speed="7000">24</span>
                    <p class="counter-title" style="font-size:2rem">الكتلة الخاصة بجسمك</p>
                </div>
                <!-- end counter -->
                <!-- counter -->
                <div id="Icon_hover" class="col-md-3 col-sm-6 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten animated" data-wow-duration="900ms" style="visibility: visible; animation-duration: 900ms; animation-name: fadeInUp;">
                  <img src="img\apple.png"   style="width:20vh;"  alt="">
                     <span class="timer counter alt-font appear" data-to="810" data-speed="7000">810</span>
                    <span class="counter-title" style="font-size:2rem">السعرات الحرارية اليومية</span>
                </div>
                <!-- end counter -->
                <!-- counter -->
                <div id="Icon_hover" class="col-md-3 col-sm-6 text-center counter-section wow fadeInUp animated" data-wow-duration="1200ms" style="visibility: visible; animation-duration: 1200ms; animation-name: fadeInUp;">
                  <img src="img\day.svg"  style="width:20vh"  alt="">
                     <span class="timer counter alt-font appear" data-to="100" data-speed="7000">100</span>
                    <span class="counter-title" style="font-size:2rem">   عدد الايام التي تم انجازها</span>
                </div>
                <!-- end counter -->
              </div>
              </div>



              <div class="Sec3">
                  <div class="Dailytopic1" >
                      <h1>معلومة غذائية </h1>
                      <p></p>
                  </div>
                  <div class="Dailytopic2">
                    <h1> معلومة رياضية</h1>
                    <p></p>
                </div>
              </div>




        </div>
        </div>
        
    
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs/dist/tf.min.js"> </script>

<script src="js/Main.js"></script>