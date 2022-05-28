<?php
session_start();
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>مستشارك | تسجيل</title>
            
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">
    <link href="css/exercises.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="img/">
    <link rel="icon" type="img/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="img/png" sizes="16x16" href="img/favicon-16x16.png">
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
    <link rel="stylesheet" href="css/signup.css">
    <script src="js/exercises.js"></script>
  </head>
  


  <body>
    
    <div class="">
      <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
      <div class="container-fluid">
       
       
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
           <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse " id="main_nav">
       <ul class="items navbar-nav ms-auto">
         <li class="nav-item active"> <a class="nav-link" href="Home.php">الصفحة الرئيسية </a> </li>

       </ul>
      
       </div> <!-- navbar-collapse.// -->
       <img src="img/logoedit.png" style="height:10vh">
      </div> <!-- container-fluid.// -->
     </nav>
      
      
      <header>
        
        <div class="logo">
        <img src="img/logo.png" alt="">
        </div><h1>مستشارك</h1>
      </header>


      <div class="row">
        <div class="">
		<?php
		if(isset($_SESSION['signupcorrect'])){ echo $_SESSION['signupcorrect'];}
		?>
            <div class="signup-form">
			
                <form class="mt-5 border p-4  shadow" action="signupconn.php" method="POST">
                    <h2 class="mb-5" id="header">أبدء الرحلة مع مستشارك</h2>
                    <div class="row">
                      <h4 style="margin-bottom:2vh">المعلومات الشخصية</h4>


                        <div class="mb-3 col-md-4">
                            <label>الاسم الاول<span class="text-danger"></span></label>
                            <input required autocomplete="off" type="text" name="fname" class="form-control" placeholder="ادخل الاسم الاول">
                        </div>


                        <div class="mb-3 col-md-4">
                            <label>اسم العائلة<span class="text-danger"></span></label>
                            <input required autocomplete="off" type="text" name="Lname" class="form-control" placeholder="ادخل اسم العائلة">
                        </div>


                        <div class="mb-3 col-md-4">
                            <label>العمر<span class="text-danger"></span></label>
                            <input required autocomplete="off" type="number" name="age" class="form-control"  min="10" max="80"placeholder="ادخل العمر" >
                        </div>


                        <div class="mb-3 col-md-6">
                            <label>رقم الهاتف<span class="text-danger"></span></label>
                            <input required autocomplete="off" type="tel" name="phone_number" class="form-control" placeholder="ادخل رقم الهاتف" maxlength="10" >

                        </div>


                        <div class="mb-3  col-md-6">
                            <label>البريد الألكتروني<span class="text-danger"></span></label>
                            <input required autocomplete="off" type="email" name="email" class="form-control" placeholder="ادخل البريد الألكتروني" >
                        </div>


                        <div class="mb-3 col-md-6">
                            <label>كلمة المرور<span class="text-danger"></span></label>
                            <input required autocomplete="off" id="pass" type="password" name="password" class="form-control" placeholder="*************" >
                        </div>


                        <h4>المعلومات  الجسدية</h4>


                        <div class="mb-3 col-md-4">
                            <label>الطول<span class="text-danger"></span></label>
                            <input required autocomplete="off" type="number" name="height" class="form-control" placeholder="ادخل الطول بال ( سم)" >
                        </div>


                        <div class="mb-3 col-md-4">
                            <label>الوزن<span class="text-danger"></span></label>
                            <input required autocomplete="off" type="number" name="weight" class="form-control" placeholder="ادخل الوزن بال ( كغ )" >
                        </div>


                        <label>الجنس<span class=""></span></label>
                        <select required class="form-select" name = "gender" id="selectSex" style="width: 30%;" aria-label="Default select example">
                          <option selected disabled hidden></option>
                          <option  value="ذكر">ذكر</option>
                          <option  value="أنثى">أنثى</option>
                        </select>


                      <div  style=" bottom:-39%;
                      left: 28%;
                      position:absolute;
                      width:30%">
                        <label>امراض مزمنة<span class="" ></span></label>
                        <select required class="form-select " name="illnesses" aria-label="Default select example">

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
                        <button type="submit" input="submit"  class="btn btn-outline-success bg-white float-end btn-lg" name="done"  id="submit" style="margin-top:-3vh">سجل الان</button>
                    </div></div></form></div></div></div></div>

  <article style="  width:20%;
  height: auto;
  float: right;
  text-decoration: underline;
  background-color:white;
  color: #00970B;
  cursor:pointer;
  transition: all .1s;
  height: content;">
    <h3>
      <a href='Home.php'>الصفحة الرئيسية </a>
    </h3>
  </article>
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
  <section class="">
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
</body>


  <script type="text/javascript">
  var pass = document.getElementById("pass");
  pass.addEventListener("mouseover", function () {
    console.log("Ahmed");
    pass.type = "text";
  })
  pass.addEventListener("mouseleave", function () {
    console.log("Ahmed");
    pass.type = "password";
  })
  </script>


</html>