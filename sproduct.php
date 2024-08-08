<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tech2etc Ecommerce Tutorial</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />

        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        
    <section id="header">
        <a href="#"><img src="image/logo.jpg" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a  href="index.php">Home</a></li>
                <li><a  class="active" href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fas fa-shopping-bag"></i></a></li>
                <li><a href="profile.php"> <i class="fas fa-user-circle"></i></a></li>
                <a href="#" id="close"><i class="fas fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fas fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>


     <section id="diya" class="section-p1">
        <div class="single-pro-image">
            <img src="image/d7.jpg" width="100%" id="MainImg" alt="">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="image/d7.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="image/d22.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="image/dress23.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="image/dress24.jpg" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>

        <div class="single-pro-details">
            <h4>Black Konsai Top</h4>
            <h2>₹1500</h2>
            <select name="Dress">
                <option value="--select Size--">--select Size--</option>
                <option value="XS">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="XXL">XXL</option>
                <option value="3XL">3XL</option>
                <option value="4XL">4XL</option>
            </select>
            <p>
            <input type="number" value="1">
            </p>
            <button class="normal"onclick="window.location.href='cart.php';">Add To Cart</button>
            <button class="normal"onclick="window.location.href='Buy.php';">Buy Now</button>
            <h4>Product Details</h4>
            <p>
            Name : Black Konsai Top<br/>
            Fabric : Poly Crepe<br/>
            Sleeve Length : Long Sleeves<br/>
            Pattern : Printed   <br/> 
            Net Quantity (N) : 1<br/>           
            DenimBird present of Multi range of Dress, dress for women, party<br/>
            wear dress,knee length dress,formal dress, multi colour dress<br/>
            regular dress,trending dress,flower print dress plain dress, long<br/>
            dress.<br/>
            Country of Origin : India<br/>
            </p>
        </div>
     </section>

     <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Modern Design</p>
        <div class="pro-container">
            <div class="pro" >
                <img src="image/d22.jpg" alt="">
                <div class="des" onclick="window.location.href='sproduct21.php';">
                    <span>DC collections</span>
                    <h5>Choies Blue Polka Dot Flounce Hem 3/4 Sleeve Chiffon Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹1500</h4>
                </div>
                <a href="#"><i class='bx bx-cart-alt cart'></i></a>
            </div>
            <div class="pro" >
                <img src="image/dress6.jpg" alt="">
                <div class="des" onclick="window.location.href='sproduct14.php';">
                    <span>DC collections</span>
                    <h5>Choies Blue Polka Dot Flounce Hem 3/4 Sleeve Chiffon Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹700</h4>
                </div>
                <a href="#"><i class='bx bx-cart-alt cart'></i></a>
            </div>
            <div class="pro" >
                <img src="image/dress4.jpg" alt="">
                <div class="des" onclick="window.location.href='sproduct12.php';">
                    <span>DC collections</span>
                    <h5>Choies Blue Polka Dot Flounce Hem 3/4 Sleeve Chiffon Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹450</h4>
                </div>
                <a href="#"><i class='bx bx-cart-alt cart'></i></a>
            </div>
            <div class="pro" >
                <img src="image/dress.jpg" alt="">
                <div class="des" onclick="window.location.href='sproduct8.php';">
                    <span>DC collections</span>
                    <h5>Choies Blue Polka Dot Flounce Hem 3/4 Sleeve Chiffon Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹450</h4>
                </div>
                <a href="#"><i class='bx bx-cart-alt cart'></i></a>
            </div>            
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

    <script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick=function(){
            MainImg.src=smallimg[0].src;
        }
        smallimg[1].onclick=function(){
            MainImg.src=smallimg[1].src;
        }
        smallimg[2].onclick=function(){
            MainImg.src=smallimg[2].src;
        }
        smallimg[3].onclick=function(){
            MainImg.src=smallimg[3].src;
        }
    </script>

        <script src="script.js"></script>
    </body>

</html>