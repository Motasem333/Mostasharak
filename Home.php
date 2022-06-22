<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link href="css/Home.css" rel="stylesheet">
  
</head>
<body>
  
<section class="header" > 

  <div>
      <video class="earth" class="vid-bg" autoplay muted loop>
        <source src="img/Green1.mp4">
    </video>

  </div>
  <div>
  <?php
		if(isset($_SESSION['signupcorrect'])){ echo '<div style=" background-color:lightgreen; text-align: center; font-size:20px;">'.$_SESSION['signupcorrect'].'</div>';}
		?>
  </div>


<div class="container">
  <div class="row justify-content-end">

    <div class=" col-lg-8  mt-5">
              
      <form class="center-block" action="loginbke.php" formaction="main1.php" method="POST" role="form" >
	  <h2 class="text-center">تسجيل <span>دخول</span> الآن</h2>
      <h3 style='margin-left:5vh; color:red; font-size:1.12rem'>
	  <?php if(isset($_SESSION['user_not_valid']) ){echo $_SESSION['user_not_valid'];}?><h3>

      <input  class="form-control" type="text" name="Email" placeholder="Email" required>
      <input  class="form-control" type="password" name="password" placeholder="Password" required>
      <input  class="btn1 btn btn-block" type="submit"  id="Home" value="ابدأ الآن">
	  <a href="guest.html"  ><input  class="btn2 btn btn-block" value ="دخول كضيف"></a>

      <p class="pt-3 float-end ">لانشاء حساب  <a href="signup.php">اضغط هنا</a></p>

    </form>

   </div>

      
     <div class=" name col-lg-3 pt-5 ">
       <p class="float-end ">مرحبا بك في</p>
       <h2 class="animate__animated animate__fadeInLeft animate__slower	3s animate__delay-3s	3s">مستشارك</h2>
       
     </div>


     <div class = "aboutus col-lg-4 pt-5 ">
     
     <!--<div class = "rtlp col-lg-8 pt-4 ">-->
     
     <p class="float-end ">مستشارك هو موقع ويب حول إنشاء دليل لأولئك الذين يبحثون عن نمط حياة صحية من خلال تقديم مجموعة من الخدمات التي من شأنها أن تساعد في توفير الوقت والطاقة والمال من خلال توفير المعلومات الأساسية من المستخدم ، وهذا سيفتح الكثير من الخيارات للعملاء بما في ذلك ، الحمية ، والتمارين ، والوصفات ، والترقيات الصالة الرياضية
ومخازن البروتين بالإضافة إلى الكثير</P>
     </div>
     

     
  </div>
</div>
</section>


<!--start carousel-->
<div class="start-carousel">
<div id="carouselExampleControls" class="carousel slide m-auto " data-bs-ride="carousel">
  <div class="carousel-inner text-center">
    <div class="carousel-item active">
     <h2> كلما مارست المجهود النافع, يزيد ذلك من إصلاح الجسد</h2>
    </div>
    <div class="carousel-item">
      <h2> ممارسة الالعاب الرياضية تمنح مكاسب طائلة يظل عبيرها مدى الحياة</h2> 
    </div>
    <div class="carousel-item">
      <h2>من لديه الارادة والعزيمة هو من الديه القوة</h2> 
    </div>
  </div>
</div>
</div>
  <!--End carousel-->



<!--start services section -->

<div class="services">
  <h1>الخدمات</h1>
  <div class="curv-section">
  <div class="container">
    
    <div class="row">
      
      
        <div class=" col-lg-3 " >
          <div class="person wow animate__animated animate__bounceIn" data-wow-offset="450" data-wow-delay="0.5s">
          <i class="fa-solid fa-dumbbell fa-4x"></i>
          <div>
            <p class="pt-4">المساعده على لعب التمارين بالشكل الصحيح </p>
          </div>
        </div>
    </div>

    
      <div class="col-lg-3">
        <div class="person wow animate__animated animate__bounceIn" data-wow-offset="450" data-wow-delay="1s">
        <i class="fa-solid fa-store fa-4x"></i>

        <div>
          <p class="pt-4">متجر يضم العديد من الاشياء التي تخص الحياه الصحيه </p>
        </div>
      </div>
      </div>

      
      <div class="col-lg-3">
        <div class="person wow animate__animated animate__bounceIn" data-wow-offset="450" data-wow-delay="1.5s">
        <i class="fa-solid fa-calculator fa-4x"></i>
          <div>
            <p class="pt-4">قياس الكتله و السعرات الحراريه في الجسم</p>
            
          </div>
      </div>
      </div>
      

      
      <div class="col-lg-3">
        <div class="person wow animate__animated animate__bounceIn" data-wow-offset="450" data-wow-delay="2s">
        <i class="fa-solid fa-user fa-4x"></i>
          <div>
            <p class="pt-4">  توفير جدول غذائي للمستخدم حسب بياناته الشخصيه</p>
          </div>
      </div>
      </div> 
      </div>
    </div>
  </div>
</div>
</div>

<section class="curv-back">
  <!-- content here -->
  <div class="curve"></div>
</section>



<!--end services section -->

<!--start section our footer-->
<!-- Footer -->
<footer class="footer text-center text-lg-start bg-dark text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>تواصل معنا عبر المنصات الاجتماعية</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="https://www.facebook.com/" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://www.twitter.com" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="https://www.google.com" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="https://www.instagram.com" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://www.linkedin.com" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="https://www.github.com" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="footerabout">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4 ">
            <i class="fas fa-gem me-3"></i>مستشارك
          </h6>
          <p>هو موقع ويب حول إنشاء دليل لأولئك الذين يبحثون عن نمط حياة صحية من خلال تقديم مجموعة من الخدمات الصحية
          </p>
        </div>
        <!-- Grid column -->


        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          
          <p>
            <a href="guest.html" class="text-reset">صفحة الضيف</a>
          </p>
          <p>
            <a href="store.html" class="text-reset" >المتجر</a>
          </p>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            تواصل معنا
          </h6>
          
          <p>
            <i class="fas fa-envelope me-3"></i>
            contact@mostasharak.com
          </p>
          <p><i class="fas fa-phone me-3"> </i>9999 9999 9627+</p>
          
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
   Mostasharak © 2022 
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
<!--end section our footer-->


<!--start scroll-top-->

<div  id="scroll">
  <i class="fa-solid fa-circle-up fa-4x"></i>
</div>

<!--end scroll-top-->








<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<!--
<script>$("body").niceScroll({
  cursorcolor:"aquamarine",
  cursorwidth:"16px",
});</script>
-->
<script src="js/wow.min.js"></script>
<script>new WOW().init();</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

  <script src="js/home.js"></script> <!--scroll to top-->

  
</body>
</html>
