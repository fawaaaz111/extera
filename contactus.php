<?php 
include ('connection.php');
 mysqli_select_db($con, 'extera');
   
if(isset($_POST['send'])) {

     function check($var){
        $var = trim($var);
        $var = strip_tags($var);
        $var = htmlspecialchars($var);
        $var = stripcslashes($var);
        return $var;
     }

    $fullname = check($_POST['fullname']);
    $_email = check($_POST['cont-email']);
    $text = check($_POST['message']);  

    $sql = "insert into contactus (fullname, email, text)
    values ('$fullname', '$_email', '$text')";
    $result = mysqli_query($con, $sql);
     if(!$result) {
         echo "Something gone wrong! try agin!".mysqli_error($con);
     } else {
           //echo "your regsiteration done successfully".header('location: login.php')."<br/>";
           echo "<script>alert(welcome in extera!)</script>";
     }

    
 }
 mysqli_close($con);
