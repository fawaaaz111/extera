<?php
$con = mysqli_connect('localhost', 'root', '', 'extera');
if($con) {
echo "done";
} else {
    echo "content error:". mysqli_error();
}
?>

