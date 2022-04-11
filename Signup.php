<?php

require_once("connect.php");
session_start();

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
            <li><a href="CartPage.php">Cart</a></li>
            <?php
            if(!isset($_SESSION["user_id"]))
            {
                echo "<li class = 'active'><a href='Signup.php'><span class = 'glyphicon glyphicon-user'></span>Sign up</a></li>";
            }
            else
            {
                echo "<li><a href='Signup.php?action=logout'><span class='glyphicon glyphicon-log-in'></span>Log out</a></li>";
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
    .flex-container{
        display: flex;
        align-items: stretch;
        
    } 
    .flex-container .myNav 
{
    margin-left: 200px;
}
.flex-container .myNav .navList a
{
    text-decoration: none;
}
.searchbox .searchbutton
{
    background-color:#BE1622;
}
.searchbox .searchtab
{
    background-color:#BE1622;
}
.login-box
{
    margin-left: 0px;
}
body
{
    background: linear-gradient(rgba(0, 0, 50, 0.5), rgba(0, 0, 50, 0.5)),url(Sea.jpg);
    background-size: cover;
    background-position: center;
}
.sign-up
{
    background: rgba(211, 211, 211, 0.5);
    padding: 30px;
}
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
<div class = "login-box">
    <div class = "col-md-6 sign-up">
    <h2>Sign up here</h2>
    <form name="form" action="Signup.php" method = "get">
    <div class = "form-group">
        <label>Full name</label>
        <input type="text" name = "username" class = "form-control" required>
    </div>
    <div class = "form-group">
        <label>Address</label>
        <textarea type = "text" name = "address" rows = "5" class = "form-control" required></textarea>
    </div>
    <div class = "form-group">
        <label>E-mail Address</label>
        <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="email" type="text" class="form-control" name="e-mail" placeholder="Email" required>
  </div>
    </div>
    <div class = "form-group has-feedback">
        <label>Password</label>
        <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
  </div>
    </div>
    <div class = "form-group">
        <label>Confirm Password</label>
        <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="confirmpassword" type="password" class="form-control" name="confirmpassword" placeholder="confirmpassword" required>
  </div>
    </div>
    
    <button type = "submit" class = "btn btn-primary">Sign up</button>
</form>
    </div>
    
</div>
</div>

<?php 

    $connection = mysqli_connect("localhost", "GEAtu", "6M4a96xdWYmz", "GEAtu");
    mysqli_select_db($connection,"tbl_users");

    if(mysqli_connect_error()) 
    {
        echo "Error: Could not load database: ". mysqli_connect_error();
    }
    else
    {
        
        function validPassword($password) //function to check password strength
        {
            $password_length = 8;
            $returnVal = true;
            if(strlen($password) < $password_length)
            {
                $returnVal = false;
            }

            if(!preg_match("#[0-9]+#", $password))
            {
                $returnVal = false;
            }

            if(!preg_match("#[a-z]+#", $password))
            {
                $returnVal = false;
            }

            if(!preg_match("#[A-Z]+#", $password))
            {
                $returnVal = false;
            }

            if(!preg_match("/[\'^#$%&*()}{@~?><,|=_+!-]/", $password))
            {
                $returnVal = false;
            }

            return $returnVal;
        } // Gotten from GitHub bmcculley / password_strength.php Accessed 19th March,2022
      
            
            if(isset($_GET["username"]))
            {  
                
             if(!isset($_SESSION["user_id"]))
            {
            $userid = rand(2,100);
            $username = $_GET["username"];
            $address = $_GET["address"];
            $email = $_GET["e-mail"];
            $password = $_GET["password"];
            $confirmpassword = $_GET["confirmpassword"];
            $day = rand(1,31);
            $month = rand(1,12);
            $year = rand(2021,2022);
            $hour = rand(1,23);
            $minutes = rand(1,60);
            $seconds = rand(1,60);
                if(validPassword($password) == true)
                {
                    
                    if($password != $confirmpassword)
                    {
                        echo "<h1 style = 'color: white'>Passwords don't match</h1>";
                    }
                    else
                    {
                    echo "<script>alert('Your password is strong')</script>";
                    echo "<script>alert('passwords match')</script>";
                    $passwordhash = password_hash("$password", PASSWORD_DEFAULT);
                    $stmt = $pdo->prepare("INSERT INTO tbl_users VALUES('$userid', '$username', '$address','$email', '$passwordhash','$year-$month-$day $hour:$minutes:$seconds')");
                    $stmt->bindParam('user_id', $id);
                    $stmt->bindParam('user_full_name', $name);
                    $stmt->bindParam('user_address', $address);
                    $stmt->bindParam('user_email', $email);
                    $stmt->bindParam('user_pass', $passwordhash);
                    $stmt->bindParam('user_timestamp', $year,$month,$day,$hour);
                    $stmt->execute();
                    $success = $stmt->rowCount();
                    if(isset($success))
                    {
                        echo "<script>alert('User has been successfully created!')</script>";
                        echo "<h1 style = 'color: white'>Welcome ".$username."! You have successfully registered and is now currrently logged in</h1>";
                        $_SESSION["user_id"] = $userid;
                    }
                    }
                }
                else
                {
                    echo "<h1 style = 'color: white'>Your password is weak and requires a minimum of 8 characters in length,an uppercase letter,a lowercase letter,a number and a symbol</h1>"; 
                }
           
            
            }
            
            }
        
    }







?>






    
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