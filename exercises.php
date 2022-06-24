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



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/hover.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">
        <link href="css/exercises.css" rel="stylesheet">
        <script src="js/exercises.js"></script>

      
    </head>

    <body>
	<nav class="navbar navbar-expand-lg bg-dark  sticky-top ">
      <div class="container-fluid">
       
       
       <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
           <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse " id="main_nav">
       <ul class="items navbar-nav ms-auto">
         <li class="nav-item active"> <a class="nav-link" href="main.php" style="color:white">الصفحة الرئيسية </a> </li>
		 <li class="nav-item active"> <a class="nav-link" href="store.html" style="color:white">المتجر </a> </li>
         <li class="nav-item active"> <a class="nav-link " href="logout.php" style="color:white;">خروج</a> </li>


       </ul>
      
       </div> <!-- navbar-collapse.// -->
       <img src="img/logoedit.png" style="height:10vh">
      </div> <!-- container-fluid.// -->
     </nav>
   

    
    
       <div class="exercises">
          <div class="container">
            <div class="imag">
                <img src="img/male.png">
                <button class="back hvr-radial-in" data-class="tab-one">back</button> 
                <button class="chest hvr-radial-in" data-class="tab-tow">chest</button>
                <button class=" shoulder hvr-radial-in" data-class="tab-three">shoulder</button> 
                <button class=" six-pack hvr-radial-in" data-class="tab-four">six-pack</button>
                <button class="biceps hvr-radial-in" data-class="tab-five">Biceps</button> 
                <button class="triceps hvr-radial-in" data-class="tab-six">Triceps</button> 
                <button class="anterior hvr-radial-in" data-class="tab-seven">Anterior thigh</button> 
                <button class="posterioe hvr-radial-in" data-class="tab-eight">Posterioe thigh</button>
                <button class="back-shoulder hvr-radial-in" data-class="nine">Back shoulder</button> 
                
                
              
            </div>
            <div class="row">
                
                    <div class="col-lg-10">
                        <div class="show-exercises">
                            <div class="tab-one">
                              <div style="display:block ;" class="tab col-lg-5">
                                <p >يعتبر تمرين المتوازي رائع للغاية في تضخيم وابراز عضلات الترايسبس وأكثر ما يميزه عن غيره هو أنه يمنحك كتلة عضلية ويساعد على تقوية أعصاب الذراعين. وللاستفادة من التمرين بشكل أكبر ، اجعل جسمك عمودياً قدر الإمكان ولا تميل إلى الأمام لأن ذلك سينقل الضغط إلى الصدر. يمكنك استخدام الأوزان عن طريق حزام الوسط أو باستخدام الدمبل بين الرجلين لزيادة المقاومة وتحقيق أكبر استفادة من التمرين.</p>
                                
                                <img class="col-lg-5" src="img/tri.gif">
                              </div>

                              <div style="display:block ;" class="tab col-lg-5">

                                <p>لماذا: يتيح لك  بار T الزجزاج  تحميل وزن أكبر مما كنت مع  بار مستقيم مع الحفاظ على شكل جيد ودون ممارسة الكثير من الضغط من خلال المرفقين والساعدين.</p>
                                <img  src="img/chest.gif" width="300px" height="300px">
                              </div>
                                
                            </div>
                            
                            

                            <div class="tab-tow ">
                                <p>لماذا: يتيح لك  بار T الزجزاج  تحميل وزن أكبر مما كنت مع  بار مستقيم مع الحفاظ على شكل جيد ودون ممارسة الكثير من الضغط من خلال المرفقين والساعدين.</p>
                                <img  src="img/chest.gif" width="300px" height="300px">
                                
                                
                            </div>

                            <div class="tab-three">
                              <p>لماذا: يتيح لك  بار T الزجزاج  تحميل وزن أكبر مما كنت مع  بار مستقيم مع الحفاظ على شكل جيد ودون ممارسة الكثير من الضغط من خلال المرفقين والساعدين.</p>
                              
                            </div>

                            <div class="tab-four">
                              <p>لماذا: يتيح لك  بار T الزجزاج  تحميل وزن أكبر مما كنت مع  بار مستقيم مع الحفاظ على شكل جيد ودون ممارسة الكثير من الضغط من خلال المرفقين والساعدين.</p>
                              <img  src="img/six.gif">
                            </div>

                            <div class="tab-five">
                                <p>inventore laborum laudantium a excepturi rem, quaerat non autem obcaecati natus. Ipsam iste quo sit sed nemo quidem expedita delectus.</p>
                            </div>

                            <div class="tab-six">
                                <p>inventore laborum laudantium a excepturi rem, quaerat non autem obcaecati natus. Ipsam iste quo sit sed nemo quidem expedita delectus.</p>
                            </div>

                            <div class="tab-seven">
                                <p>inventore laborum laudantium a excepturi rem, quaerat non autem obcaecati natus. Ipsam iste quo sit sed nemo quidem expedita delectus.</p>
                            </div>

                            
                            <div class="tab-eight">
                                <p>inventore laborum laudantium a excepturi rem, quaerat non autem obcaecati natus. Ipsam iste quo sit sed nemo quidem expedita delectus.</p>
                            </div>

                            <div class="tab-nine">
                              <p>inventore laborum laudantium a excepturi rem, quaerat non autem obcaecati natus. Ipsam iste quo sit sed nemo quidem expedita delectus.</p>
                          </div>
                        </div>
                    </div>
                  </div>
                    

            </div>
       </div>
        
    




      




</body>
</html>
<?php

}

else {
	header('location:Home.php');
}
?>