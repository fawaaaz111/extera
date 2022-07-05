 <?php
   include ('connection.php');
    mysqli_select_db($con, 'extera');
    if(isset($_POST['login'])) {
        session_start();
        $username = $_POST['Username'];
        $password = $_POST['Password'];
        $sql = "select * from users where username ='$username' AND password = '$password' limit 1";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) == 1){
            $users =  mysqli_fetch_all($result, MYSQLI_ASSOC);
            mysqli_free_result($result);
            foreach($users as $user) {
                if($username == $_SESSION['username'] && $password ==$_SESSION['password']) {
                    echo "you have logged in."." username is:".$_SESSION['username']." and password is:".$_SESSION['password'];
                } else {
                    echo "username dose not exists.";
                }
            }
            
            exit();
        } else{
            echo "something gone wrong. try again!".mysqli_error($con);
            exit();
        }
    }
    
    mysqli_close($con);
    ?>