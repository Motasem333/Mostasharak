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
$email = $_SESSION['email'];
$selectprofile = "select F_name,L_name,password,Email,age,phone_number,Wieght,Height from user where email='$email'";
$runselectP  = mysqli_query($conn,$selectprofile);

while($r = mysqli_fetch_assoc($runselectP)){
    $fname =  $r['F_name'];
    $lname =  $r['L_name'];
    $password =  $r['password'];
    $email = $r['Email'];
    $w = $r['Wieght'];
    $h = $r['Height'];
    $age =  $r['age'];
    $phone_number = $r['phone_number'];

}
?>


<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مستشارك | الصفحة الشخصية</title>
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
    <link rel="stylesheet" href="css/profile.css">
    <script src="js\profile.js"></script>

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
            <div class="Sec1">
                <div class="head">
                    <h1>المعلومات الشخصية</h1>
                </div>
<form action="" method="POST">
                <div class="edit_section" style="" >
                    <label for="" style=" margin-top: 5vh ; margin-right: 5vh; ">الاسم الاول : </label>
                    <input type="text" name="fname" id="name" class="form-control rounded d-inline" style="width:25%"  disabled  aria-label="Search" aria-describedby="search-addon" value="<?php echo $fname;?>"/>
                    <button type="button" name="fnamebtn" class="btn btn-outline-success bg-white"  onclick="editName()">تعديل</button>

                    <label for="" style=" margin-top: 5vh ; margin-right: 5vh;">اسم العائلة : </label>
                    <input type="text" id="Lname" name="lname" class="form-control rounded d-inline" style="width:25%"  disabled  aria-label="Search" aria-describedby="search-addon" value="<?php echo $lname;?>"/>
                    <button type="button" id="edit2" class="btn btn-outline-success bg-white" onclick="editL_Name()">تعديل</button>





                    <label for="" style=" margin-top: 5vh ; margin-right: 5vh; ">كلمة السر  : </label>
                    <input type="text" name="password" id="password" class="form-control rounded d-inline" style="width:26%"  disabled  aria-label="Search" aria-describedby="search-addon" value="<?php echo $password;?>"/>
                    <button type="button"  id="editpass" class="btn btn-outline-success bg-white"  onclick="editpassword()">تعديل</button>

                    <label for="" style=" margin-top: 5vh ; margin-right: 5vh;">البريد الالكتروني : </label>
                    <input type="email" id="email" name="email" class="form-control rounded d-inline" style="width:22%"  disabled  aria-label="Search" aria-describedby="search-addon" value="<?php echo $email;?>"/>
<br>

                    <label for="" style=" margin-top: 5vh ; margin-right: 5vh; ">العمر :  </label>
                    <input type="number" id="age"  name="age" class="form-control rounded d-inline" style="width:30%"  disabled  aria-label="Search" aria-describedby="search-addon" value="<?php echo $age;?>"/>
                    <button type="button" id="edit3" class="btn btn-outline-success bg-white"  onclick="editAge()">تعديل</button>

                    <label for="" style=" margin-top: 5vh ; margin-right: 5vh; ">رقم الهاتف :  </label>
                    <input type="tel"  id="tel" name="phone_number"class="form-control rounded d-inline" style="width:25%"  disabled  aria-label="Search" aria-describedby="search-addon" value="<?php echo $phone_number;?>"/>
                    <button type="button" id="edit4" class="btn btn-outline-success bg-white"  onclick="edittel()">تعديل</button>

                </div>
                <div class="head">
                    <h1> المعلومات الجسدية</h1>
                </div>
                <div class="edit_section">
                    
                    <label for="" style=" margin-top: 5vh ; margin-right: 5vh; ">الوزن :  </label>
                    <input type="number" name="weight" id="weight" class="form-control rounded d-inline" style="width:30%"  disabled  aria-label="Search" aria-describedby="search-addon" value="<?php echo $w;?>"/>
                    <button type="button"  id="editweight" class="btn btn-outline-success bg-white" onclick="editWieght1()">تعديل</button>

                    <label for="" style=" margin-top: 5vh ; margin-right: 5vh; ">الطول :  </label>
                    <input type="number" name="hieght" id="height" class="form-control rounded d-inline" style="width:28.5%"  disabled  aria-label="Search" aria-describedby="search-addon" value="<?php echo $h;?>"/>
                    <button type="button" id="edit6"  class="btn btn-outline-success bg-white" onclick="editHeight()">تعديل</button>
                    
                </div>
                <div class="notes">
                    <button type="submit"  name="savechanges"  class="btn btn-outline-success btn-lg bg-white" >حفظ التغييرات </button>
                    <br><br>
                    <h4>  تعديل الوزن و الطول بشكل غير صحيح سوف يؤثر على جدولك الغذائي فتأكد من ادخال البيانات بطريقة صحيحة وحسب تقدمك في البرنامج </h4>
                </div>

            </div>
        </div> 
</form>
<?php
if (isset($_POST['savechanges'])){
  if(isset($_POST['fname'])){
  $fname = $_POST['fname'];
  $updatefname = "UPDATE user set f_name= '$fname' where email='$email'";
  $runupdatefname = mysqli_query($conn,$updatefname);
}
  if (isset($_POST['lname'])){
  $lname = $_POST['lname'];
  $updatelname = "UPDATE user set L_name= '$lname' where email='$email'";
  $runupdatelname = mysqli_query($conn,$updatelname);
}
if (isset($_POST['email'])){
  $email = $_POST['email'];
  $updateemail = "UPDATE user set email= '$email' where email= '$email'";
  $runupdateemail= mysqli_query($conn,$updateemail);
}
if (isset($_POST['password'])){
  $password = $_POST['password'];
  $updatepassword = "UPDATE user set password= '$password' where email='$email'";
  $runupdatepassword = mysqli_query($conn,$updatepassword);
}
if(isset($_POST['age'])){
  $age = $_POST['age'];
  $updateage = "UPDATE user set age= '$age' where email='$email'";
  $runupdateage = mysqli_query($conn,$updateage);
}
  if (isset($_POST['weight'])){
  $w = $_POST['weight'];
  $updatew = "UPDATE user set   Wieght= '$w' where email='$email'";
  $runupdatew = mysqli_query($conn,$updatew);
}
if (isset($_POST['hieght'])){
  $h = $_POST['hieght'];
  $updateh = "UPDATE user set height= '$h' where email='$email'";
  $runupdateh = mysqli_query($conn,$updateh);
}
?>
<meta http-equiv="refresh" content="0; url=profile.php">


<?php
}
include "footer.php";

?>   

</body>
</html

<?php
}
else {
    header("location:Home.php");
}



?>



