<div class="signup" id="signup">
    <div class="close" id="Close"><span></span><span></span></div>
    <div class="signup-content">
    <span class="message sign-success"></span>

    <form action="register.php" method="post"> 
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
        <input type="text" name="signup-username" placeholder="أسم المستخدم" id="username">
        </div>
        <span id="usernameEro"></span>
    </div>

    <div>
        <div class="label">
        <i class="fa fa-envelope"></i>
        <input type="text" name="signup-email" placeholder="البريد الالكتروتي" id="email">
        </div>
        <span id="emailEro"></span>
    </div>

    <div>
        <div class="label">
        <i class="fa fa-lock"></i>
        <input type="password" name="signup-password" placeholder="كلمة المرور" id="password">
        </div>
        <span id="passwordEro"></span>
    </div>

    <div class="sgn-btn">
        <input type="submit" name="create" value="إنشاء" id="signupBtn">
    </div>
    </form>
    </div>
</div>

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
