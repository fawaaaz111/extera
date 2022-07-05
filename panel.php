<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="panel.css" type="text/css" media="screen">
    <title>Control panel</title>
</head>
<body>
    <div class="container">

        <div class="admin-info">
            <img src="images/city.png" alt="this is pic">
            <span>Admin name</span>
        </div>

        <div class="viewer">
            <ul>
                <li>المبيعات <span>+3434</span></li>
                <li>المشتريات <span>+12000</span></li>
                <li>الإيجارات <span>+4455456</span></li>
            </ul>
        </div>

        <div class="admin-menu">
            <a href="#profile" data-target="#profile"><i class="fa fa-user-o"></i> حسابي</a>
            <a href="#messages" data-target="#messages"><i class="fa fa-bell-o"><span class="inbox">13</span></i> الرسائل</a>
            <a href="#properties" data-target="#properties"><i class="fa fa-building"></i> العقارات</a>
            <a href="#admins" data-target="#admins"><i class="fa fa-users"></i> المدراء</a>
            <a href="#users" data-target="#users"><i class="fa fa-users"></i> المستخدمين</a>
            <a href="#"><i class="fa fa-cog"></i> الإعدادات</a>
            <a href="#"><i class="fa fa-sign-out"></i> تسجيل خروج</a>
        </div>

        <section class="profile sec" id="profile">
            <div class="acc-Img">
                <img src="images/city.png" alt="" width="100" height="100">
                <input type="file" name="profileImage"  placeholder="ارفق صورة" id="">ارفق صورة
            </div>
            <div class="acc-info">
                <form action="#" method="post">
                    <input type="text" name="firstname" placeholder="الاسم الاول">
                    <input type="text" name="lastname" placeholder="الاسم الاخير">
                    <input type="text" name="username" placeholder="اسم المستخدم">
                    <input type="text" name="email" placeholder="البريد الالكتروني">
                    <input type="password" name="password" placeholder="كلمة المرور">
                    <input type="submit" name="update" value="حفظ">
                </form>
            </div>
        </section>

        <section class="messages sec" id="messages">
            <table>
                <tr>
                    <th>الرقم</th>
                    <th>اسم المستخدم</th>
                    <th>الرسالة</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>usernmae1</td>
                    <td>saleلبلبلبلبلبللب</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>usernmae1</td>
                    <td>saleلبلبلبلبلبللب</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>usernmae1</td>
                    <td>saleلبلبلبلبلبللب</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>usernmae1</td>
                    <td>saleلبلبلبلبلبللب</td>
                </tr>
            </table>
        </section>

        <section class="properties sec" id="porperties">
            <table>
                <tr>
                    <th>الرقم</th>
                    <th>نوع العقار</th>
                    <th>نوع العقد</th>
                    <th>عدد الغرق</th>
                    <th>المساحة</th>
                    <th>العنوان</th>
                    <th>المعلن</th>
                    <th>الصورة</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>شقة</td>
                    <td>بيع</td>
                    <td>3غرفة</td>
                    <td>200 متر مربع</td>
                    <td>بحري شمبات</td>
                    <td>احمد محمد</td>
                    <td>صورة</td>
                </tr>
            </table>
        </section>

        <section class="admins sec" id="admins">
            <h1>المدراء</h1>
            <div>
                <img src="images/city.png" alt="pic">
                <h4>admin name</h4>
                <span>رسالة</span>
                <span>حذف</span>
            </div>
            <div>
                <img src="images/city.png" alt="pic">
                <h4>admin name</h4>
                <span>رسالة</span>
                <span>حذف</span>
            </div>
            <div>
                <img src="images/city.png" alt="pic">
                <h4>admin name</h4>
                <span>رسالة</span>
                <span>حذف</span>
            </div>
        </section>

        <section class="users sec" id="users">
            <h1>المستخدمين</h1>
            <div>
                <img src="images/city.png" alt="pic">
                <h4>admin name</h4>
                <span>رسالة</span>
                <span>حذف</span>
            </div>
            <div>
                <img src="images/city.png" alt="pic">
                <h4>admin name</h4>
                <span>رسالة</span>
                <span>حذف</span>
            </div>
            <div>
                <img src="images/city.png" alt="pic">
                <h4>admin name</h4>
                <span>رسالة</span>
                <span>حذف</span>
            </div>
        </section>

    </div>
</body>
</html>