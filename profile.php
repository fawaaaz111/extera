<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="profile.css" type="text/css" media="screen">
    <title>my profile</title>
</head>
<body>
    <div class="my-profile">
        <div class="pro-content">
            <div class="us-name-img">
                <div class="img">
                    <img src="images/city.png" alt="">
                </div>
                <span>username</span>
                <div class="opreations">
                    <ul class="opreations-content">
                        <li data-target="#my-posts" class="item"><a href="#">المنشورات</a></li>
                        <li data-target="#my-sales" class="item"><a href="#">المبيعات</a></li></li>
                        <li data-target="#my-bought" class="item"><a href="#">المشتريات</a></li></li>
                        <li data-target="#my-rents" class="item"><a href="#">الإيجارات</a></li></li>
                    </ul>
                </div>
            </div>
           
            <ul class="pro-info"> 
                <li data-target="#account" class="item"><i class="fa fa-user-o"></i> <a href="">تعديل الحساب</a></li>
                <li data-target="#messages" class="item"><i class="fa fa-bell-o"></i> <a href="">الرسائل</a></li>
                <li data-target="#my-properties" class="item"><i class="fa fa-building"></i>  <a href="">عقاراتي</a></li>
                <li data-target="#add-property" class="item"><i class="fa fa-plus-circle"></i> <a href="">إضافة عقار</a></li>
                <li data-target="#my-customers" class="item"><i class="fa fa-users"></i> <a href="">الزبائن</a></li>
                <li><i class="fa fa-cog"></i> <a href="">الإعدادات</a></li>
                <li><i class="fa fa-sign-out"></i> <a href="">تسجيل خروج</a></li>
            </ul> 

            <div class="all-content">

                <section class="account" id="account">
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

                <section class="messages" id="messages">
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

                <section class="properties" id="my-properties"></section>

                <section class="add-property" id="add-property">
                    <h3>إضافة عقار جديد</h3>
                    <form action="addproperty.php" method="post" enctype="multipart/form-data">
                        <input type="text" name="Type" placeholder="نوع العقار">
                        <input type="text" name="Space" placeholder="المساحة">
                        <input type="text" name="Price" placeholder="السعر">
                        <input type="text" name="Address" placeholder="العنوان">
                        <input type="text" name="ContractType" placeholder="نوع العقد">
                        <input type="datetime-local" name="Date" placeholder="التاريخ">
                        <input type="file" name="propertyImage"  value="ارفق صورة" id="" multiple="multiple" >
                        <button class="add-prop" name="Add">إضافة</button>
                    </form>
                </section>

                <section class="customers sec" id="my-customers">
                        <table>
                            <tr>
                                <th>الرقم</th>
                                <th>المستخدم</th>
                                <th>الحالة</th>
                                <th>الزمن</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>usernmae1</td>
                                <td>sale</td>
                                <td>2020/2/12</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>username2</td>
                                <td>buy</td>
                                <td>2020/03/13</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>usernmae3</td>
                                <td>sale</td>
                                <td>2020/2/12</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>username4</td>
                                <td>buy</td>
                                <td>2020/03/13</td>
                            </tr>
                        </table>
                </section>
                <section class="sales sec" id="my-sales">
                    <table>
                        <tr>
                            <th>الرقم</th>
                            <th>العقار</th>
                            <th>المشتري</th>
                            <th>المبلغ</th>
                            <th>الزمن</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>buy</td>
                            <td>usernmae1</td>
                            <td>sale</td>
                            <td>2020/2/12</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>buy</td>
                            <td>username2</td>
                            <td>buy</td>
                            <td>2020/03/13</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>usernmae3</td>
                            <td>sale</td>
                            <td>buy</td>
                            <td>2020/2/12</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>buy</td>
                            <td>username4</td>
                            <td>buy</td>
                            <td>buy</td>
                        </tr>
                    </table>
                </section>

                <section class="bought sec" id="my-bought">
                    <table>
                        <tr>
                            <th>الرقم</th>
                            <th>العقار</th>
                            <th>البائع</th>
                            <th>المبلغ</th>
                            <th>الزمن</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>buy</td>
                            <td>usernmae1</td>
                            <td>sale</td>
                            <td>2020/2/12</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>buy</td>
                            <td>username2</td>
                            <td>buy</td>
                            <td>2020/03/13</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>usernmae3</td>
                            <td>sale</td>
                            <td>buy</td>
                            <td>2020/2/12</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>buy</td>
                            <td>username4</td>
                            <td>buy</td>
                            <td>buy</td>
                        </tr>
                    </table>
                </section>

                <section class="rented sec" id="my-rents"></section>
                <section class="posts sec" id="my-posts"></section>
            </div>

        </div>
    </div>

    <script>
        const items = document.querySelectorAll('.item');
        const sections = document.querySelectorAll('.sec');

        items.forEach(item =>  {
            item.addEventListener('click', e => {
                e.preventDefault();
        
                  if(e.target == item) {
                      const targetSection = document.querySelector(e.target.dataset.target);

                      sections.forEach(section => {
                          if(section == targetSection) {
                            section.classList.add('active');
                  } else {
                      section.classList.remove('actvie');
                  }
                      });
                    }
            });          

        });

    </script>
</body>
</html>