<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Slider</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- fontawesome cdn -->
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">
    <!-- owl carousel -->
    <link rel = "stylesheet" href = "css/owl.carousel.css">
    <link rel = "stylesheet" href = "css/owl.theme.default.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "css/store.css">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark  sticky-top ">
        <div class="container-fluid">
         
         
         <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse " id="main_nav">
         <ul class="items navbar-nav ms-auto">
             <li class="nav-item active"> <a class="nav-link" href="Home.php" style="color:white">تسجيل دخول  </a> </li>
             <li class="nav-item active"> <a class="nav-link" href="store.html" style="color:white">المتجر </a> </li>
             <li class="nav-item active"> <a class="nav-link" href="contact.php" style="color:white"> تواصل معنا </a> </li>
        <?php
        session_start();
        if (!empty($_SESSION['email'])){
        ?>
             <li class="nav-item active"> <a class="nav-link" href="Main.php" style="color:white">الصفحة الرئيسية </a> </li>
             <li class="nav-item active"> <a class="nav-link" href="profile.php" style="color:white">المعلومات الشخصية </a> </li>
             <li class="nav-item active"> <a class="nav-link" href="exercises.php" style="color:white">التمارين </a> </li>
             <li class="nav-item active"> <a class="nav-link " href="logout.php" style="color:white;">خروج</a> </li>
     
     <?php } ?>

  
         </ul>
        
         </div> <!-- navbar-collapse.// -->
         <img src="img/logoedit.png" style="height:10vh">
        </div> <!-- container-fluid.// -->
       </nav>
     
     
    <div class="cart-button">
       <button class="cartt btn-success" style="font-size:24px">السلة <i class="fa fa-shopping-cart"></i> <span>0</span></button>
    </div>
      
       

    <div class = "container">
        <div class = "row my-5 pt-5">
            <h1 class = "text-center">الاثقال</h1>
            
        </div>

        <div class = "row g-4 my-5 mx-auto owl-carousel owl-theme">
            <div class = "col product-item mx-auto">
                <div class = "product-img">
                    <img src = "img/dambbell2.jpg" alt = "" class = "img-fluid d-block mx-auto">
                    <span class = "heart-icon">
                        <i class = "far fa-heart"></i>
                    </span>
                    <div class = "row btns w-100 mx-auto text-center">
                        <button  class = "add-to-cart col-6 py-2">
                            <i class = " fa fa-cart-plus"></i> Add to Cart
                        </button>
                        <button type = "button" class = "col-6 py-2">
                            <i class = "fa fa-binoculars"></i> View
                        </button>
                    </div>
                </div>

                <div class = "product-info p-3">
                    <span class = "product-type">item 1</span>
                    <span class = "d-block text-dark py-2 product-name">شكل سداسي مميز و فريد
                        مقابض مصنوعه من الكروم مصمه خصيصا لراحة اليدين
                        مصنوع من الحديد الصلب مغطي بطبقة من المطاط للحفاظ علية   </span>
                    <span class = "product-price">$ 100.50</span>
                    <div class = "rating d-flex mt-1">
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>(25 reviews)</span>
                    </div>
                </div>
            </div>


            

            <div class = "col product-item mx-auto">
                <div class = "product-img">
                    <img class="shope-item-image" src = "img/dambbell2.jpg" alt = "" class = "img-fluid d-block mx-auto">
                    <span class = "heart-icon">
                        <i class = "far fa-heart"></i>
                    </span>
                    <div class = "row btns w-100 mx-auto text-center">
                        <button class = "add-to-cart col-6 py-2">
                            <i class = " fa fa-cart-plus"></i> Add to Cart
                        </button>
                        <button  class = "add-to-cart col-6 py-2">
                            <i class = "fa fa-binoculars"></i> View
                        </button>
                    </div>
                </div>

                <div class = "product-info p-3">
                    <span class = "product-type">item 2</span>
                    <a href = "#" class = "d-block text-dark text-decoration-none py-2 product-name">Apple - Apple Watch Series 3 White Sports Band</a>
                    <span class = "product-price">$ 100.50</span>
                    <div class = "rating d-flex mt-1">
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>(25 reviews)</span>
                    </div>
                </div>
            </div>

            <div class = "col product-item mx-auto">
                <div class = "product-img">
                    <img class="shope-item-image" src = "img/dambbell2.jpg" alt = "" class = "img-fluid d-block mx-auto">
                    <span class = "heart-icon">
                        <i class = "far fa-heart"></i>
                    </span>
                    <div class = "row btns w-100 mx-auto text-center">
                        <button  class = "add-to-cart col-6 py-2">
                            <i class = " fa fa-cart-plus"></i> Add to Cart
                        </button>
                        <button type = "button" class = "col-6 py-2">
                            <i class = "fa fa-binoculars"></i> View
                        </button>
                    </div>
                </div>

                <div class = "product-info p-3">
                    <span class = "product-type">item 3</span>
                    <a href = "#" class = "d-block text-dark text-decoration-none py-2 product-name">Apple - Apple Watch Series 3 White Sports Band</a>
                    <span class = "product-price">$ 100.50</span>
                    <div class = "rating d-flex mt-1">
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>(25 reviews)</span>
                    </div>
                </div>
            </div>

            <div class = "col product-item mx-auto">
                <div class = "product-img">
                    <img class="shope-item-image" src = "img/dambbell4.jpg" alt = "" class = "img-fluid d-block mx-auto">
                    <span class = "heart-icon">
                        <i class = "far fa-heart"></i>
                    </span>
                    <div class = "row btns w-100 mx-auto text-center">
                        <button  class = "add-to-cart col-6 py-2">
                            <i class = " fa fa-cart-plus"></i> Addd to Cart
                        </button>
                        <button type = "button" class = "col-6 py-2">
                            <i class = "fa fa-binoculars"></i> View
                        </button>
                    </div>
                </div>

                <div class = "product-info p-3">
                    <span class = "product-type">Electronics & Accessories</span>
                    <a href = "#" class = "d-block text-dark text-decoration-none py-2 product-name">Apple - Apple Watch Series 3 White Sports Band</a>
                    <span class = "product-price">$ 100.50</span>
                    <div class = "rating d-flex mt-1">
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>(25 reviews)</span>
                    </div>
                </div>
            </div>

            <div class = "col product-item mx-auto">
                <div class = "product-img">
                    <img class="shope-item-image" src = "img/dambbell3.jpg" alt = "" class = "img-fluid d-block mx-auto">
                    <span class = "heart-icon">
                        <i class = "far fa-heart"></i>
                    </span>
                    <div class = "row btns w-100 mx-auto text-center">
                        <button class = "add-to-cart col-6 py-2">
                            <i class = " fa fa-cart-plus"></i> Add to Cart
                        </button>
                        <button type = "button" class = "col-6 py-2">
                            <i class = "fa fa-binoculars"></i> View
                        </button>
                    </div>
                </div>

                <div class = "product-info p-3">
                    <span class = "product-type">Dambbel 10kg</span>
                    <a href = "#" class = "d-block text-dark text-decoration-none py-2 product-name">Apple - Apple Watch Series 3 White Sports Band</a>
                    <span class = "product-price">$ 100.50</span>
                    <div class = "rating d-flex mt-1">
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>(25 reviews)</span>
                    </div>
                </div>
            </div>
            
            <div class = "col product-item mx-auto">
                <div class = "product-img">
                    <img class="shope-item-image" src = "img/dambbell3.jpg" alt = "" class = "img-fluid d-block mx-auto">
                    <span class = "heart-icon">
                        <i class = "far fa-heart"></i>
                    </span>
                    <div class = "row btns w-100 mx-auto text-center">
                        <button class = "add-to-cart col-6 py-2">
                            <i class = " fa fa-cart-plus"></i> Add to Cart
                        </button>
                        <button type = "button" class = "col-6 py-2">
                            <i class = "fa fa-binoculars"></i> View
                        </button>
                    </div>
                </div>

                <div class = "product-info p-3">
                    <span class = "product-type">Electronics & Accessories</span>
                    <a href = "#" class = "d-block text-dark text-decoration-none py-2 product-name">Apple - Apple Watch Series 3 White Sports Band</a>
                    <span class = "product-price">$ 100.50</span>
                    <div class = "rating d-flex mt-1">
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>(25 reviews)</span>
                    </div>
                </div>
            </div>
        </div>




          
        <div class = "row my-5 pt-5">
            <h1 class = "text-center">بروتين</h1>
            
        </div>
        <div class = "row g-4 my-5 mx-auto owl-carousel owl-theme">
            <div class = "col product-item mx-auto">
                <div class = "product-img">
                    <img src = "https://th.bing.com/th/id/R.6113a058d0e36ef7d1db4f6b5b00d772?rik=3%2bJP8WCS2OenkA&pid=ImgRaw&r=0" alt = "" class = "img-fluid d-block mx-auto">
                    <span class = "heart-icon">
                        <i class = "far fa-heart"></i>
                    </span>
                    <div class = "row btns w-100 mx-auto text-center">
                        <button  class = "add-to-cart col-6 py-2">
                            <i class = " fa fa-cart-plus"></i> Add to Cart
                        </button>
                        <button type = "button" class = "col-6 py-2">
                            <i class = "fa fa-binoculars"></i> View
                        </button>
                    </div>
                </div>

                <div class = "product-info p-3">
                    <span class = "product-type">item 1</span>
                    <span class = "d-block text-dark py-2 product-name">شكل سداسي مميز و فريد
                        مقابض مصنوعه من الكروم مصمه خصيصا لراحة اليدين
                        مصنوع من الحديد الصلبة   </span>
                    <span class = "product-price">$ 100.50</span>
                    <div class = "rating d-flex mt-1">
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>(25 reviews)</span>
                    </div>
                </div>
            </div>


            

            <div class = "col product-item mx-auto">
                <div class = "product-img">
                    <img class="shope-item-image" src = "https://lh6.googleusercontent.com/proxy/Jul_StsSSl9unt_1sENdXSnvpMknAakCCd0M7JHFudA2i61A0av8YdnApI5ogtSp6qxt2hTsvQAyMZyS63Uqni5fuKSX8wjhKBBbPlHbFVhhQY5QxQvl=w1200-h630-p-k-no-nu" alt = "" class = "img-fluid d-block mx-auto">
                    <span class = "heart-icon">
                        <i class = "far fa-heart"></i>
                    </span>
                    <div class = "row btns w-100 mx-auto text-center">
                        <button class = "add-to-cart col-6 py-2">
                            <i class = " fa fa-cart-plus"></i> Add to Cart
                        </button>
                        <button  class = "add-to-cart col-6 py-2">
                            <i class = "fa fa-binoculars"></i> View
                        </button>
                    </div>
                </div>

                <div class = "product-info p-3">
                    <span class = "product-type">item 2</span>
                    <a href = "#" class = "d-block text-dark text-decoration-none py-2 product-name">Apple - Apple Watch Series 3 White Sports Band</a>
                    <span class = "product-price">$ 100.50</span>
                    <div class = "rating d-flex mt-1">
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>(25 reviews)</span>
                    </div>
                </div>
            </div>

            <div class = "col product-item mx-auto">
                <div class = "product-img">
                    <img class="shope-item-image" src = "https://th.bing.com/th/id/R.b30778ddecfa101ae8553dcc46011396?rik=OOyRjQTxrBRTtA&pid=ImgRaw&r=0" alt = "" class = "img-fluid d-block mx-auto">
                    <span class = "heart-icon">
                        <i class = "far fa-heart"></i>
                    </span>
                    <div class = "row btns w-100 mx-auto text-center">
                        <button  class = "add-to-cart col-6 py-2">
                            <i class = " fa fa-cart-plus"></i> Add to Cart
                        </button>
                        <button type = "button" class = "col-6 py-2">
                            <i class = "fa fa-binoculars"></i> View
                        </button>
                    </div>
                </div>

                <div class = "product-info p-3">
                    <span class = "product-type">item 3</span>
                    <a href = "#" class = "d-block text-dark text-decoration-none py-2 product-name">Apple - Apple Watch Series 3 White Sports Band</a>
                    <span class = "product-price">$ 100.50</span>
                    <div class = "rating d-flex mt-1">
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>(25 reviews)</span>
                    </div>
                </div>
            </div>

            <div class = "col product-item mx-auto">
                <div class = "product-img">
                    <img class="shope-item-image" src = "https://th.bing.com/th/id/OIP.9R1sdf4jvEOKSVfF5noAyAHaJ4?pid=ImgDet&w=1125&h=1500&rs=1" alt = "" class = "img-fluid d-block mx-auto">
                    <span class = "heart-icon">
                        <i class = "far fa-heart"></i>
                    </span>
                    <div class = "row btns w-100 mx-auto text-center">
                        <button  class = "add-to-cart col-6 py-2">
                            <i class = " fa fa-cart-plus"></i> Addd to Cart
                        </button>
                        <button type = "button" class = "col-6 py-2">
                            <i class = "fa fa-binoculars"></i> View
                        </button>
                    </div>
                </div>

                <div class = "product-info p-3">
                    <span class = "product-type">Electronics & Accessories</span>
                    <a href = "#" class = "d-block text-dark text-decoration-none py-2 product-name">Apple - Apple Watch Series 3 White Sports Band</a>
                    <span class = "product-price">$ 100.50</span>
                    <div class = "rating d-flex mt-1">
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>(25 reviews)</span>
                    </div>
                </div>
            </div>
            
            <div class = "col product-item mx-auto">
                <div class = "product-img">
                    <img class="shope-item-image" src = "https://th.bing.com/th/id/R.b442fecacf386628bf3b3709f37ef550?rik=CXhEDXGj2HXoEw&riu=http%3a%2f%2fwww.cosmoprofbeauty.com%2fon%2fdemandware.static%2f-%2fSites-cosmoprof-master-catalog%2fdefault%2fdw04791e50%2fimages%2fjohnpaulmitchellsystems%2f573242.png&ehk=IDv9X0Gx1wO2BuZE%2bNxY9f%2bXK9MQiZvtek2BKu48tOc%3d&risl=&pid=ImgRaw&r=0" alt = "" class = "img-fluid d-block mx-auto">
                    <span class = "heart-icon">
                        <i class = "far fa-heart"></i>
                    </span>
                    <div class = "row btns w-100 mx-auto text-center">
                        <button class = "add-to-cart col-6 py-2">
                            <i class = " fa fa-cart-plus"></i> Add to Cart
                        </button>
                        <button type = "button" class = "col-6 py-2">
                            <i class = "fa fa-binoculars"></i> View
                        </button>
                    </div>
                </div>

                <div class = "product-info p-3">
                    <span class = "product-type">Milk chocolate protin</span>
                    <a href = "#" class = "d-block text-dark text-decoration-none py-2 product-name">Apple - Apple Watch Series 3 White Sports Band</a>
                    <span class = "product-price">$ 100.50</span>
                    <div class = "rating d-flex mt-1">
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>(25 reviews)</span>
                    </div>
                </div>
            </div>
            
            <div class = "col product-item mx-auto">
                <div class = "product-img">
                    <img class="shope-item-image" src = "img/dambbell3.jpg" alt = "" class = "img-fluid d-block mx-auto">
                    <span class = "heart-icon">
                        <i class = "far fa-heart"></i>
                    </span>
                    <div class = "row btns w-100 mx-auto text-center">
                        <button class = "add-to-cart col-6 py-2">
                            <i class = " fa fa-cart-plus"></i> Add to Cart
                        </button>
                        <button type = "button" class = "col-6 py-2">
                            <i class = "fa fa-binoculars"></i> View
                        </button>
                    </div>
                </div>

                <div class = "product-info p-3">
                    <span class = "product-type">Electronics & Accessories</span>
                    <a href = "#" class = "d-block text-dark text-decoration-none py-2 product-name">Apple - Apple Watch Series 3 White Sports Band</a>
                    <span class = "product-price">$ 100.50</span>
                    <div class = "rating d-flex mt-1">
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>(25 reviews)</span>
                    </div>
                </div>
            </div>
        </div>












        <div class = "row my-5 pt-5">
            <h1 class = "text-center">الملابس</h1>
            
        </div>
        <div class = "row g-4 my-5 mx-auto owl-carousel owl-theme">
            <div class = "col product-item mx-auto">
                <div class = "product-img">
                    <img src = "img/cloth1.png" alt = "" class = "img-fluid d-block mx-auto">
                    <span class = "heart-icon">
                        <i class = "far fa-heart"></i>
                    </span>
                    <div class = "row btns w-100 mx-auto text-center">
                        <button  class = "add-to-cart col-6 py-2">
                            <i class = " fa fa-cart-plus"></i> Add to Cart
                        </button>
                        <button type = "button" class = "col-6 py-2">
                            <i class = "fa fa-binoculars"></i> View
                        </button>
                    </div>
                </div>

                <div class = "product-info p-3">
                    <span class = "product-type">item 1</span>
                    <span class = "d-block text-dark py-2 product-name">شكل سداسي مميز و فريد
                        مقابض مصنوعه من الكروم مصمه خصيصا لراحة اليدين
                        مصنوع من الحديد الصلب مغطي بطبقة من المطاط للحفاظ علية   </span>
                    <span class = "product-price">$ 100.50</span>
                    <div class = "rating d-flex mt-1">
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>(25 reviews)</span>
                    </div>
                </div>
            </div>


            

            <div class = "col product-item mx-auto">
                <div class = "product-img">
                    <img class="shope-item-image" src = "img/cloth2.jpg" alt = "" class = "img-fluid d-block mx-auto">
                    <span class = "heart-icon">
                        <i class = "far fa-heart"></i>
                    </span>
                    <div class = "row btns w-100 mx-auto text-center">
                        <button class = "add-to-cart col-6 py-2">
                            <i class = " fa fa-cart-plus"></i> Add to Cart
                        </button>
                        <button  class = "add-to-cart col-6 py-2">
                            <i class = "fa fa-binoculars"></i> View
                        </button>
                    </div>
                </div>

                <div class = "product-info p-3">
                    <span class = "product-type">item 2</span>
                    <a href = "#" class = "d-block text-dark text-decoration-none py-2 product-name">Apple - Apple Watch Series 3 White Sports Band</a>
                    <span class = "product-price">$ 100.50</span>
                    <div class = "rating d-flex mt-1">
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>(25 reviews)</span>
                    </div>
                </div>
            </div>

            <div class = "col product-item mx-auto">
                <div class = "product-img">
                    <img class="shope-item-image" src = "img/cloth3.jpg" alt = "" class = "img-fluid d-block mx-auto">
                    <span class = "heart-icon">
                        <i class = "far fa-heart"></i>
                    </span>
                    <div class = "row btns w-100 mx-auto text-center">
                        <button  class = "add-to-cart col-6 py-2">
                            <i class = " fa fa-cart-plus"></i> Add to Cart
                        </button>
                        <button type = "button" class = "col-6 py-2">
                            <i class = "fa fa-binoculars"></i> View
                        </button>
                    </div>
                </div>

                <div class = "product-info p-3">
                    <span class = "product-type">item 3</span>
                    <a href = "#" class = "d-block text-dark text-decoration-none py-2 product-name">Apple - Apple Watch Series 3 White Sports Band</a>
                    <span class = "product-price">$ 100.50</span>
                    <div class = "rating d-flex mt-1">
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>(25 reviews)</span>
                    </div>
                </div>
            </div>

            <div class = "col product-item mx-auto">
                <div class = "product-img">
                    <img class="shope-item-image" src = "img/cloth4.jpg" alt = "" class = "img-fluid d-block mx-auto">
                    <span class = "heart-icon">
                        <i class = "far fa-heart"></i>
                    </span>
                    <div class = "row btns w-100 mx-auto text-center">
                        <button  class = "add-to-cart col-6 py-2">
                            <i class = " fa fa-cart-plus"></i> Addd to Cart
                        </button>
                        <button type = "button" class = "col-6 py-2">
                            <i class = "fa fa-binoculars"></i> View
                        </button>
                    </div>
                </div>

                <div class = "product-info p-3">
                    <span class = "product-type">Adidas pajama</span>
                    <a href = "#" class = "d-block text-dark text-decoration-none py-2 product-name">Apple - Apple Watch Series 3 White Sports Band</a>
                    <span class = "product-price">$ 100.50</span>
                    <div class = "rating d-flex mt-1">
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>(25 reviews)</span>
                    </div>
                </div>
            </div>

            <div class = "col product-item mx-auto">
                <div class = "product-img">
                    <img class="shope-item-image" src = "img/cloth2.jpg" alt = "" class = "img-fluid d-block mx-auto">
                    <span class = "heart-icon">
                        <i class = "far fa-heart"></i>
                    </span>
                    <div class = "row btns w-100 mx-auto text-center">
                        <button class = "add-to-cart col-6 py-2">
                            <i class = " fa fa-cart-plus"></i> Add to Cart
                        </button>
                        <button type = "button" class = "col-6 py-2">
                            <i class = "fa fa-binoculars"></i> View
                        </button>
                    </div>
                </div>

                <div class = "product-info p-3">
                    <span class = "product-type">Adidas pajama</span>
                    <a href = "#" class = "d-block text-dark text-decoration-none py-2 product-name">Apple - Apple Watch Series 3 White Sports Band</a>
                    <span class = "product-price">$ 10.50</span>
                    <div class = "rating d-flex mt-1">
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>(25 reviews)</span>
                    </div>
                </div>
            </div>
            
            <div class = "col product-item mx-auto">
                <div class = "product-img">
                    <img class="shope-item-image" src = "img/dambbell3.jpg" alt = "" class = "img-fluid d-block mx-auto">
                    <span class = "heart-icon">
                        <i class = "far fa-heart"></i>
                    </span>
                    <div class = "row btns w-100 mx-auto text-center">
                        <button class = "add-to-cart col-6 py-2">
                            <i class = " fa fa-cart-plus"></i> Add to Cart
                        </button>
                        <button type = "button" class = "col-6 py-2">
                            <i class = "fa fa-binoculars"></i> View
                        </button>
                    </div>
                </div>

                <div class = "product-info p-3">
                    <span class = "product-type">Electronics & Accessories</span>
                    <a href = "#" class = "d-block text-dark text-decoration-none py-2 product-name">Apple - Apple Watch Series 3 White Sports Band</a>
                    <span class = "product-price">$ 100.50</span>
                    <div class = "rating d-flex mt-1">
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>
                            <i class = "fa fa-star"></i>
                        </span>
                        <span>(25 reviews)</span>
                    </div>
                </div>
            </div>
        </div>







       

    <section class="containerr content-section">
            <h2 class="section-header">السلة</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">المنتج</span>
                <span class="cart-price cart-header cart-column">السعر</span>
                <span class="cart-quantity cart-header cart-column">الكمية</span>
            </div>
            <div class="cart-items">
                
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">المجموع الكلي</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>


    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- owl carousel -->
    <script src = "js/owl.carousel.js"></script>
    <script src = "js/store.js"></script>

</body>
</html>