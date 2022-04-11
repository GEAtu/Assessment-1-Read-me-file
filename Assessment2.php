<?php 
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
            <li class = "active"><a  href="Assessment2.php">Home</a></li>
            <li><a href="ProductPage.php">Products</a></li>
            <li><a href="CartPage.php">Cart</a></li>
            <?php
            if(!isset($_SESSION["user_id"]))
            {
                echo "<li><a href='Signup.php'><span class = 'glyphicon glyphicon-user'></span>Sign up</a></li>";
            }
            else
            {
                echo "<li><a href='Assessment2.php?action=logout'><span class='glyphicon glyphicon-log-in'></span>Log out</a></li>";
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
    .offers
    {
       
      color: yellow;
      text: bold;
    }
    .header
    {
      color: darkcyan;
      text: bold;
    }
    .secondHeader
    {
      color: yellow;
    }
    .offerdescription
    {
        background-color: lightgray !important;
        padding: 40px;
        border: 10px solid white;
    }
    body {
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
    bottom: -50px;
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
    /*Code gotten from Foolish developer Accessed 5th April 2022*/
}

</style>

<div class = "container">
<?php 
    
    


    $connection = mysqli_connect("localhost", "GEAtu", "6M4a96xdWYmz", "GEAtu");
    if(mysqli_connect_error())
    {
        echo "Error: Could not load database: ". mysqli_connect_error();
    }
    else
    { 

    $select = mysqli_query($connection, "SELECT * FROM tbl_offers ORDER BY offer_id");
    echo "<h2 class = 'header'>Offers</h2>";
    echo "<div class = 'row'>";
    while($row = mysqli_fetch_array($select, MYSQLI_ASSOC))
    {
    
      echo "<div class = 'col-sm-4 offerdescription'>";
      echo "<h2 class = 'offers'>".$row["offer_title"]."</h2>";
      echo "<p>".$row["offer_dec"]."</p>";
      echo "</div>";
       
        
    };   
    echo "</div>";
   
    
    }
    ?>

    <h2 class = "header" >Where opportunity creates success</h2>
<div class = "row">
<p class="col-sm-12">Every student at The University Of Central Lancashire is automatically a member of the Students' Union. We're here to make life better for students-inspiring you to succeed and achieve your goals</p>
<p class="col-sm-12">Everything you need to know about UCLan Students' Union. Your membership starts here.</p>
</div>
<h3 class = "secondHeader">Together</h3>
<!--Video Html5 -->

<div class="row">
  <div class="col-sm-12">
    <div class="bs-example" data-example-id="responsive-embed-16by9-video">
      <div class="embed-responsive embed-responsive-16by9">
      <video src="together.mp4"  controls></video>
      </div>
    </div>
  </div>
</div>
<h4 class = "secondHeader">Join our global community</h4>
<!--Iframe YouTube Embed-->

<div class="row">
  <div class="col-sm-12">
    <div class="bs-example" data-example-id="responsive-embed-16by9-iframe-youtube">
      <div class="embed-responsive embed-responsive-16by9">
      <iframe src="https://www.youtube.com/embed/i2CRunZv9CU" title="YouTube video player" ></iframe>
      </div>
    </div>
  </div>
</div>
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

