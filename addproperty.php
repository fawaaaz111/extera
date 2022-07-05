<?php 
include ('connection.php');
mysqli_select_db($con, 'extera');
   
 if(isset($_POST['Add'])) {

    function check($var){
        $var = trim($var);
        $var = strip_tags($var);
        $var = htmlspecialchars($var);
        $var = stripcslashes($var);
        return $var;
    }

   $type = check($_POST['Type']);
   $space = check($_POST['Space']);
   $price = check($_POST['Price']); 
   $address = check($_POST['Address']);
   $contractType = check($_POST['ContractType']);
   $date = check($_POST['Date']);
   $propertyImage = check($_FILES['propertyImage']['name']);
   $tmp_name = $_FILES['propertyImage']['tmp_name'];
   $folder = "All_images/".$propertyImage;
   //move the images to the folder
   move_uploaded_file($tmp_name, $folder);


 $sql = "insert into properties (type, space, price, address, contractType, date, image)
    values ('$type', '$space',  '$price','$address', '$contractType', '$date', '$folder')";
    $result = mysqli_query($con, $sql);
    if(!$result) {
        echo 'Something gone wrong! try agin!'.mysqli_error($con);
    } else {
       //echo "your regsiteration done successfully".header('location: login.php')."<br/>";
       echo "<javascript type='text/javascript'>alert('<span class='success'>لقد تم إضافة عقارك.</span>');</javascript>";
    }
     
 }
mysqli_close($con);
?>

