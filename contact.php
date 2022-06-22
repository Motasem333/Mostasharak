
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
	if(strlen($user)<0){
		$formserror[]= 'user must be more than 10 char!!';
		
	}
	if(strlen($massage)<0){
		$formserror[]= 'message is too short!';	
	}
	
	
	if(empty($formserror)){
		if(isset($_POST['send'])){
		$_SESSION['sendcontact']= 'تم تسجيل ردك شكرا ! ' ;
		$massage = "insert into contact_form values('$user','$email','$massage')";
		$run_massage = mysqli_query($conn,$massage);		
	}}







}
	


?>


<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مستشارك | توصل معنا </title>
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
    <link rel="stylesheet" href="css/contact.css">

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
           <li class="nav-item active"> <a class="nav-link" href="main.php">الصفحة الرئيسية </a> </li>
           <li class="nav-item active"> <a class="nav-link" href="logout.php">خروج  </a> </li>

         </ul>
        
         </div> <!-- navbar-collapse.// -->
         <img src="img/A.png" style="height:10vh">
        </div> <!-- container-fluid.// -->
       </nav>
        
        
        <header>
          
          <div class="logo">
          <img src="img/logo.png" alt="">
          </div><h1>مستشارك</h1>
        </header>
		<div style="center;"><?php if(isset($_SESSION['sendcontact'])){echo $_SESSION['sendcontact']; }?></div>
<div class="container">
        <div class="Sec1">
            <div class="head">
                <h1>تواصل معنا للأجابة عن الاستفسارات </h1>
                <br>
                <p>يمكنك ارسال ( اسألة , استفسارات , اقتراحات او شكاوى )</p>
                <p>سوف يتم قراءة استفسارك من قبل المختصين والاجابة عليه من خلال بريد الكتروني </p>
            </div>
            <br><br>
			<form action="" method="POST">
            <div class="form-group text-white" style="width:50% ; margin:auto">
			   <label for="lname">البريد الألكتروني :  </label>
               <input class="form-control" type="text" id="" name="email" placeholder="Your email.."> <br>
                <label for="exampleFormControlTextarea3">الموضوع : </label>
                <textarea class="form-control" name="name"id="exampleFormControlTextarea3" rows="1"></textarea>
                <br>
                <label for="exampleFormControlTextarea3">النص : </label>
                <textarea class="form-control" name="message"id="exampleFormControlTextarea3" rows="7"></textarea>
                <br>
               <button type="submit" class="btn btn-ouline-success bg-white text-success btn-lg" name="send" > ارسال </button>
			
              </div>
			  
			  </form>
        </div>

        <div class="Sec1" style="height:auto ; margin-bottom: 10vh; padding-bottom:4vh" >
            <div class="head">
                <h1>الاسئلة الاكثر تكرار</h1>

            </div>
            <br>
            
            <div class="accordion" id="accordionExample" style="width:50%; margin:auto">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Accordion Item #1
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Accordion Item #2
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Accordion Item #3
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>


        <!--start section our footer-->
<!-- Footer -->
<footer class="footer text-center text-lg-start bg-dark text-muted" style="margin-top:10vh">
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
</html>