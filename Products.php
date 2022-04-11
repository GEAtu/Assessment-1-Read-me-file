<?php 
session_start();
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
<!--Alert when item is added-->
<script type = "text/javascript">
        function checkForm(){
            var data = document.forms["form1"]["AddToCart"].value;
            if(data == null || data == "")
            {
                return false;
            }
            else{
                alert("Item has been added to the cart");
                return true;
            }
        }
    </script>
    
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
          <img src="UClanIcon3.png" alt ="UClanIcon3" class = "img-responsive"  width = "350" height = "100">
        </div>
        <h1 class = "navbar-text">Student Shop</h1>
      <div class = "collapse navbar-collapse" id = "myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <ul class = "nav navbar-nav">
            <li><a  href="Assessment1.php">Home</a></li>
            <li class = "active"><a href="Products.php">Products</a></li>
            <li><a href="CartPage.php">Cart</a></li>
            <?php
            if(!isset($_SESSION["user_id"]))
            {
                echo "<li><a href='Signup.php'><span class = 'glyphicon glyphicon-user'></span>Sign up</a></li>";
            }
            else
            {
                echo "<li><a href='Products.php?action=logout'><span class='glyphicon glyphicon-log-in'></span>Log out</a></li>";
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
.searchtab
{
    background-color: darkred;
    color: white;
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
    
    
    
    body 
    {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    background: #ffffff;
    }
 
a {
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
<!--Shopping Cart Area-->




    <div class = "container">
    <div class = "row">
    <div class = "side">
    <div class="ItemsPage">
    <?php 
          echo '<script type = "text/javascript">checkForm()</script>';
         
          echo "<form method = 'get' action = 'Products.php'>";
          echo "<div class = 'searchbox col-sm-12'>";
          echo "<label for = 'searchbox'>";
          echo "<input type = 'search' name = 'action' class= 'searchtab col-sm-12' size = '0.5'><button class = 'searchbutton col-sm-12'>search</button>";
          echo "</label><br>";
          echo "</div>";
          echo "</form>";
      
    ?>
    
    <div class = "col-sm-12">
    <a href = 'Products.php?action=all'><button>All</button></a> <a href = 'Products.php?action=t-shirts'><button>T-Shirts</button></a>  <a href = 'Products.php?action=hoodies'><button>Hoodies</button></a>  <a href = 'Products.php?action=jumpers'><button>Jumpers</button></a>
    </div>
    </div>
        <!--Items Box-->
    <div class = "ItemsBox">
        
        <?php 
    
        
        echo '<script type = "text/javascript">checkForm()</script>';
    
    
        $connection = mysqli_connect("localhost", "GEAtu", "6M4a96xdWYmz", "GEAtu");
        if(mysqli_connect_error())
        {
            echo "Error: Could not load database: ". mysqli_connect_error();
        }
        else
        { 
    
            $select = mysqli_query($connection, "SELECT product_id, product_title, product_desc, product_image, product_price, product_type FROM tbl_products ORDER BY product_id");
        while($row = mysqli_fetch_array($select, MYSQLI_ASSOC))
        {
            if(isset($_GET["action"]))
            {
                if($_GET["action"] == "t-shirts") //Do not enter the while loop if any of this conditions are true
            {
                break;
            }
            else if($_GET["action"] == "all")
                {
                    break;
                }
            else if($_GET["action"] == "jumpers")
            {
                    break;
            }
            else if($_GET["action"] == "hoodies")
            {
                break;
            }
            else if($_GET["action"] == "".$_GET["action"]."")
            {
                break;
            }
            
        
            
            }
            else
            {
            echo "<form name='form1' method = 'post' action = 'CartPage.php?id=".$row["product_id"]."' onsubmit= 'return checkForm()'>";
            echo "<div class = 'Item'>";
            echo "<input type = 'hidden' name = 'hidden_id' value = '".$row["product_id"]."'>";
            echo "<p><img class = 'Image' src = '".$row["product_image"]."' alt ='not found' width ='300' height='350'></p><br>";
            echo "<input type = 'hidden' name = 'hidden_image' value = '".$row["product_image"]."'>";
            echo "<div class = 'ItemInfo'>";
            echo "<p class = 'name'>".$row["product_title"]."</p><br>"; 
            echo "<input type = 'hidden' name = 'hidden_name' value = '".$row["product_title"]."'>";
            echo "<p class = 'Description'>".$row["product_desc"].""." "."<a href = 'ItemsPage.php?action=readmore&id=".$row["product_id"]."&image=".$row["product_image"]."&name=".$row["product_title"]."&desc=".$row["product_desc"]."&price=".$row["product_price"]."' name = 'readmore' value = 'readmore'>readmore</a><br>";
            echo "<input type = 'hidden' name = 'hidden_desc' value = '".$row["product_desc"]."'>";
            echo "<p class = 'money'>","$".$row["product_price"]."</p><br>"; 
            echo "<input type = 'hidden' name = 'hidden_price' value = '".$row["product_price"]."'>";
            echo "<input type='number' class='product-quantity' name='quantity' value='1' size='2' /><input type='submit' name ='AddToCart' value='Add to Cart' class= 'AddToCart' />";
            echo "</div>";
            echo "</div>";
            echo "</form>";
            }
            
            
        };        
        
        if(isset($_GET["action"]))
        {
                if($_GET["action"] == "t-shirts")
                {
                    
            if(mysqli_connect_error())
            {
                echo "Error: Could not load database: ". mysqli_connect_error();
            }
            else
            { 
                
                $select = mysqli_query($connection, "SELECT product_id, product_title, product_desc, product_image, product_price, product_type FROM tbl_products WHERE product_type = 'UCLan Logo Tshirt'");
                while($row = mysqli_fetch_array($select, MYSQLI_ASSOC))
            {
                if($_GET["action"] == "hoodies") //Do not enter the  while loop if this condition is true
                {
                    break;
                }
                else if($_GET["action"] == "all")
                {
                    break;
                }
                else if($_GET["action"] == "jumpers")
                {
                    break;
                }
                
             
                
        
            
                
                echo "<form name='form1' method = 'post' action = 'CartPage.php?id=".$row["product_id"]."' onsubmit= 'return checkForm()'>";
                echo "<div class = 'Item'>";
                echo "<input type = 'hidden' name = 'hidden_id' value = '".$row["product_id"]."'>";
                echo "<p><img class = 'Image' src = '".$row["product_image"]."' alt ='not found' width ='300' height='350'></p><br>";
                echo "<input type = 'hidden' name = 'hidden_image' value = '".$row["product_image"]."'>";
                echo "<div class = 'ItemInfo'>";
                echo "<p class = 'name'>".$row["product_title"]."</p><br>"; 
                echo "<input type = 'hidden' name = 'hidden_name' value = '".$row["product_title"]."'>";
                echo "<p class = 'Description'>".$row["product_desc"].""." "."<a href = 'ItemsPage.php?action=readmore&id=".$row["product_id"]."&image=".$row["product_image"]."&name=".$row["product_title"]."&desc=".$row["product_desc"]."&price=".$row["product_price"]."' name = 'readmore' value = 'readmore'>readmore</a><br>";
                echo "<input type = 'hidden' name = 'hidden_desc' value = '".$row["product_desc"]."'>";
                echo "<p class = 'money'>","$".$row["product_price"]."</p><br>"; 
                echo "<input type = 'hidden' name = 'hidden_price' value = '".$row["product_price"]."'>";
                echo "<input type='number' class='product-quantity' name='quantity' value='1' size='2' /><input type='submit' name ='AddToCart' value='Add to Cart' class= 'AddToCart' />";
                echo "</div>";
                echo "</div>";
                echo "</form>";
                
                
            };    
            
            }
            
            }
    
             if($_GET["action"] == "jumpers")
                {
                    
            if(mysqli_connect_error())
            {
                echo "Error: Could not load database: ". mysqli_connect_error();
            }
            else
            { 
        
                $select = mysqli_query($connection, "SELECT product_id, product_title, product_desc, product_image, product_price, product_type FROM tbl_products WHERE product_type = 'UCLan Logo Jumper'");
            while($row = mysqli_fetch_array($select, MYSQLI_ASSOC))
            {
                if($_GET["action"] == "hoodies") //Do not enter the while loop if this condition is true
                {
                    break;
                }
                else if($_GET["action"] == "all")
                {
                    break;
                }
                else if($_GET["action"] == "t-shirts")
                {
                    break;
                }
                
                
        
            
                echo "<form name='form1' method = 'post' action = 'CartPage.php?id=".$row["product_id"]."' onsubmit= 'return checkForm()'>";
                echo "<div class = 'Item'>";
                echo "<input type = 'hidden' name = 'hidden_id' value = '".$row["product_id"]."'>";
                echo "<p><img class = 'Image' src = '".$row["product_image"]."' alt ='not found' width ='300' height='350'></p><br>";
                echo "<input type = 'hidden' name = 'hidden_image' value = '".$row["product_image"]."'>";
                echo "<div class = 'ItemInfo'>";
                echo "<p class = 'name'>".$row["product_title"]."</p><br>"; 
                echo "<input type = 'hidden' name = 'hidden_name' value = '".$row["product_title"]."'>";
                echo "<p class = 'Description'>".$row["product_desc"].""." "."<a href = 'ItemsPage.php?action=readmore&id=".$row["product_id"]."&image=".$row["product_image"]."&name=".$row["product_title"]."&desc=".$row["product_desc"]."&price=".$row["product_price"]."' name = 'readmore' value = 'readmore'>readmore</a><br>";
                echo "<input type = 'hidden' name = 'hidden_desc' value = '".$row["product_desc"]."'>";
                echo "<p class = 'money'>","$".$row["product_price"]."</p><br>"; 
                echo "<input type = 'hidden' name = 'hidden_price' value = '".$row["product_price"]."'>";
                echo "<input type='number' class='product-quantity' name='quantity' value='1' size='2' /><input type='submit' name ='AddToCart' value='Add to Cart' class= 'AddToCart' />";
                echo "</div>";
                echo "</div>";
                echo "</form>";
                
                
            };    
            
            }
            
            }
    
            if($_GET["action"] == "hoodies")
            {
                
        if(mysqli_connect_error())
        {
            echo "Error: Could not load database: ". mysqli_connect_error();
        }
        else
        { 
    
            $select = mysqli_query($connection, "SELECT product_id, product_title, product_desc, product_image, product_price, product_type FROM tbl_products WHERE product_type = 'UCLan Hoodie'");
        while($row = mysqli_fetch_array($select, MYSQLI_ASSOC))
        {
                if($_GET["action"] == "t-shirts") // Do not enter the while loop if the condition is true
                {
                    break;
                }
                else if($_GET["action"] == "all")
                {
                    break;
                }
                else if($_GET["action"] == "jumpers")
                {
                    break;
                }
               
            
                
            echo "<form name='form1' method = 'post' action = 'CartPage.php?id=".$row["product_id"]."' onsubmit= 'return checkForm()'>";
            echo "<div class = 'Item'>";
            echo "<input type = 'hidden' name = 'hidden_id' value = '".$row["product_id"]."'>";
            echo "<p><img class = 'Image' src = '".$row["product_image"]."' alt ='not found' width ='300' height='350'></p><br>";
            echo "<input type = 'hidden' name = 'hidden_image' value = '".$row["product_image"]."'>";
            echo "<div class = 'ItemInfo'>";
            echo "<p class = 'name'>".$row["product_title"]."</p><br>"; 
            echo "<input type = 'hidden' name = 'hidden_name' value = '".$row["product_title"]."'>";
            echo "<p class = 'Description'>".$row["product_desc"].""." "."<a href = 'ItemsPage.php?action=readmore&id=".$row["product_id"]."&image=".$row["product_image"]."&name=".$row["product_title"]."&desc=".$row["product_desc"]."&price=".$row["product_price"]."' name = 'readmore' value = 'readmore'>readmore</a><br>";
            echo "<input type = 'hidden' name = 'hidden_desc' value = '".$row["product_desc"]."'>";
            echo "<p class = 'money'>","$".$row["product_price"]."</p><br>"; 
            echo "<input type = 'hidden' name = 'hidden_price' value = '".$row["product_price"]."'>";
            echo "<input type='number' class='product-quantity' name='quantity' value='1' size='2' /><input type='submit' name ='AddToCart' value='Add to Cart' class= 'AddToCart' />";
            echo "</div>";
            echo "</div>";
            echo "</form>";
            
            
        };    
        
        }
        
        }
    
        if($_GET["action"] == "all")
            {
                
                
        if(mysqli_connect_error())
        {
            echo "Error: Could not load database: ". mysqli_connect_error();
        }
        else
        { 
    
            $select = mysqli_query($connection, "SELECT product_id, product_title, product_desc, product_image, product_price, product_type FROM tbl_products ORDER BY product_id");
        while($row = mysqli_fetch_array($select, MYSQLI_ASSOC))
        {
             
                
        
            
            echo "<form name='form1' method = 'post' action = 'CartPage.php?id=".$row["product_id"]."' onsubmit= 'return checkForm()'>";
            echo "<div class = 'Item'>";
            echo "<input type = 'hidden' name = 'hidden_id' value = '".$row["product_id"]."'>";
            echo "<p><img class = 'Image' src = '".$row["product_image"]."' alt ='not found' width ='300' height='350'></p><br>";
            echo "<input type = 'hidden' name = 'hidden_image' value = '".$row["product_image"]."'>";
            echo "<div class = 'ItemInfo'>";
            echo "<p class = 'name'>".$row["product_title"]."</p><br>"; 
            echo "<input type = 'hidden' name = 'hidden_name' value = '".$row["product_title"]."'>";
            echo "<p class = 'Description'>".$row["product_desc"].""." "."<a href = 'ItemsPage.php?action=readmore&id=".$row["product_id"]."&image=".$row["product_image"]."&name=".$row["product_title"]."&desc=".$row["product_desc"]."&price=".$row["product_price"]."' name = 'readmore' value = 'readmore'>readmore</a><br>";
            echo "<input type = 'hidden' name = 'hidden_desc' value = '".$row["product_desc"]."'>";
            echo "<p class = 'money'>","$".$row["product_price"]."</p><br>"; 
            echo "<input type = 'hidden' name = 'hidden_price' value = '".$row["product_price"]."'>";
            echo "<input type='number' class='product-quantity' name='quantity' value='1' size='2' /><input type='submit' name ='AddToCart' value='Add to Cart' class= 'AddToCart' />";
            echo "</div>";
            echo "</div>";
            echo "</form>";
            
            
        };    
        
        }
        
        }
        
        if($_GET["action"] == "".$_GET["action"]."")
        {
            
            $select = mysqli_query($connection, "SELECT product_id, product_title, product_desc, product_image, product_price, product_type FROM tbl_products WHERE product_title LIKE '%".$_GET["action"]."%'");  
            while($row = mysqli_fetch_array($select, MYSQLI_ASSOC))
        {
                if($_GET["action"] == "t-shirts") // Do not enter the while loop if the condition is true
                {
                    break;
                }
                else if($_GET["action"] == "all")
                {
                    break;
                }
                else if($_GET["action"] == "jumpers")
                {
                    break;
                }
                else if($_GET["action"] == "hoodies")
                {
                    break;
                }
                 
                   
            
            echo "<form name='form1' method = 'post' action = 'CartPage.php?id=".$row["product_id"]."' onsubmit= 'return checkForm()' '>";
            echo "<div class = 'Item'>";
            echo "<input type = 'hidden' name = 'hidden_id' value = '".$row["product_id"]."'>";
            echo "<p><img class = 'Image' src = '".$row["product_image"]."' alt ='not found' width ='300' height='350'></p><br>";
            echo "<input type = 'hidden' name = 'hidden_image' value = '".$row["product_image"]."'>";
            echo "<div class = 'ItemInfo'>";
            echo "<p class = 'name'>".$row["product_title"]."</p><br>"; 
            echo "<input type = 'hidden' name = 'hidden_name' value = '".$row["product_title"]."'>";
            echo "<p class = 'Description'>".$row["product_desc"].""." "."<a href = 'ItemsPage.php?action=readmore&id=".$row["product_id"]."&image=".$row["product_image"]."&name=".$row["product_title"]."&desc=".$row["product_desc"]."&price=".$row["product_price"]."' name = 'readmore' value = 'readmore'>readmore</a><br>";
            echo "<input type = 'hidden' name = 'hidden_desc' value = '".$row["product_desc"]."'>";
            echo "<p class = 'money'>","$".$row["product_price"]."</p><br>"; 
            echo "<input type = 'hidden' name = 'hidden_price' value = '".$row["product_price"]."'>";
            echo "<input type='number' class='product-quantity' name='quantity' value='1' size='2' /><input type='submit' name ='AddToCart' value='Add to Cart' class= 'AddToCart' />";
            echo "</div>";
            echo "</div>";
            echo "</form>";
            
        };        
        }
    
            
        }
        
        }
        
        
        ?>
        </div>
    </div>


    </div>
        
    </div>
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