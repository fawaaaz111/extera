 <!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="images/h4.jpg"/>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="fonts.css" type="text/css" media="screen"/>
    <title>home</title>
</head>
<body>
    <header id="home" >
        <div class="image-container">
            <img src="images/h2.jpg" id="content1" class="img active-img">
            <img src="images/h6.jpg" id="content2" class="img">
            <img src="images/h16.jpg" id="content3" class="img">
            <img src="images/h1.jpg" id="content4" class="img">
        </div>
        <div class="dot-container">
            <button onclick = "dot(1)"></button>
            <button onclick = "dot(2)"></button>
            <button onclick = "dot(3)"></button>
            <button onclick = "dot(4)"></button>
        </div>
        <button id="prev" onclick="prev()"> <i class="fa fa-angle-left"></i> </button>
        <button id="next" onclick="next()"> <i class="fa fa-angle-right"></i>  </button>

        <nav class="navbar">
            <ul>
                <li><a href="#home" class="link"><i class="fa fa-home"></i>الرئيسية</a></li>
                <li><a href="#properties" class="link">العقارات</a></li>
                <li><a href="#services" class="link">الخدمات</a></li>
                <li><a href="#about" class="link">من نحن</a></li>
                <li> <a href="#contact" class="link">أتصل بنا</a></li>
            </ul>
            <div class="logo">
              <img src="images/logo4.png" alt="">
            </div>
            <div class="icons">
                <div class="menu">
                    <span class="menu-bar"></span>
                    <span class="menu-bar"></span>
                    <span class="menu-bar"></span>
                </div>
                <div class="user-profile">
                    <i class="fa fa-user" id="user" width="30" height="30"></i>
                    <img src="images/city.png" alt="user-pic"  id="user-pic">
                </div>
                <div class="search"><a href="#search"><i class="fa fa-search"></i></a></div>
            </div>
        </nav>

<div class="profile-menu">
    <a href="#logining" class="login pro-link pro-btn">تسجيل دخول</a>
    <a href="#signup" class="sign-up pro-link pro-btn">إنشاء حساب؟</a>
    <ul class="user-active">
        <li><i class="fa fa-user-o"></i> <a href="profile.html">حسابي</a></li>
        <li><i class="fa fa-bell-o"><span class="inbox">3</span></i> <a href="">الرسائل</a></li>
        <li><i class="fa fa-cog"></i> <a href="">الإعدادات</a></li>
        <li><i class="fa fa-sign-out"></i> <a href="">تسجيل خروج</a></li>
    </ul>
</div>

<div class="logining" id="logining">
    <div class="close" id="close"><span></span><span></span></div>
    <div class="login-content">
    <div class="lgn-icon"><i class="fa fa-user-circle"></i></div>
    <span id="lg-msg"></span>
  
    
    <form action="login.php" method="post" id="lg-form">
    <div class="input">
        <i class="fa fa-user"></i>
        <input type="text" name="username" placeholder="أسم المستخدم" id="lg-username">
    </div>
    <span id="username-error"></span>

    <div class="input">
        <i class="fa fa-lock"></i>
        <input type="password" name="password" placeholder="كلمة المرور" id="lg-password">
    </div>
    <span id="password-error"></span>

    <div  class="forgot">
        <a href="#">نسيت كلمة المرور؟</a>
    </div>
    <div class="lgn-btn">
        <input type="submit" name="login" value="دخول" id="login">
    </div>
   </form>
    </div>
</div>


<!-- sign up regeseration -->

<div class="signup" id="signup">
    <div class="close" id="Close"><span></span><span></span></div>
    <div class="signup-content">
        <span class="message sign-success"></span>
        
    <form action="register.php" method="post" id="myform"> 
    <div >
        <div class="label">
            <input type="text" name="firstname" placeholder="الاسم الاول" id="firstname">
        </div>
        <span id="firstnameEro"></span>
    </div>

          <div>
        <div class="label">
            <input type="text" name="lastname" placeholder="الاسم الاخير" id="lastname">
        </div> 
        <span id="lastnameEro"></span>
    </div>

    <div>
        <div class="label">
        <i class="fa fa-user"></i>
        <input type="text" name="signupUsername" placeholder="أسم المستخدم" id="username">
        </div>
        <span id="usernameEro"></span>
    </div>

    <div>
        <div class="label">
        <i class="fa fa-envelope"></i>
        <input type="text" name="signupEmail" placeholder="البريد الالكتروتي" id="email">
        </div>
        <span id="emailEro"></span>
    </div>

    <div>
        <div class="label">
        <i class="fa fa-lock"></i>
        <input type="password" name="signupPassword" placeholder="كلمة المرور" id="password">
        </div>
        <span id="passwordEro"></span>
    </div>

          <input type="submit" name="register" value="register" id="signupBtn">
    </form>
  
    </div>
</div>
    
    </div>
</div>
    

        <div class="search-box" id="search">
            <div class="search-content">
                <select name="city" id="city">
                    <option value="city" selected>المنطقة</option>
                    <option value="khartoum">الخرطوم</option>
                    <option value="oumdurman">امدرمان</option>
                    <option value="bahri">بحري</option>
                </select>
                <select name="type" id="type">
                    <option value="type">نوع العقار</option>
                    <option value="villa">شقة</option>
                    <option value="house">منزل</option>
                    <option value="shop">محل تجاري</option>
                </select>
                <select name="type" id="type">
                    <option value="type">نوع العقد</option>
                    <option value="villa">شراء</option>
                    <option value="house">إيجار</option>
                </select>
                <input type="text" name="price" id="price" placeholder=" حدد السعر">
                <input type="submit" name="search" id="search" value="بحث">
            </div>
        </div>

        <div class="slider">
        </div> 
    
    </header>
    <section id="properties">

<?php
include ('connection.php');
mysqli_select_db($con, 'extera');

//query for all properties
$sql = 'SELECT *  FROM properties ORDER BY date';


//making query and get result
$result = mysqli_query($con, $sql) or die( mysqli_error($con));

//fetch the resulting rows as an array
$properties =  mysqli_fetch_all($result, MYSQLI_ASSOC);

// if(is_array($properties)) {
//     echo "this is an array";
// } else {
//     echo "this is not an array";
// }

//free result form memory
mysqli_free_result($result);

//print_r($properties);

//close the connection
mysqli_close($con);


?>

        <h3 class="sec-title"><span>العقارات</span> المتوفرة</h3>
      <div  class="flex" class="properties">

<?php foreach($properties as $property){ ?>

    <div class="card">
            <img src="<?php echo htmlspecialchars($property['image']);?>" alt="">
            <div class="details">
                <span>المنطقة: <span  style="color:#27ae60;"><?php echo htmlspecialchars($property['address']);?> </span></span>
                <span>السعر: <span style="color:#27ae60;"><?php echo htmlspecialchars($property['price']);?> جنيه</span></span>
                <span>النوع: <span style="color:#27ae60;"><?php echo htmlspecialchars($property['type']);?></span></span>
                <span>العقد: <span style="color:#27ae60;"><?php echo htmlspecialchars($property['contractType']);?></span></span>
                <span class="card-btn">تفاوض</span>
            </div>
        </div>
<?php } ?>

      </div>
    </section>

    <section id="services">
        <h3 class="sec-title" > الخدمات</h3>
        <div class="flex" class="services">
            <div class="service service-right">
                <img src="images/sale.png" alt="" srcset="">
                <p>بيع</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis accusamus esse doloremque unde illo beatae est id fuga qui non.</p>
            </div>

            <div class="service  service-middel">
                <img src="images/buy.png" alt="">
                <p>شراء</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis accusamus esse doloremque unde illo beatae est id fuga qui non.</p>
            </div>
           
            <div class="service service-left">
                <img src="images/rent.png" alt="" srcset="">
                <p>إيجار</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis accusamus esse doloremque unde illo beatae est id fuga qui non.</p>
            </div>
        </div>
    </section>

<section class="opreations flex" id="opreations">
<h3 class="opreation-title">المعاملات التي تم إجراءها من خلال منصة موقعنا</h3>
<div class="sold">
<span><span class="plus">+</span>4554</span>
    <span>عقار تم بيعه</span>
     </div>
<div class="bought">
<span><span class="plus">+</span>6576</span>
<span>عقار تم شراءه</span>
</div>
<div class="rent">
<span><span class="plus">+</span>3215</span>
<span>عقار تم إستئجاره</span>
</div>

</section>
   
    <section id="about">
        <h3 class="sec-title"><span></span>من</span> نحن</h3>
        <div class="flex" class="about">
            <div class="ab ab-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam porro officia veritatis, ea perferendis recusandae
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam porro officia veritatis, ea perferendis recusandae, eum necessitatibus veniam repellendus impedit asperiores quas cumque ut debitis iure rerum at suscipit perspiciatis!
            </div>
            
            <div class="ab ab-img">
                <!-- <img src="imgs/h4.jpg" alt=""> -->
                <img src="images/city.png" alt="">
            </div>
        </div>
    </section>
  
    <section id="contact">
        <h3 class="sec-title"><span>أتصل</span> بنا</h3>

                <form action="contactus.php" method="post" id="contact-form">
                    <h4 class="cont-success"></h4>

                    <div class="input fullname">
                        <input type="text" name="fullname" placeholder="الاسم كامل" id="cont-fullname"/>
                    </div>
                    <span class="fullnameEro"></span>

                    <div class="input email">
                        <input type="text" name="cont-email" placeholder="البريد الألكتروني" id="cont-email"/>
                    </div>
                    <span class="emailEro"></span>

                    <textarea name="message" id="cont-text-ar" cols="40" rows="10" placeholder="اكتب رسالتك هنا."></textarea>
                    <span class="textarEro"></span>

                    <div class="send">
                        <i class="fa fa-send"></i> <button name="send">إرسال</button>
                    </div>
                </form>

 

    </section>
    <section class="footer">
        <div class="info">
            <div class="quickLinks info-content">
                <h2>الروابط السريعة</h2>
                <a href="#home"><i class="fa fa-link"></i> الرئيسية</a>
                <a href="#properties"><i class="fa fa-link"></i> العقارات</a>
                <a href="#services"><i class="fa fa-link"></i> الخدمات</a>
                <a href="#about"><i class="fa fa-link"></i> من نحن</a>
                <a href="#contact"><i class="fa fa-link"></i> أتصل بنا</a>
            </div>
            <div class="contacts info-content">
                <h2>معلومات الاتصال</h2>
                <a href=""><i class="fa fa-phone"></i> 24992757159+</a>
                <a href=""><i class="fa fa-phone"></i> 24992757159+</a>
                <a href=""><i class="fa fa-envelope"></i> alhade3333@gmail.com</a>
                <a href=""><i class="fa fa-envelope"></i> alhade3333@gmail.com</a>
                <a href=""><i class="fa fa-envelope"></i> alhade3333@gmail.com</a>
            </div>
            <div class="fllowus info-content">
                <h2>وسائل التواصل</h2>
                <div>
                    <a href=""><i class="fa fa-facebook"></i> </a>
                    <a href=""><i class="fa fa-twitter"></i> </a>
                    <a href=""><i class="fa fa-whatsapp"></i> </a>
                </div>  
            </div>
        </div>
        <div class="copyRight">
           <div>
            <span>جميع الحقوق
                محفوظة &copy; 2021.</span> 
           </div>
           |
           <div>
            <span>.designed <span>with</span> <i class="fa fa-heart"></i> by <span>mustafa</span></span>
           </div>
         
        </div>
    </section>

   
   <script src="IntetsectionObserver.js"></script>
   <script src="style.js"></script>
   <script src="script.js"></script>
</body>
</html>