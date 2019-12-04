<?php

$connection = mysqli_connect('localhost','root','','burger_shop');

if (mysqli_connect_errno()) {
    die('Database Connection failed'.mysqli_connect_error());
} else {
    //echo "Connection Successful";
}

?>