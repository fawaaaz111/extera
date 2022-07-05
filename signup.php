<?php 
include ('connection.php');
   
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
    $username = check($_POST['username']);
    $email = check($_POST['email']);
    $password = check($_POST['password']);
   
 $sql = "insert into users (firstname, lastname, username, email, password)
    values('$firstname', '$lastname',  '$username','$email', '$password')";
    $result = mysqli_query($con, $sql);
    if(!$result) {
        echo 'Something gone wrong! try agin!'.mysqli_error($con);
    } else {
       //echo "your regsiteration done successfully".header('location: login.php')."<br/>";
       echo "welcome in extera";
    }
     
}
mysqli_close($con);

?>