<?php 
session_start();
require_once("connect.php");
$connection = mysqli_connect("localhost", "GEAtu", "6M4a96xdWYmz", "GEAtu");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UClan Student Shop</title>
    <!--Stylesheet-->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--Uclan student shop icon-->
    <link rel ="Shortcut Icon" href="UClanIcon3.png"/>
    <script src="https://kit.fontawesome.com/fcf5dfb0cf.js" crossorigin="anonymous"></script> <!--W3Schools-->

</head>
<body>
<!--Navigation Bar Section-->
<nav class = "navbar navbar-custom">
    <div class = "container-fluid">
        <div class = "navbar-header">
          <button type ="button" class="navbar-toggle" data-toggle ="collapse" data-target = "#myNavbar">
          <span class ="icon-bar"></span>
          <span class  ="icon-bar"></span>
          <span class ="icon-bar"></span> 
          <span class ="icon-bar"></span>                        
          </button>
          <img src="UClanIcon3.png" alt ="UClanIcon3" class = "img-responsive float-start"  width = "350" height = "100">
        </div>
        <h1 class = "navbar-text">Student Shop</h1>
      <div class = "collapse navbar-collapse" id = "myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <ul class = "nav navbar-nav">
            <li><a  href="Assessment1.php">Home</a></li>
            <li><a href="Products.php">Products</a></li>
            <li class = "active"><a href="CartPage.php">Cart</a></li>
            <?php
            if(!isset($_SESSION["user_id"]))
            {
                echo "<li><a href='Signup.php'><span class = 'glyphicon glyphicon-user'></span>Sign up</a></li>";
            }
            else
            {
                echo "<li><a href='CartPage.php?action=logout'><span class='glyphicon glyphicon-log-in'></span>Log out</a></li>";
                if(isset($_GET["action"]))
                {
                   if($_GET["action"] == "logout")
                     {
                       echo"<script>alert('You have successfully logged out')</script>";
                       unset($_SESSION["user_id"]);
                     }
                }
            }
            ?>
             </ul>
          </ul>
      </div>
    </div>
</nav>
<style>
    html{
    height: 100%;
}
*{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
    font-family: sans-serif;
}
body{
    font-family: sans-serif;
    min-width: 100%;
    display: flex;
    flex-direction: column;
}

 .ItemsBox{
    position: relative;
    height: calc(100% - 15vh);
    width: 90%;
    margin: 0 auto;
    display: grid;
    grid-template-columns: auto auto auto;
    grid-gap: 10px;
    padding: 10px 25px;
    object-fit: contain;
}
 .ItemsBox .Item{
    position: relative;
    height: 100%;
    width: 100%;
    padding: 10px 25px;
    object-fit: contain;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
}
 .ItemsBox .Item img{
    position: relative;
    height: 50%;
    width: 100%;
    object-fit: contain;
}
 .ItemsBox .Item .name{
    position: relative;
    width: 100%;
    text-align: center;
    font-size: 1.2rem;
    font-weight: bolder;
    padding: 10px 0;
    object-fit: contain;
}
 .ItemsBox .Item .money{
    position: relative;
    width: 100%;
    text-align: right;
    font-size: 1.2rem;
    font-weight: bolder;
    padding: 10px 0;
    color: blue;
    object-fit: contain;
}
 .ItemsBox .Item .Description{
    position: relative;
    width: 100%;
    text-align: center;
    padding: 10px 0;
    object-fit: contain;
}
 .ItemsBox .Item .AddToCart{
    position: relative;
    text-align: left;
    font-size: 1.2rem;
    font-weight: bold;
    padding: 10px 0;
    background: black;
    object-fit: contain;
    text-decoration: none;
    color: aliceblue;
    padding: 10px 15px;
    text-shadow: 0px 0px 2px rgba(0, 0, 0, 0.5);
}
 .ItemsBox .Item .product-quantity{
    position: relative;
    text-align: right;
    font-size: 0.8rem;
    font-weight: bold;
    padding: 10px 0;
    background: black;
    object-fit: contain;
    text-decoration: none;
    color: aliceblue;
    padding: 10px 15px;
    text-shadow: 0px 0px 2px rgba(0, 0, 0, 0.5);
}
.searchbox{
    margin-left: 0;
    line-height: 40px;
    font-weight: bold;
    padding-left:30px 30px 30px 30px;
    float: left;
    color: #BE1622;
    
}

 .ItemsBox .Item a:hover{
    background: #0f0f0fa5;
}/*Fully World Web Tutorials YouTube, Accessed on 23rd November, 2021.*/


  @media(max-width: 990px){
     .ItemsBox .Item .name{
        position: relative;
        width: 100%;
        text-align: center;
        font-size: 0.8rem;
        font-weight: bolder;
        padding: 10px 0;
        object-fit: contain;
    }
     .ItemsBox .Item img{
        position: relative;
        height: 40%;
        width: 100%;
        object-fit: contain;
    }
    
    .ItemsBox .Item .money{
        position: relative;
        width: 100%;
        text-align: right;
        font-size: 15px;
        font-weight: bolder;
        padding: 10px 0;
        color: blue;
        object-fit: contain;
    }
     .ItemsBox .Item .Description{
        position: relative;
        width: 100%;
        text-align: center;
        padding: 10px 0;
        object-fit: contain;
    }
  .Description{
      font-size: 15px;
  }
  .money{
      font-size: 10px;
  }
  span{
      font-size: 10px;
  }
  .AddToCart{
      font-size: 5px;
  }
   .ItemsBox .Item .AddToCart{
    position: relative;
    text-align: left;
    font-size: 0.5rem;
    font-weight: bold;
    padding: 10px 0;
    background: black;
    object-fit: contain;
    text-decoration: none;
    color: aliceblue;
    padding: 10px 15px;
    text-shadow: 0px 0px 2px rgba(0, 0, 0, 0.5);
}
@media (max-width:828px) {
     
     .ItemsBox .Item .name{
        position: relative;
        width: 100%;
        text-align: center;
        font-size: 1.0rem;
        font-weight: bolder;
        padding: 10px 0;
        object-fit: contain;
    }
     .ItemsBox .Item img{
        position: relative;
        height: 50%;
        width: 100%;
        object-fit: contain;
    }
      .ItemsBox{
        position: relative;
        height: calc(100% - 15vh);
        width: 90%;
        margin: 0 auto;
        display: grid;
        grid-template-columns: auto auto;
        grid-gap: 10px;
        padding: 10px 25px;
        object-fit: contain;
    }


     .ItemsBox .Item .AddToCart{
        position: relative;
        text-align: left;
        font-size: 0.6rem;
        font-weight: bold;
        padding: 10px 0;
        background: black;
        object-fit: contain;
        text-decoration: none;
        color: aliceblue;
        padding: 10px 15px;
        text-shadow: 0px 0px 2px rgba(0, 0, 0, 0.5);
    }
}
}
@media (max-width:639px) {

    .Description{
        font-size: 10px;
    }
    span{
        font-size: 10px;
    }
     .ItemsBox .Item .AddToCart{
        position: relative;
        text-align: left;
        font-size: 0.8rem;
        font-weight: bold;
        padding: 10px 0;
        background: black;
        object-fit: contain;
        text-decoration: none;
        color: aliceblue;
        padding: 10px 15px;
        text-shadow: 0px 0px 1px rgba(0, 0, 0, 0.5);
    }
     .ItemsBox .Item .name{
        position: relative;
        width: 100%;
        text-align: center;
        font-size: 0.8rem;
        font-weight: bolder;
        padding: 10px 0;
        object-fit: contain;
    }
     .ItemsBox .Item img{
        position: relative;
        height: 35%;
        width: 100%;
        object-fit: contain;
    }
}
@media (max-width:427px) {
     .ItemsBox{
        position: relative;
        height: calc(100% - 15vh);
        width: 90%;
        margin: 0 auto;
        display: grid;
        grid-template-columns: auto ;
        grid-gap: 10px;
        padding: 10px 25px;
        object-fit: contain;
    }
}

  
.ItemsPage{
    text-align: center;
    text-decoration: solid;
    color: #007FB0;
}
.ItemsPage a:hover{

    border-radius: 0.5em;
    
}
.ItemsPage a{
    color:black;
}


    .navbar-custom 
    {
       background-color: darkred;
    }
    ul.nav li a, ul.nav li a:visited 
    {
       color: white;
    }
    ul.nav li a:hover, ul.nav li a:active 
    {
        color: blue !important;
    }
    ul.nav li.active a 
    {
      color: blue !important;
    }
    .navbar-custom .navbar-toggle .icon-bar 
    {
      background-color: white;
    }
    .navbar-custom .navbar-text 
    {
      color: white;
    }
    .login-box
    {
    margin-left: 0px;
    }
    .sign-up
   {
    background: rgba(211, 211, 211, 0.5);
    padding: 30px;
   }
    
    
   body 
{
   margin: 0;
   font-family: Arial, Helvetica, sans-serif;
   background: #ffffff;
}
 
a{
    transition: .3s;
}

a:hover,
a:active,
a:focus {
    outline: none;
    text-decoration: none;
}

.footer {
    position: relative;
    bottom: -300px;
    background: darkcyan;
}

.footer .footer-about,
.footer .footer-contact,
.footer .footer-links,
.footer .footer-project {
    position: relative;
    margin-bottom: 45px;
    color: #999999;
}

.footer .footer-about h3,
.footer .footer-contact h3,
.footer .footer-links h3,
.footer .footer-project h3 {
    position: relative;
    margin-bottom: 20px;
    padding-bottom: 10px;
    font-size: 20px;
    font-weight: 600;
    color: #eeeeee;
}

.footer .footer-about h3::after,
.footer .footer-contact h3::after,
.footer .footer-links h3::after,
.footer .footer-project h3::after {
    position: absolute;
    content: "";
    width: 50px;
    height: 2px;
    left: 0;
    bottom: 0;
    background: #eeeeee;
}
.footer .footer-social {
    position: relative;
    margin-top: 20px;
}

.footer .footer-social a {
    text-align: center;
    color: #999999;
    font-size: 14px;
    border: 1px solid #999999;
    display: inline-block;
    width: 35px;
    height: 35px;
    padding: 6px 0;
    border-radius: 35px;
}


.footer .footer-social a:hover {
    color: #ffffff;
    background: #0085ff;
    border-color: #0085ff;
}
.footer .footer-contact p {
    margin-bottom: 10px;
    font-size: 16px;
    color: #999999;
}

.footer .footer-contact i {
    margin-right: 10px;
    font-size: 16px;
    color: #999999;
}

.footer .footer-contact a:last-child i {
    margin: 0;
}

.footer .footer-contact a:hover i {
    color: #0085ff;
}
.footer .footer-links a {
    margin-bottom: 6px;
    padding-left: 15px;
    color: #999999;
    display: block;
}

.footer .footer-links a:last-child {
    margin: 0;
}

.footer .footer-links a:hover {
    color: #0085ff;
}

.footer .footer-links a::before {
    position: absolute;
    content: "\f105";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    left: 0;
}
.footer .copyright {
    position: relative;
    padding: 25px 0;
    background: #000000;
}

.footer .copyright .copy-text p {
    margin: 0;
    font-size: 16px;
    font-weight: 400;
    color: #999999;
}

.footer .copyright .copy-text p a {
    color: #0085ff;
    text-decoration: none;
}

.footer .copyright .copy-text p a:hover {
    color: #ff008c;
}
    @media (max-width: 767.98px) {
    .footer .copyright .copy-text,
    .footer .copyright .copy-menu {
        text-align: center;
    }
    
    .footer .copyright .copy-text p {
        margin-bottom: 5px;
    }
    
}

</style>

   <div class = "container">
   <?php
    if(isset($_SESSION["user_id"]))
    {
        $userIdCheck = mysqli_query($connection, "SELECT * FROM tbl_users");
       while($rowCheck = mysqli_fetch_array($userIdCheck,MYSQLI_ASSOC))
       {
        if(empty($_SESSION["cart"]))
        {
            if($_SESSION["user_id"] == "".$rowCheck["user_id"]."")
            {
            echo "<h1>Shopping Cart</h1>";
            echo "<p>Welcome ".$rowCheck["user_full_name"].", Your cart is below and it is empty";
            }
        }
        else if (!empty($_SESSION["cart"]))
        {
            if($_SESSION["user_id"] == "".$rowCheck["user_id"]."")
            {
            echo "<h1>Shopping Cart</h1>";
            echo "<p>Welcome ".$rowCheck["user_full_name"].", Your cart is below and you can now check out :)";
            }
        }
       }; // fetch array of all emails in database and compare with set session user id
        
    }
    if(!isset($_SESSION["user_id"]))
    {
        if(empty($_SESSION["cart"]))
        {
            echo "<p>There are no items in your shopping cart. Please add items from our current <a href = 'Products.php'>product list</a></p>";
        }
        else
        {
            echo "<p>There are items in your shopping cart. Please add more items from our current <a href = 'Products.php'>product list</a></p>";
        }
    }
    
    $total = 0;

    if(isset($_POST["AddToCart"]))
    {
        if(isset($_SESSION["cart"]))
        {
            $session_array_id = array_column($_SESSION["cart"], 'id');
            if(!in_array($_POST["hidden_id"], $session_array_id))
            {
                $session_array = array(
                    'id' => $_POST["hidden_id"],
                    'image' => $_POST["hidden_image"],
                    'name' => $_POST["hidden_name"],
                    'desc' => $_POST["hidden_desc"],
                    'price' => $_POST["hidden_price"],
                    'quantity' => $_POST["quantity"]
                );
                $_SESSION["cart"][] = $session_array;
            }
        }
        else
        {
            $session_array = array(
                'id' => $_POST["hidden_id"],
                'image' => $_POST["hidden_image"],
                'name' => $_POST["hidden_name"],
                'desc' => $_POST["hidden_desc"],
                'price' => $_POST["hidden_price"],
                'quantity' => $_POST["quantity"]
            );
            $_SESSION["cart"][] = $session_array;
        }
    }

    
    $cartTable = "";
    $cartTable.= "
    <table class= 'table table-bordered table-striped'>
    <tr>
    <th>ID</th>
    <th>Item Image</th>
    <th>Item Name</th>
    <th>Item Price</th>
    <th>Item Quantity</th>
    <th>Total Price</th>
    <th>Action</th>
    </tr>
    ";

     if(!empty($_SESSION["cart"]))
     {
         foreach($_SESSION["cart"] as $key => $value)
         {
             $cartTable.= "
             <tr>
             <td>".$value["id"]."</td> 
             <td><img class = 'Image' src ='".$value["image"]."' alt ='not found' width ='100' height='100'></td> 
             <td>".$value["name"]."</td>
             <td>".$value["price"]."</td>
             <td>".$value["quantity"]."</td>
             <td>".number_format($value["price"] * $value["quantity"],2)."</td>
             <td>
             <a href = 'CartPage.php?action=remove&id=".$value["id"]."'>
             <button class = 'btn btn-danger btn-block'>Remove</button>
             </a>
             </td>
             </tr>
             ";

             $total = $total + $value["quantity"] * $value["price"];
         }

         $cartTable .= "
         <tr>
         <td colspan= '4'></td>
         <td></b>Total Price</b></td>
         <td>".number_format($total,2)."</td>
         <td>
         <a href = 'CartPage.php?action=clearall'>
         <button class = 'btn btn-warning'>Clear</button>
         </a>
         </td>

         </tr>
         ";
         if(isset($_SESSION["user_id"]))
         {
           $cartTable.= "<tr>
           <td colspan = '6'></td>
           <td><a href = 'CartPage.php?action=checkout&id=".$value["id"]."'>
           <button class = 'btn btn-warning'>Checkout</button>
           </a>
           </td>
           </tr>";
           
         }
     }
     

     echo $cartTable;

    ?>



<div >
    <div>
        <table></table>
    </div>
</div>

<?php 


    if(isset($_GET["action"]))
    {

        if($_GET["action"] == "clearall")
    {
        unset($_SESSION["cart"]);
    }

    if($_GET["action"] == "remove")
    {
        foreach($_SESSION["cart"] as $key => $value)
        {
            if($value["id"] == $_GET["id"])
            {
                unset($_SESSION["cart"][$key]);
            }
                
            
        }
    }

    if($_GET["action"] == "checkout")
    {
        $orderid = rand(1,100);
        $day = rand(1,31);
        $month = rand(1,12);
        $year = rand(2021,2022);
        $hour = rand(1,23);
        $minutes = rand(1,60);
        $seconds = rand(1,60);
        
            foreach($_SESSION["cart"] as $key => $value)
        {
            if($value["id"] == $_GET["id"])
            {
                $stmt = $pdo->prepare("INSERT INTO tbl_orders VALUES('$orderid','$year-$month-$day $hour:$minutes:$seconds','".$_SESSION["user_id"]."','".$value["id"]."')");
                $stmt->bindParam('order_id', $orderid);
                $stmt->bindParam('order_date', $year,$month,$day);
                $stmt->bindParam('user_id',$_SESSION["user_id"] );
                $stmt->bindParam('product_id',$value["id"] );
                $stmt->execute();
                $success = $stmt->rowCount();
                echo "<script>alert('The order with the id ".$value["id"]." has been successfully placed!')</script>";
                unset($_SESSION["cart"][$key]);
            }
            
        }
        
        
        
    }
    
    }
    
    if(!isset($_SESSION["user_id"]))
    {
        echo "<div class = 'container'>";
        echo "<p>In order to checkout you must log in</p>";
        echo "<div class = 'login-box'>";
        echo "<div class = 'col-md-6 sign-up'>";
        echo "<h2>Log in here</h2>";
        echo "<form name ='form' action='CartPage.php' method = 'get'>";
        echo "<div class = 'form-group'>";
        echo "<label>E-mail</label>";
        echo "<input type = 'text' name = 'e-mail' class = 'form-control' required>";
        echo "</div>";
        echo "<div class = 'form-group'>";
        echo "<label>Password</label>";
        echo "<input type ='password' name = 'password' class = 'form-control' required>";
        echo "</div>"; 
        echo "<button type = 'submit' class = 'btn btn-primary'>Log in</button>";
        echo "</form>";
        echo "</div>";
        echo "</div>";
        echo"</div>";

        if(isset($_GET["e-mail"]))
           {
            
            $emailSelect = mysqli_query($connection, "SELECT * FROM tbl_users WHERE user_email != '".$_GET["e-mail"]."' ");
            
            $select = mysqli_query($connection, "SELECT * FROM tbl_users WHERE user_email = '".$_GET["e-mail"]."' ");
        while($row = mysqli_fetch_array($select, MYSQLI_ASSOC))
        {
            if($_GET["e-mail"] == "".$row["user_email"]."")
            {
                if(password_verify($_GET["password"],"".$row["user_pass"].""))
                {
                    echo "<script>alert('Right e-mail and password, you are now logged in!')</script>";
                    echo "<p class = 'alert alert-success alert-dismissible fade in'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    Welcome <strong>".$row["user_full_name"]." </strong>, You have now successfully logged in!";
                    $_SESSION["user_id"] = "".$row["user_id"]."";
                    break;
                    
                }
                else
                {
                    echo "<script>alert('Wrong e-mail or password, please try again')</script>";
                    break;
                }
            }
             
           
        };
        while($emailCheck = mysqli_fetch_array($emailSelect, MYSQLI_ASSOC))
        {
            if($_GET["e-mail"] != "".$row["user_email"]."")
            {
                
                echo "<script>alert('Wrong e-mail or password, please try again')</script>";
                break;
            }
        };
       
        
           }
        
    }

    

?>
   </div>


<!--Footer-->
<!-- Footer Start -->
<div class="footer">
            <div class="container">
                <div class="row">
                   
                    <!--Footer About-->
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-about">
                            <h3>Contact</h3>
                            <p>
                            Email: suinformation@uclan.ac.uk
                            </p>
                            <div class="footer-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>

                     <!--Contact Us-->
                     <div class="col-md-6 col-lg-3">
                        <div class="footer-contact">
                            <h3>Location</h3>
                            <p><i class="fa fa-map-marker-alt"></i>University of Central Lancashire Students' Union
            Flyde Road, Preston, PR1 7BY
            Registered in England
            Company Number: 7623917
            Registered Charity Number: 1142616</p>
                            <p><i class="fa fa-phone-alt"></i>Phone: 01772 89 3000</p>
                            <p><i class="fa fa-envelope"></i>suinformation@uclan.ac.uk</p>
                            <p><i class="far fa-clock"></i>Mon - Fri, 9AM - 10PM</p>
                        </div>
                    </div>
                        <!--Footer Link-->
                        <div class="col-md-6 col-lg-3">
                        <div class="footer-links">
                            <h3>Useful Links</h3>
                            <a href="">Students' Union</a>
                        </div>
                    </div>
                    <!--project Image-->

                </div>
            </div>
            
           <!-- Newswletter -->

            <div class="copyright">
                <div class="container">
                    <div class="row align-items-center">
                        
                      <!--Copy Right-->
                      <div class="col-md-6">
                            <div class="copy-text">
                                <p>&copy; <a href="#">UCLan Developer</a>. All Rights Reserved</p>
                            </div>
                        </div>
                        <!--Footer Menu-->
                        <div class="col-md-6">
                            <div class="copy-menu">
                                <a href="">About</a>
                                <a href="">Terms</a>
                                <a href="">Privacy</a>
                                <a href="">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End --> <!--Code gotten from Foolish developer Accessed 5th April 2022-->
</body>
</html>


    