<!DOCTYPE html>


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
else {
  $emaildate = $_SESSION['email']; 

	$day = "select date from user where email = '$emaildate'";

  $rday = mysqli_query($conn,$day);
  while ($r = mysqli_fetch_assoc($rday)){
    $te = $r['date'];
      $time1 = strtotime("$te");

  }
  $time= time();
    $d = $time - $time1;
    $c= round($d/(60*60*24));
	if ($c==3){
		$c = 0;
	}
	    $b = $c - ($c - 1);	

	$select_data_user = "select meal_name,meal_pic,calories,meal_time from meal limit 3 offset $b";
	$run_select = mysqli_query($conn,$select_data_user);
	$run_num = mysqli_num_rows($run_select);

}

?>

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
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400;700&display=swap" rel="stylesheet">
	<script src="js/Main.js"></script>
    <link rel="stylesheet" href="css/Main.css">
    <title>مستشارك | صفحة المستخدم  </title>
</head>
<body>
    <div class="">
      <?php include "navbar.php";?>
    <header>
	
        <div class="logo">
        <img src="img/logo.png" alt="">
        </div><h1>مستشارك</h1>
    </header>

      <div class="container">
<div class="alert alert-success" role="alert" style="margin-top:10vh; margin-bottom:2vh ;direction:rtl">
  <h4 class="alert-heading" style="direction:rtl; float:start">مرحبا بك !</h4>
  
  <?php
  
   $email = $_SESSION['email'];
   $select_name ="select F_name from user where Email = '$email'";
   $run_select1 = mysqli_query($conn,$select_name);
   while($result = mysqli_fetch_assoc($run_select1)){
   echo "<p>   <b>".$result['F_name']."</b>  تبين من خلال بياناتك التي ادخلتها ان هذا هو انسب برنامج غذائي لمدة 30 يوم القادمة </p>";}
   
 ?>
  <hr>
</div>
<?php
$selectill = "select ill from ill where email = '$email' ";
$runselect = mysqli_query($conn,$selectill);
$result1 = mysqli_fetch_assoc($runselect);
if ($result1['ill']=='السكري'){?>

<div class="start-carousel p-3">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner text-center">
  <div class='p-3'>
    
  </div>
    <div class="carousel-item active">
     <h2> التقليل من البقوليات والحبوب لاحتوائها على مواد نشوية عاليه تعمل على زياده نسبه السكر في الدم</h2>
    </div>
    <div class="carousel-item">
      <h2>تجنب الحلويات و السكريات والمعجنات (السكر ، عصير الفواكه ، المشروبات الغازيه ،الشوكلاته ) </h2> 
    </div>
    <div class="carousel-item">
      <h2>عند الشعور باعراض انخفاض السكر في الجسم تناول حبة حلوى ويفضل ٣ حبات تمر</h2> 
    </div>
  </div>
</div>
</div>

 <div class="Sec1" style="margin-top:2vh ;  height:200vh; ">
 
                <div class="head">
                    <h1 style="margin-bottom:5vh">الجدول الغذائي المقترح</h1>
                </div>
          <div class="Shecdule">
                    <table class="demTable">
                        <thead>
                            <tr>
                                <th>الفطور</th>
                                <th>الغذاء</th>
                                <th> العشاء</th>
								
                            </tr>
                        </thead>
                        <tbody>
						
						
                            <?php
                        $select22 = "select * from diabetes limit 1 offset $b";
						
	                    $runselect22 = mysqli_query($conn,$select22);
					    $numofrwosdia = mysqli_num_rows($runselect22);
					    if ( $numofrwosdia >0){
                        while($row = mysqli_fetch_assoc($runselect22)){
						  echo "<tr>";									
                                echo "<td>".$row['breakfast']."</b>"."</td>";
                                echo "<td>".$row['lunch']."</td>";
								echo "<td>".$row['dinner']."</td>";
								
                           echo "</tr>";
						}
					}
						else {
							 echo "<td> "."<b> فارغ </b>"."</td>";
							 echo "<td> "."<b> فارغ </b>"."</td>";
							 echo "<td> "."<b> فارغ </b>"."</td>";
						}
}
else if($result1['ill']=='النقرس'){?>
<div class="start-carousel p-3">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner text-center">
  <div class='p-3'>
    
  </div>
    <div class="carousel-item active">
     <h2>تناول ١٠-١٢ اكواب ماء يوميا</h2>
    </div>
    <div class="carousel-item">
      <h2>الابتعاد عن الدهنيات والاجبان الصفراء والشوكلاته والكاكاو</h2> 
    </div>
    <div class="carousel-item">
      <h2>الكركديه مفيد جدا في حالات النقرس</h2> 
    </div>
  </div>
   <div class="carousel-item">
      <h2>ان يخفض الوزن اذا كنت تشكو من السمنة والوزن الزائد</h2> 
    </div>
</div>
</div>
	
	 <div class="Sec1" style="margin-top:2vh ;  height:200vh; ">
 
                <div class="head">
                    <h1 style="margin-bottom:5vh">الجدول الغذائي المقترح</h1>
                </div>
          <div class="Shecdule">
                    <table class="demTable">
                        <thead>
                            <tr>
                                <th>الفطور</th>
                                <th>الغذاء</th>
                                <th> العشاء</th>
								
                            </tr>
                        </thead>
                        <tbody>
						
						
                            <?php
                        $select22 = "select * from gout limit 1 offset $b";
						
	                    $runselect22 = mysqli_query($conn,$select22);
					    $numofrwosdia = mysqli_num_rows($runselect22);
					    if ( $numofrwosdia >0){
                        while($row = mysqli_fetch_assoc($runselect22)){
						  echo "<tr>";									
                                echo "<td>".$row['breakfast']."</b>"."</td>";
                                echo "<td>".$row['lunch']."</td>";
								echo "<td>".$row['dinner']."</td>";
								
                           echo "</tr>";
						}
					}
						else {
							 echo "<td> "."<b> فارغ </b>"."</td>";
							 echo "<td> "."<b> فارغ </b>"."</td>";
							 echo "<td> "."<b> فارغ </b>"."</td>";
						}
	
}
else if($result1['ill']=='الضغط'){?>
  <div  class="start-carousel p-3">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner text-center">
    <div class='p-3'>
      
    </div>
      <div class="carousel-item active">
       <h2>شرب من ٨  ل١٢ كوب من الماء</h2>
      </div>
      <div class="carousel-item">
        <h2>يمكنك تناول الخيار والخس والمشروبات بعد صيام 5 ساعات من الفطار </h2> 
      </div>
      <div class="carousel-item">
        <h2>الصيام لمدة 5 ساعات بدون نوم بعد وجبة الافطار وشرب الماء فقط</h2> 
      </div>
    </div>
  
  </div>
  </div>
    
     <div class="Sec1" style="margin-top:2vh ;  height:200vh; ">
   
                  <div class="head">
                      <h1 style="margin-bottom:5vh">الجدول الغذائي المقترح</h1>
                  </div>
            <div class="Shecdule">
                      <table class="demTable">
                          <thead>
                              <tr>
                                  <th>الفطور</th>
                                  <th>الغذاء</th>
                                  <th> العشاء</th>
                  
                              </tr>
                          </thead>
                          <tbody>
              
              
                              <?php
                                  $select22 = "select * from prusure ";
                                  $runselect22 = mysqli_query($conn,$select22);
                                  $numofrwosdia = mysqli_num_rows($runselect22);
                if ( $numofrwosdia >0){
                          while($row = mysqli_fetch_assoc($runselect22)){
                echo "<tr>";									
                                  echo "<td>".$row['breakfast']."</b>"."</td>";
                                  echo "<td>".$row['lunch']."</td>";
                                  echo "<td>".$row['dinner']."</td>";
                echo "</tr>";
              }
            }
              else {
                 echo "<td> "."<b> فارغ </b>"."</td>";
                 echo "<td> "."<b> فارغ </b>"."</td>";
                 echo "<td> "."<b> فارغ </b>"."</td>";
              }
    
  }
else {
						?> 
                        </tbody>
                    </table>
	
	
	
	
<?php 
?>
           <div class="Sec1" style="margin-top:2vh ;  height:200vh; ">
			
                <div class="head">
                    <h1 style="margin-bottom:5vh">الجدول الغذائي المقترح</h1>
                </div>

                <div class="Shecdule">
                   <table class="demTable">
                        <thead>
                            <tr><th><br></th>
                                <th>مكونات الوجبة&nbsp;</th>
                                <th>السعرات الحراية</th>
                                <th>الوجبة المثالية</th>
                            </tr>
                        </thead>
                        <tbody>
                            
						<?php
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
                        
}
?> 
                        </tbody>
                    </table>
					<td>&nbsp;
          <form action="" method="POST">
          <button type="submit" name="roll" class="btn btn-success bg-white text-success btn-lg" id="Done"
					style = "width:40vh ;margin : 3vh 50vh ;margin-bottom:0.5vh"
          <?php
        isset($_SESSION["lock_timestamp_24h"]) &&
        date('m/d/Y H:i:s', time())  <= date('m/d/Y H:i:s', $_SESSION["lock_timestamp_24h"]) ? 'disabled' : ''
        ?>>تم انجاز الاعمال اليومية</button>
        </form>
      </td>
      <?php
if (isset($_POST['roll'])) {
  if( !isset($_SESSION["lock_timestamp_24h"]) ) {
      $updatepoint ="UPDATE point set point = point+24 where email = '$email'";
      $runinsertpoint = mysqli_query($conn,$updatepoint);
      $_SESSION["lock_timestamp_24h"] = strtotime("+ 1 day", (new DateTime())->getTimestamp());
   }
}?>
                    <div class="Pr">
                        <h3>ألانجاز العام</h3>
                        <div class="progress">
                            <div class="progress-bar" id="progress-bar" role="progressbar" aria-valuenow="1"
                            aria-valuemin="1" aria-valuemax="1500" style="width:<?php
                             $selectpoint = "SELECT point from point where email = '$email'";
                             $runselectpoint = mysqli_query($conn,$selectpoint);
                             while($result = mysqli_fetch_assoc($runselectpoint)){
                                $po=  $result['point'] ; echo $po;
                             }
                            ?>px">
                            </div>
                          </div>
                          <div class="Prpoint">
                              <br>
                              <h3> نقاطي = 
                              <?php 
                              $selectpoint = "SELECT point from point where email = '$email'";
                              $runselectpoint = mysqli_query($conn,$selectpoint);
                              while($result = mysqli_fetch_assoc($runselectpoint)){
                                echo $result['point'] ;
                              }
?>
<!------------------------------------------------------------------------------->
<script>
  $(document).ready(function() {

$('.counter').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 4000,
easing: 'swing',
step: function (now) {
    $(this).text(Math.ceil(now));
}
});
});  

    
      
        

            document.getElementById("Get1").addEventListener("click",code);
            function code()
            {
                document.getElementById("Get0").style.display = "initial";
                document.getElementById("cancel").style.display = "initial";
            if (<?=$po?> <500){
                document.getElementById("Get0").innerHTML = "لم يتم الحصول على عدد نقاط كافي"
                document.getElementById("Get0").style.marginRight = "3vh";   
            }
            if (<?=$po?> >=500){
                function getRndInteger(min, max) {
                return Math.floor(Math.random() * (max - min)) + min;
                }
                document.getElementById('Get0').innerHTML = <?php echo rand(111111,999999);?>;
                document.getElementById("Get0").style.marginRight = "3vh";
                document.getElementById("Get1").setAttribute('disabled', 'disabled')    
            }
            }
            

            document.getElementById("Get2").addEventListener("click",code2);
            function code2()
            {
                document.getElementById("Get02").style.display = "initial";
                document.getElementById("cancel2").style.display = "initial";
            if (<?=$po?> <1000){
                document.getElementById("Get02").innerHTML = "لم يتم الحصول على عدد نقاط كافي"
                document.getElementById("Get02").style.marginRight = "3vh";   
            }
            if (<?=$po?> >1000){
                function getRndInteger(min, max) {
                return Math.floor(Math.random() * (max - min)) + min;
                }
                document.getElementById('Get02').innerHTML = <?php echo rand(111111,999999);?>; 
                document.getElementById("Get02").style.marginRight = "3vh";
                document.getElementById("Get2").setAttribute('disabled', 'disabled')    
            }
            }

            document.getElementById("cancel2").addEventListener("click",cancel2);
            function cancel2()
            { 
                document.getElementById("Get02").style.display = "none";
                document.getElementById("cancel2").style.display = "none";
                document.getElementById("Get02").style.marginRight = "-40vh";
            }
            document.getElementById("cancel").addEventListener("click",cancel);
            function cancel()
            { 
                document.getElementById("Get0").style.display = "none";
                document.getElementById("cancel").style.display = "none";
                document.getElementById("Get0").style.marginRight = "-40vh";
            }})

</script>








<!------------------------------------------------------------------------------->
</h3>
                          </div>
                          <!--<div class="points" id="points" style= "display:none;"></div>-->
                          <br><br>
                          <h5>-يتم الحصول على كود خصم بمقدار 25% عند انجاز 500 نقطة فأكثر</h5>
                          <h5>-يتم الحصول على هدية من اختيارك في حال الوصول الى 1000 نقطة في اقل من 50 يوم</h5>
                          <h5>-استخدم كود الهدية او الخصم في المتجر لتفعيلهما </h5>
                          <button type="submit"class="btn btn-outline-success btn-lg bg-white" id="Get1">طلب الحصول على خصم</button>
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

                <div id="Icon_hover" class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;">
                  <img src="img\scale.png"  style="width:20vh"  alt="">
                    <span id="anim-number-pizza" class="counter-number"></span>
                    <span class="timer counter alt-font appear" data-to="980" data-speed="7000"><?php
					$selecth = "select Height,Wieght from user where email = '$email'";
					$runselecth = mysqli_query($conn,$selecth);
					$resulth = mysqli_fetch_assoc($runselecth);
					$h = $resulth['Height'];
					$w = $resulth['Wieght'];
					$calc = ($w/($h/100)**2);
					echo $calc;
					    ?></span>
                    <p class="counter-title" style="font-size:2rem">الكتلة الخاصة بجسمك</p>
                </div>
                <!-- end counter -->
                <!-- counter -->
                <div id="Icon_hover" class="col-md-3 col-sm-6 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten animated" data-wow-duration="900ms" style="visibility: visible; animation-duration: 900ms; animation-name: fadeInUp;">
                  <img src="img\apple.png"   style="width:20vh;"  alt="">
                     <span class="timer counter alt-font appear" data-to="810" data-speed="7000"><?php
					 $calories = 24 * 1.4 * $w;
					 echo $calories;?></span>
                    <span class="counter-title" style="font-size:2rem">السعرات الحرارية اليومية</span>
                </div>
                <!-- end counter -->
                <!-- counter -->
                <div id="Icon_hover" class="col-md-3 col-sm-6 text-center counter-section wow fadeInUp animated" data-wow-duration="1200ms" style="visibility: visible; animation-duration: 1200ms; animation-name: fadeInUp;">
                  <img src="img\day.svg"  style="width:20vh"  alt="">
                     <span class="timer counter alt-font appear" data-to="100" data-speed="7000"><?php echo $b;
					 ?></span>
                    <span class="counter-title" style="font-size:2rem">   عدد الايام التي تم انجازها</span>
                </div>
                <!-- end counter -->
              </div>
              </div>



              <div class="Sec3" style="margin-bottom:5vh">
                  <div class="Dailytopic1" >
                      <h1>اعلانات  </h1>
					  
                      <?php
					  $selectads = "select *  from ads limit 1 ";
					  $run_selectads= mysqli_query($conn,$selectads);
					  while($row = mysqli_fetch_array($run_selectads)){
						  echo "<P>".$row["ad_text"]."</P>";
						  
					  }
					  
					  
					  
					  ?>
					
                  </div>
              </div>
			  
			  
			  




        </div>
 <div>
 

<?php include "footer.php";?>
</html>

<?php

}
else{
	header('location:Home.php');
}
?>

