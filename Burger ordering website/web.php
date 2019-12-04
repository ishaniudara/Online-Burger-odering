<?php
session_start();
if ($_SESSION['username'] == '') {
    header("location: login.html");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

     <link rel="stylesheet" type="text/css" href="css/style3.css"/>  
     <!-- <script type="text/javascript" src="js/cart.js"></script>  -->
	 

</head>
<body>
	<header>
	<img src="images/logo.png" width="150" height="150" style="margin-left: 50px">

 <nav class="menu" id="nav">
 	<ul>
 		<li><a href="logout.php" style="margin-left:40px;font-size:15px;margin-right:20px">Logout  <img src="images/logout.png" onclick="show()" alt="logo" style="width:25px;"></a></li>
 		
 				<li><a href="cart.php" style="font-size:17px;" >Cart  <img src="images/cart-logo.png" onclick="show()" alt="logo" style="width:25px;">                       </a></li>
                 <li style="float: right;margin-right:120px;font-family: cursive"><a href="#"> <span style="font-size: 21px;font-family: cursive;">WELCOME <?PHP echo $_SESSION['username']; ?></span></a></li>

 	</ul>
	
	<!--<div class="row">
                    <div class="col-sm-4">
                        <li><a href="logout.php">Logout</a></li>
                    </div>
					<div class="col-sm-4">
                       <li><a href="cart.php">Cart</a></li>
                    </div>

                    <div class="col-sm-4">
                        <li ><a href="">WELCOME  <?PHP echo $_SESSION['username']; ?></a></li>

                    </div>
                </div>
-->
 </nav>
 
</header>
 <article>

 	

				<div id="Box">
                    <img id="img" src="images/img-9.jpg">
                    <h5>Super BBQ Cheeseburger</h5>
                    <h6>Rs.790.00</h6>
                    
                    <form action="cart.php" method="POST">
                    <h6>Enter quantity below :</h6>
                    <input type="text" name="quantity" placeholder="1" style="background-color: #99ccff; color:darkred; width: 30%; padding: 0; margin: 0; border: none; text-align: center;">
                    
                     <p><button type="submit" name="Box1" class="button">Add to Cart</button></p>

                     </form>
                </div>

               
            
             <div id="Box">
                    <img id="img" src="images/b1.png">
                    <h5>veggie burger</h5>
                    <h6>Rs.350.00</h6>
                   <form action="cart.php" method="POST">
                        <h6>Enter quantity below :</h6>
                <input type="text" name="quantity" placeholder="1" style="background-color: #99ccff; color:darkred; width: 30%; padding: 1px; margin: 0; border: none; text-align: center;">
                     <p><button type="submit" name="Box2" class="button">Add to Cart</button></p>
                </form>
            </div>

            <div id="Box">
                    <img id="img" src="images/b2.jpg">
                    <h5>Whopper beef burger</h5>
                    <h6>Rs.550.00</h6>
                   <form action="cart.php" method="POST">
                        <h6>Enter quantity below :</h6>
                    <input type="text" name="quantity" placeholder="1" style="background-color: #99ccff; color:darkred; width: 30%; padding: 0; margin: 0; border: none; text-align: center;">
                     <p><button type="submit"  name="Box3" class="button">Add to Cart</button></p>
                    </form>
                </div>

            <div id="Box">
                    <img id="img" src="images/img-11.jpg">
                    <h5>Big king beef burger</h5>
                    <h6>Rs.670.00</h6>
                   <form action="cart.php" method="POST">
                        <h6>Enter quantity below :</h6>
                    <input type="text" name="quantity" placeholder="1" style="background-color: #99ccff; color:darkred; width: 30%; padding: 0; margin: 0; border: none; text-align: center;">
                     <p><button type="submit"  name="Box4" class="button">Add to Cart</button></p> 
                        </form>
                    </div>
        
                <div id="Box">
                    <img id="img" src="images/img-10.jpg">
                    <h5>Chili chicken cheese burger</h5>
                    <h6>Rs.920.00</h6>
                   <form action="cart.php" method="POST">
                        <h6>Enter quantity below :</h6>
                    <input type="text" name="quantity" placeholder="1" style="background-color: #99ccff; color:darkred; width: 30%; padding: 0; margin: 0; border: none; text-align: center;">
                     <p><button type="submit"  name="Box5" class="button">Add to Cart</button></p>
                    </form>
            </div>

              <div id="Box">
                    <img id="img" src="images/img-7.jpg">
                    <h5>Double whopper burger</h5>
                    <h6>Rs.1050.00</h6>
                   <form action="cart.php" method="POST">
                        <h6>Enter quantity below :</h6>
                    <input type="text" name="quantity" placeholder="1" style="background-color: #99ccff; color:darkred; width: 30%; padding: 0; margin: 0; border: none; text-align: center;">
                     <p><button type="submit"  name="Box6" class="button">Add to Cart</button></p>
                    </form>
            </div>

           <div id="Box">
                    <img id="img" src="images/img-8.jpg">
                    <h5>Beef burger</h5>
                    <h6>Rs.850.00</h6>
                   <form action="cart.php" method="POST">
                        <h6>Enter quantity below :</h6>
                    <input type="text" name="quantity" placeholder="1" style="background-color: #99ccff; color:darkred; width: 30%; padding: 0; margin: 0; border: none; text-align: center;">
                     <p><button type="submit"  name="Box7" class="button">Add to Cart</button></p>
                     </form>
                </div>

              <div id="Box">
                    <img id="img" src="images/img-6.jpg">
                    <h5>Spicy chicken burger</h5>
                    <h6>Rs.790.00</h6>
                   <form action="cart.php" method="POST">
                        <h6>Enter quantity below :</h6>
                    <input type="text" name="quantity" placeholder="1" style="background-color: #99ccff; color:darkred; width: 30%; padding: 0; margin: 0; border: none; text-align: center;">
                     <p><button type="submit"  name="Box8" class="button">Add to Cart</button></p>
                     </form>
                </div>

                <div id="Box">
                    <h3>King Deals</h3>
                    <img id="img" src="images/offer1.jpg" alt=""> 
                        
                            <h5>Large Crispy Chicken Burger + French Fries + Pepsi</h5>
                            <h6>Valid till Jan 25 <b>Rs.580.00 only</b><br/>
                                <br>

                            </h6>
                           <form action="cart.php" method="POST">
                            <p><button type="submit" id="btn" name="Box9" class="button">GRAB IT!!</button></p>
                            </form>
                </div>

                
                <div id="Box">
                    <h3>Value Deals</h3>
                    <img id="img" src="images/offer2.jpg" alt=""> 
                        
                            <h5>Bacon and Cheese Burger + French Fries
                                <br/> + Coke</h5>
                            <h6>Valid till Jan 25 <b>Rs.420.00 only</b><br/>
                                <br>

                            </h6>
                           <form action="cart.php" method="POST">
                            <p><button type="submit"  id="btn" name="Box10" class="button">GRAB IT!!</button></p>
                            </form>
                </div>

                <div id="Box">
                    <h3>Budget Pack</h3>
                    <img id="img" src="images/offer3.jpg" alt=""> 
                        
                            <h5>Buy 1 Bacon 3 way<br/>
                                Get 1 Free</h5>
                            <h6>Valid till Jan 25 <b>Rs.480.00 only</b><br/>
                                <br>

                            </h6>
                           <form action="cart.php" method="POST">
                            <p><button type="submit" id="btn"  name="Box11" class="button">GRAB IT!!</button></p>
                            </form>
                </div>

                
                <div id="Box2">
                    <br/>
                    <a  href="cart.php" ><img src="images/cart-logo.png" alt="logo" height="200" width="200"></a>
                </div>

                
           


</article>


</body>
</html>

 