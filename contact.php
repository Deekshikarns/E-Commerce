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
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a class="active"  href="contact.php">Contact</a></li>
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



    <section id="page-header" class="about-header">
        <h2>#let's_talk</h2>
        <p>LEAVE A MESSAGE.We love to hear from you!</p>
    </section> 

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fas fa-map"></i>
                    <p> Opposite New Busstand,Mangalagiri,Guntur,AP</p>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <p>contact@example.com</p>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <p>contact@example.com</p>
                </li>
                <li>
                    <i class="fas fa-clock"></i>
                    <p>Monday to Saturday: 9.00am to 18.pm/p>
                </li>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.0762632669416!2d77.03480750000001!3d11.032904999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba858526b5c0591%3A0x6c452206816788d4!2sPSG%20College%20of%20Arts%20and%20Science!5e0!3m2!1sen!2sin!4v1692518189238!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to here from you</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="E-mail">
            <input type="text" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button class="normal">Submit</button>
        </form>
        <div class="people">
            <div>
                <img src="image/1.png" alt="">
                <p><span>John Deo</span>Senior Marketing Manager <br>Phone: +000 123 000 77 88 <br>Email: contact@example .com</p>
            </div>
            <div>
                <img src="image/2.png" alt="">
                <p><span>William Smith</span>Senior Marketing Manager <br>Phone: +000 123 000 77 88 <br>Email: contact@example .com</p>
            </div>
            <div>
                <img src="image/3.png" alt="">
                <p><span>Emma Stone</span>Senior Marketing Manager <br>Phone: +000 123 000 77 88 <br>Email: contact@example .com</p>
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

        <script src="script.js"></script>
    </body>

</html>