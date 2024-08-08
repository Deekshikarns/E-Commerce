<?php
session_start();
include("connection.php");


if(isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    
    $sql = "SELECT * FROM signup WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if($result && mysqli_num_rows($result) > 0) {
       
        $fetch_info = mysqli_fetch_assoc($result);
    } else {
        
        header('Location: login.php');
        exit; 
    }
} else {
  
    header('Location: login.php');
    exit; 
}
?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tech2etc Ecommerce Tutorial</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="style.css">
        <style>
            #header{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 80px;
    background: #E3E6F3;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
    z-index: 999;
    position: sticky;
    top: 0;
    left: 0;
}
#header .wrap2{
  font-size: 40px;
  margin-left: 0;
}


#navbar{
    display: flex;
    align-items: center;
    justify-content: center;
}

#navbar li{
    list-style: none;
    padding: 0 20px;
    position: relative;
}

#navbar li a{
    text-decoration: none;
    font-size: 16px;
    font-weight: 600;
    color: #1a1a1a;
    transition: 0.3s ease;
}

#navbar li a:hover,
#navbar li a.active{
    color: #088178;
}

#navbar li a.active::after,
#navbar li a:hover::after{
    content: "";
    width: 30%;
    height: 2px;
    background: #088178;
    position: absolute;
    bottom: -4px;
    left: 20px;
}

#mobile{
  display: none;
  align-items: center;

}


#close{
  display: none;
}
#hero{
    background-image: url("image/bg.jpg");
    height: 90vh;
    width: 100%;
    background-size: cover;
    background-position: top 25% right 0;
    padding: 0 80px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
}
#hero h4{
    padding-bottom: 15px;
}
#hero h1{
    color: #088178;
}

#hero button{
    background-image: url("image/button.png");
    background-color: transparent;
    color: #088178;
    border: 0;
    padding: 14px 80px 14px 65px;
    background-repeat: no-repeat;
    cursor: pointer;
    font-weight: 700;
    font-size: 15px;
}

#feature{
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
}
#feature .fe-box{
    width: 180px;
    text-align: center;
    padding: 25px 15px;
    box-shadow: 20px 20px 34px rgba(0, 0, 0, 0.03);
    border: 1px solid #cce7d0;
    border-radius: 4px;
    margin: 15px 0;
}

#feature .fe-box:hover{
  box-shadow: 10px 10px 54px rgba(70, 62, 221, 0.1);

}
#feature .fe-box img{
  width: 100%;
  margin-bottom: 10px;
}

#feature .fe-box h6{
  display: inline-block;
  padding: 9px 8px 6px 8px;
  line-height: 1;
  border-radius: 4px;
  color: #088178;
  background-color: #fddde4;
}

#feature .fe-box:nth-child(2) h6{
  background-color: #cdebbc;
   
}
#feature .fe-box:nth-child(3) h6{
  background-color: #d1e8f2;
   
}
#feature .fe-box:nth-child(4) h6{
  background-color: #cdd4f8;
   
}
#feature .fe-box:nth-child(5) h6{
  background-color: #f6dbf6;
   
}
#feature .fe-box:nth-child(6) h6{
  background-color: #fff2e5;
   
}

#product1{
  text-align: center;
}
#product1 .pro-container{
  display: flex;
  justify-content: space-between;
  padding-top: 20px;
  flex-wrap: wrap;

}

#product1 .pro{
  width: 23%;
  min-width: 250px;
  padding: 10px 12px;
  border: 1px solid #cce7d0;
  border-radius: 20px;
  cursor: pointer;
  box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.02);
  margin: 15px 0;
  transition: 0.2s ease;
  position: relative;

   
}

#product1 .pro:hover{
  box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.06);
}

#product1 .pro img{
  width: 100%;
  border-radius: 20px;
}

#product1 .pro .des{
  text-align: start;
  padding: 10px 0;
}
#product1 .pro .des span{
  color: #606063;
  font-size: 12px;
}

#product1 .pro .des h5{
  padding-top: 7px;
  color: #1a1a1a;
  font-size: 14px;
}

#product1 .pro .des i{
  font-size: 12px;
  color: rgb(243, 181, 25);
}

#product1 .pro .des h4{
  padding-top: 7px;
  font-size: 15px;
  font-weight: 700;
  color: #088178;
}

#product1 .pro .cart{
  width: 40px;
  height: 40px;
  line-height: 40px;
  border-radius: 50px;
  background-color: #e8f6ea;
  font-weight: 500;
  color: #088178;
  border: 1px solid #cce7d0;
  position: absolute;
  bottom: 20px;
  right: 10px;
}
.ab h1{
    margin-left: 50px;
    font-size: 20px;
}
        </style>
    </head>

    <body>
        
    <section id="header">
        <a href="#"><img src="image/logo.jpg" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fas fa-shopping-bag"></i></a></li>
                <li><a href="profile.php"> <i class="fas fa-user-circle"></i></a>
            
            </li>
                <a href="#" id="close"><i class="fas fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fas fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <div class="ab">
    <h1>Welcome ! <?php echo "<span style='color: black; font-size:20px'>".$fetch_info['firstname']." ".$fetch_info['lastname']."</span>"; ?></h1>
</div>

    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons &up to 70% off!</p>
        <button>Shop Now</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="image/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="image/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="image/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="image/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="image/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="image/f6.png" alt="">
            <h6>24/7 Support</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="image/dress.jpg" alt="">
                <div class="des">
                    <span>DC collections</span>
                    <h5>Choies Blue Polka Dot Flounce Hem 3/4 Sleeve Chiffon Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹2000</h4>
                </div>
                <a href="#"><i class='bx bx-cart-alt cart'></i></a>
            </div>
            <div class="pro">
                <img src="image/dress1.jpg" alt="">
                <div class="des">
                    <span>DC collections</span>
                    <h5>Choies Blue Polka Dot Flounce Hem 3/4 Sleeve Chiffon Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹2000</h4>
                </div>
                <a href="#"><i class='bx bx-cart-alt cart'></i></a>
            </div>
            <div class="pro">
                <img src="image/dress2.jpg" alt="">
                <div class="des">
                    <span>DC collections</span>
                    <h5>Choies Blue Polka Dot Flounce Hem 3/4 Sleeve Chiffon Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹2000</h4>
                </div>
                <a href="#"><i class='bx bx-cart-alt cart'></i></a>
            </div>
            <div class="pro">
                <img src="image/dress3.jpg" alt="">
                <div class="des">
                    <span>DC collections</span>
                    <h5>Choies Blue Polka Dot Flounce Hem 3/4 Sleeve Chiffon Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹2000</h4>
                </div>
                <a href="#"><i class='bx bx-cart-alt cart'></i></a>
            </div>
            <div class="pro">
                <img src="image/dress4.jpg" alt="">
                <div class="des">
                    <span>DC collections</span>
                    <h5>Choies Blue Polka Dot Flounce Hem 3/4 Sleeve Chiffon Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹2000</h4>
                </div>
                <a href="#"><i class='bx bx-cart-alt cart'></i></a>
            </div>
            <div class="pro">
                <img src="image/dress5.jpg" alt="">
                <div class="des">
                    <span>DC collections</span>
                    <h5>Choies Blue Polka Dot Flounce Hem 3/4 Sleeve Chiffon Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹2000</h4>
                </div>
                <a href="#"><i class='bx bx-cart-alt cart'></i></a>
            </div>
            <div class="pro">
                <img src="image/dress6.jpg" alt="">
                <div class="des">
                    <span>DC collections</span>
                    <h5>PAVITRYAM SummerCool Women's Stylish Trendy Western Tops For Modern Girls, Sleeve Length: Short Sleeves, Pattern: Solid</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹2000</h4>
                </div>
                <a href="#"><i class='bx bx-cart-alt cart'></i> </a>
            </div>
            <div class="pro">
                <img src="image/dress7.jpg" alt="">
                <div class="des">
                    <span>DC collections</span>
                    <h5>Trendy Fashionable Women Tops & Tunics</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹2000</h4>
                </div>
                <a href="#"><i class='bx bx-cart-alt cart'></i></a>
            </div>
            
        </div>
    </section>

    <section id="banner" class="section-m1">
         <h4>Repair Services</h4>
         <h2>Up to <span> 70% Off</span> - All Tops and Accessories</h2>
         <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="image/dress8.jpg" alt="">
                <div class="des">
                    <span>DC collections</span>
                    <h5>Choies Blue Polka Dot Flounce Hem 3/4 Sleeve Chiffon Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹2000</h4>
                </div>
                <a href="#"><i class='bx bx-cart-alt cart'></i> </a>
            </div>
            <div class="pro">
                <img src="image/dress9.jpg" alt="">
                <div class="des">
                    <span>DC collections</span>
                    <h5>TEXTURED FAB Full Sleeves Solid Jacket Women|Denim Jacket for Women||Comfortable Women Jacket, Women's Denim Jackets</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹2000</h4>
                </div>
                <a href="#"><i class='bx bx-cart-alt cart'></i> </a>
            </div>
            <div class="pro">
                <img src="image/dress10.jpg" alt="">
                <div class="des">
                    <span>DC collections</span>
                    <h5>Choies Blue Polka Dot Flounce Hem 3/4 Sleeve Chiffon Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹2000</h4>
                </div>
                <a href="#"><i class='bx bx-cart-alt cart'></i></a>
            </div>
            <div class="pro">
                <img src="image/dress110.jpg" alt="">
                <div class="des">
                    <span>DC collections</span>
                    <h5>Choies Blue Polka Dot Flounce Hem 3/4 Sleeve Chiffon Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹2000</h4>
                </div>
                <a href="#"><i class='bx bx-cart-alt cart'></i></a>
            </div>
            <div class="pro">
                <img src="image/dress12.jpg" alt="">
                <div class="des">
                    <span>DC collections</span>
                    <h5>Choies Blue Polka Dot Flounce Hem 3/4 Sleeve Chiffon Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹2000</h4>
                </div>
                <a href="#"><i class='bx bx-cart-alt cart'></i></a>
            </div>
            <div class="pro">
                <img src="image/dress13.jpg" alt="">
                <div class="des">
                    <span>DC collections</span>
                    <h5>Peach Crop Top And Pants With Jacket</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹2000</h4>
                </div>
                <a href="#"><i class='bx bx-cart-alt cart'></i></a>
            </div>
            <div class="pro">
                <img src="image/dress14.jpg" alt="">
                <div class="des">
                    <span>DC collections</span>
                    <h5>LIGHT DENIM DISTRESSED JEAN JACKET</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹2000</h4>
                </div>
                <a href="#"><i class='bx bx-cart-alt cart'></i></a>
            </div>
            <div class="pro">
                <img src="image/dress15.jpg" alt="">
                <div class="des">
                    <span>DC collections</span>
                    <h5>Trendy Fashionable Women Tops & Tunics</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹2000</h4>
                </div>
                <a href="#"><i class='bx bx-cart-alt cart'></i></a>
            </div>
            
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at care</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>spring/summer</h4>
            <h2>upcomming season</h2>
            <span>The best classic dress is on sale at care</span>
            <button class="white">Collection</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection - 50% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>New Footwear Collection </h2>
            <h3>Spring / Summer 2022</h3>
        </div>
        <div class="banner-box banner-box3 ">
            <h2>T-SHIRTS</h2>
            <h3>New Trendy Prints</h3>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span> </p>
        </div>
        <div class="form">
            <input type="text"  placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <footer class="section-p1">
      <div class="col">
        <img class="logo" src="image/logo.jpg" alt="">
        <h4>Contact</h4>
        <p><strong>Address: </strong> 1143, BEML Layout, BEML Layout 3rd Stage Karnataka </p>
        <p><strong>Phone :</strong> (+91) 83 4235 5521/+01 3423 5551</p>
        <p><strong>Hours :</strong> 10:00 - 20:00, Mon-Sat</p>
        <div class="follow">
            <h4>Follow us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
      </div>
      
      <div class="col">
        <h4>About</h4>
        <a href="#">About Us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact Us</a>
      </div>
      <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
      </div>
      <div class="col install">
        <h4>Install App</h4>
        <p>From App Store Or Google Play</p>
        <div class="row">
            <img src="image/app.jpg" alt="">
            <img src="image/play.jpg" alt="">
        </div>
        <p>Secured Pay GateWays</p>
        <img src="image/pay.png" alt="">
      </div>
      <div class="copyright">
        <p>© 2021,Tech2 etc - HTML CSS Ecommerce Templates</p>
      </div>
    </footer>
        <script src="script.js"></script>
    </body>

</html>