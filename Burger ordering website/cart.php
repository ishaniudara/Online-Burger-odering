<?php 
session_start();
require_once('inc/connection.php'); 
require 'item.php';
date_default_timezone_set('Asia/Colombo');
$date = date('Y-m-d H:i:s');

$quantity;
$id;

if(isset($_POST['Box1'])){
    $id=1;
    $quantity=$_POST['quantity'];

  
}

else if(isset($_POST['Box2'])){
    $id=2;
    $quantity=$_POST['quantity'];
   
}
else if(isset($_POST['Box3'])){
    $id=3;
    $quantity=$_POST['quantity'];
}
else if(isset($_POST['Box4'])){
    $id=4;
    $quantity=$_POST['quantity'];
}
else if(isset($_POST['Box5'])){
    $id=5;
    $quantity=$_POST['quantity'];
}
else if(isset($_POST['Box6'])){
    $id=6;
    $quantity=$_POST['quantity'];
}
else if(isset($_POST['Box7'])){
    $id=7;
    $quantity=$_POST['quantity'];
}
else if(isset($_POST['Box8'])){
    $id=8;
    $quantity=$_POST['quantity'];
}
else if(isset($_POST['Box9'])){
    $id=9;
    $quantity=1;
}
else if(isset($_POST['Box10'])){
    $id=10;
    $quantity=1;
}
else if(isset($_POST['Box11'])){
    $id=11;
    $quantity=1;
}
else{}

    $query = "SELECT * FROM products WHERE Product_Id ='".$id."'";
    $result = mysqli_query($connection,$query);
    $product = mysqli_fetch_object($result);

    if($product != ''){
       // $_SESSION['counter']++;

        $name= $product->Product_Name;
        if($quantity==0){$quantity=1;}
        $qty = $quantity;
        $price = $product->Price;
        $total = $price * $qty;
    
        $item=new item();
        $item->time=$date;
        $item->name=$name;
        $item->quantity=$qty;
        $item->price=$price;
        $item->total=$total;
        $_SESSION['orders'][]=$item;
    }    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style4.css"/>  
    <script type="text/javascript">
function goBack() {
  window.history.back();
}
</script>
    <title>Burger | Cart</title>
</head>
<body>
<img src="images/logo.png" width="150" height="150" style="margin-left: 50px;">

<table  align="center">
        <tr>
            <th class="c1">Date/Time</th>
            <th class="c2">Name</th>
            <th class="c3">Quantity</th>
            <th class="c4">Price</th>
            <th class="c4">Sub Total</th>
        </tr>
        <?php
           // $now = new DateTime(null, new DateTimeZone('Asia/Colombo'));
           date_default_timezone_set('Asia/Colombo');
           $date = date('Y-m-d H:i:s');
            $cart=unserialize(serialize($_SESSION['orders']));
            $tot=0;
            for($i=0;$i<count($cart);$i++){ 
                $tot=$tot+$cart[$i]->total;
        ?>
                <tr>
                    <td class="c1"><?php echo $cart[$i]->time; ?></td>
                    <td class="c2"><?php echo $cart[$i]->name; ?></td>
                    <td class="c3"><?php echo $cart[$i]->quantity; ?></td>
                    <td class="c4"><?php echo "Rs.".$cart[$i]->price.".00"; ?></td>
                    <td class="c4"><?php echo "Rs.".$cart[$i]->total.".00"; ?></td>
                </tr>


            <?php } ?>
            <tr  style="height:50px;font-size:25px;">
                <th class="c4" colspan="5">Total - <?php echo "Rs.".$tot.".00"; ?></th> 
            </tr>
           
        </table>
        <center>
       <a href="index1.php"> <button id="btn">Logut</button></a>
       <button id="btn" onclick="goBack()">Order More</button>
       <a href=""> <button id="btn">Buy</button></a>
    </center>
</body>
</html>

<?php mysqli_close($connection); ?> 