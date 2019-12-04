<?php require_once('../inc/connection.php'); ?>
<?php 

session_start();

$uname=$_POST['name'];
$password =($_POST['pwd']);
$pass = sha1($password);



$chosing="SELECT * FROM users WHERE User_Name='".$uname."' AND Password='".$pass."'";
$result=mysqli_query($connection,$chosing);
$validity=mysqli_num_rows($result);
//printf("Result set has %d rows.\n", $validity);

if($validity==1){

    $_SESSION['username'] = $uname;
    header('Location: ../web.php');
    exit();
}
else{
    
    header('Location: ../index1.php');
    exit();
}


?>
<?php mysqli_close($connection); ?>