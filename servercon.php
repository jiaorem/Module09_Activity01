<?php
$dbconnect = mysqli_connect("localhost","pdc20_user","123","pdc20");
if(mysqli_connect_error()){
    echo "failed to connect to MYSQL " . mysqli_connect_error();
    die();
}
?>