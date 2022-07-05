<?php 
include ('connection.php');
mysqli_select_db($con, 'extera');

 if(isset($_POST['register'])) {
    function check($var){
        $var = trim($var);
        $var = strip_tags($var);
        $var = htmlspecialchars($var);
        $var = stripcslashes($var);
        return $var;
    }

    $firstname = check($_POST['firstname']);
    $lastname = check($_POST['lastname']);
    $username = check($_POST['signupUsername']);
    $email = check($_POST['signupEmail']);
    $password = check($_POST['signupPassword']);

   
 $sql = "insert into users (firstname, lastname, username, email, password, picture)
    values ('$firstname', '$lastname',  '$username','$email', '$password', 'images/user.png')";
    $result = mysqli_query($con, $sql);
    if(!$result) {
        echo 'Something gone wrong! try agin!'.mysqli_error($con);
    } else {
       //echo "your regsiteration done successfully".header('location: login.php')."<br/>";
       echo "welcome in extera";
       echo "firstname:".$firstname." lastname:".$lastname."username:".$username." email:".$email." password:".$password;
    }
     
 }
mysqli_close($con);
?>

