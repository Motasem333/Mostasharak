<!DOCTYPE HTML>

<?php 

$servername = "localhost";
$username = "root";
$pass = "";
$database = "mostasharak";

$conn = mysqli_connect($servername, $username, $pass,$database);
if (!$conn) {
die("Connection failed) ". mysqli_connect_error());
}

else {
	$day = time();
	$time1= strtotime("18-05-2022");
    $d = $day - $time1;
    $c= round($d/(60*60*24))+3;	
	$select_data_user = "select meal_name,calories,perfect_meal,meal_time,day from meal ";
    $run_select = mysqli_query($conn,$select_data_user);
	$run_num = mysqli_num_rows($run_select);

}

?>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
		<script src = "./js/Main.js"/>

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
            <div class="Sec1">
                <div class="head">
                    <h1>جدول الطعام المقترح</h1>
                    <p>من خلال تحليل بياناتك تم اقتراح احد جداول الطعام الصحية</p>
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
                        <?php
						if ( $run_num > 0){
						while($row = mysqli_fetch_assoc($run_select)){
						  echo "<tr>";									
                                echo "<td> "."<b>".$row['meal_time']."</b>"."</td>";
                                echo "<td>".$row['meal_name']."</td>";
								echo "<td>".$row['calories']."</td>";
                                echo "<td>".'<img src="data:image;base64,'.base64_encode($row['meal_pic']).'alt="image" style="width:100; height:100;"/>' ."</td>";
								echo "<td>".$row['perfect_meal']."</td>";
								
                           echo "</tr>";
							
							
							
						}
						} 
						else {
							 echo "<td> "."<b> فارغ </b>"."</td>";
							 echo "<td> "."<b> فارغ </b>"."</td>";
							 echo "<td> "."<b> فارغ </b>"."</td>";
							 echo "<td> "."<b> فارغ </b>"."</td>";
            
							
						}
						
						?>
						</tbody>						
                       </table>
					  <div > <button class="btn btn-success bg-white text-success btn-lg " style="width:50vh ; Margin-right:50vh; Margin-top:7vh " id="Done">الانتهاء من الوجبات اليومية</button> </div>
                    <div class="Pr">
                        <h3>ألانجاز العام</h3>
                        <div class="progress">
                            <div class="progress-bar" id="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="1500" style="width:499px">
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
                          <button class="btn btn-outline-success btn-lg bg-white" id="Get1">طلب الحصول على كود</button>
                          <button class="btn btn-outline-success btn-lg bg-white" id="Get0">XXXXXX </button>
                          <img src="img/cancel.png"  id="cancel"alt="">
                          <br><br>
                          <button class="btn btn-outline-success btn-lg bg-white" id="Get2">طلب الحصول على هدية</button>
                        </div>
                 </div>
            </div>
        </div>
    
</body>
</html>