<?php require_once('inc/connection.php'); ?>
<?php
if (isset($_POST['submit'])) {
    $password = $_POST['pwd'];
    $cpassword = $_POST['cpwd'];

    if ($password == $cpassword) {

        $username = $_POST['name'];
        $address = $_POST['addrs'];
        $tel = $_POST['phone'];
       $pwd = sha1($password);
        
        
        $query = "INSERT INTO users (User_Name,Password,Address,Contact_No) VALUES('{$username}','{$pwd}','{$address}','{$tel}')";
$result = mysqli_query($connection,$query);

if ($result) {
    header('Location: login.html');
} else {
    echo "Database query failed";
}
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style2.css" rel="stylesheet">
     
       <script type="text/javascript">
       var check = function() {
     var pwd = document.getElementById('password').value;
     var cpwd =  document.getElementById('confirm_password').value;
      if(pwd == cpwd) {
          if(pwd!='' && cpwd!=''){
    
     document.getElementById('message').style.cssText="color:green;font-weight: bold;text-align:right";
      document.getElementById('message').innerHTML = 'Passwords matching';
          }
      }
    
    else if(pwd=='' && cpwd==''){
        
        document.getElementById('message').style.cssText="color:red;font-weight: bold;text-align:right";
        document.getElementById('message').innerHTML = 'Enter password';
          
      }
    else{
        
      document.getElementById('message').style.cssText="color:red;font-weight: bold;text-align:right";
      document.getElementById('message').innerHTML = 'Passwords not matching';
        
    }
  }
       </script>
    </head>
    <body>
        <div class="container"> 
            <img src="images/logo.png" width="150" height="150" style="float:left;">
            <form id="contact" action="register.php" method="post">
                <h3 style="float: right;font-weight: bold">Register</h3>
                <fieldset>
                    <input placeholder="User name" type="text" name="name"required autofocus>
                </fieldset>
                <fieldset>
                    <input placeholder="Address" name="addrs" type="text"  required>
                </fieldset>
                <fieldset>
                    <input placeholder="Phone" name="phone" type="tel" pattern="[0-9]{10}" required>
                </fieldset>
                <fieldset>
                    <input placeholder="Password" name="pwd" type="password" id="password" onkeyup='check();' />
                </fieldset>
                <fieldset>
                    <input placeholder="Conform Password" name="cpwd" id="confirm_password" onkeyup='check();' type="password" />
                    <p id="message"></p>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                    <a href="index1.php" class="button">Back to Home</a>
                </fieldset>
            </form>
        </div>
    </body>
</html>
<?php mysqli_close($connection); ?> 