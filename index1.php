<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fashion Shopping</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <section id="header">
      <a href="#">
        <img src="logo.png" class="logo" alt="" />
      </a>
      <div>
        <ul id="navbar">
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="shop.html">Shop</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="blog.html">blog</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li id="lg-bag">
            <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
          </li>
          <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
        </ul>
      </div>
      <div id="mobile">
        <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
      </div>
    </section>

    <section id="hero">
      <h4>Trade-in-offer</h4>
      <h2>Super value deals</h2>
      <h1>On all products</h1>
      <p>Save more with coupons & up to 70% off!</p>
      <button>Shop Now</button>
    </section>

    <section id="featuer" class="section-p1">
      <div class="fe-box">
        <img src="/features/c1.png" alt="" />
        <h6>Free Shopping</h6>
      </div>
      <div class="fe-box">
        <img src="/features/c2.png" alt="" />
        <h6>Order</h6>
      </div>
      <div class="fe-box">
        <img src="/features/c3.png" alt="" />
        <h6>Money</h6>
      </div>
      <div class="fe-box">
        <img src="/features/c4.png" alt="" />
        <h6>Promotions</h6>
      </div>
      <div class="fe-box">
        <img src="/features/c5.png" alt="" />
        <h6>Happy Sell</h6>
      </div>
      <div class="fe-box">
        <img src="/features/c6.png" alt="" />
        <h6>Supports</h6>
      </div>
    </section>

    <section id="product1" class="section-p1">
      <h2>Featuerd Products</h2>
      <p>Summer Collection Morden Design</p>
      <div class="pro-container">


        <div class="pro">
          <img src="product/f1.jpg" alt="" />
          
          <div class="des">
            <span>adidas</span>
            <h5>T-Shirts</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>&#8377;30</h4>
          </div>
          <!-- <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a> -->
           <a href=""
              onclick="addToCart(' T-Shirts', 30, 'product/f1.jpg')">
              <i class="fa-solid fa-cart-shopping cart"></i>
           </a>

        </div>
        <div class="pro">
          <img src="product/f2.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>Cartoon Astronaut T-Shirts</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>&#8377;40</h4>
          </div>
          <!-- <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a> -->

          <a href=""
              onclick="addToCart('Cartoon Astronaut T-Shirts', 40, 'product/f2.jpg')">
              <i class="fa-solid fa-cart-shopping cart"></i>
           </a>

        </div>
        <div class="pro">
          <img src="product/f3.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>mens T-Shirts</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>&#8377;50</h4>
          </div>
          <!-- <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a> -->
          <a href=""
              onclick="addToCart('mens T-Shirts', 50, 'product/f3.jpg')">
              <i class="fa-solid fa-cart-shopping cart"></i>
           </a>

        </div>
        <div class="pro">
          <img src="product/f4.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>Shirts</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>&#8377;60</h4>
          </div>
          <!-- <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a> -->
          <a href=""
              onclick="addToCart('Shirts', 60, 'product/f4.jpg')">
              <i class="fa-solid fa-cart-shopping cart"></i>
           </a>

        </div>
        <div class="pro">
          <img src="product/f5.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>fassion shirt</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>&#8377;70</h4>
          </div>
          <!-- <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a> -->
          <a href=""
              onclick="addToCart('fassion shirt', 70, 'product/f5.jpg')">
              <i class="fa-solid fa-cart-shopping cart"></i>
           </a>

        </div>
        <div class="pro">
          <img src="product/f6.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>jocket</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>&#8377;80</h4>
          </div>
          <!-- <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a> -->
          <a href=""
              onclick="addToCart('jocket', 80, 'product/f6.jpg')">
              <i class="fa-solid fa-cart-shopping cart"></i>
           </a>

        </div>
        <div class="pro">
          <img src="product/f7.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>shooting</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>&#8377;90</h4>
          </div>
          <!-- <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a> -->
          <a href=""
              onclick="addToCart('shooting', 90, 'product/f7.jpg')">
              <i class="fa-solid fa-cart-shopping cart"></i>
           </a>

        </div>
        <div class="pro">
          <img src="product/f8.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>women t-shirt</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>&#8377;100</h4>
          </div>
          <!-- <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a> -->
          <a href=""
              onclick="addToCart('women t-shirt', 100, 'product/f8.jpg')">
              <i class="fa-solid fa-cart-shopping cart"></i>
           </a>

        </div>
      </div>
    </section>

    <section id="banner" class="section-m1">
      <h4>Repair Services</h4>
      <h2>Up to <span>70% off</span> - All t-Shirts &Accessories</h2>
      <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
      <h2>New Arrivals</h2>
      <p>Summer Collection Morden Design</p>
      <div class="pro-container">

        <div class="pro">
          <img src="product/n1.jpg" alt="" />


          <div class="des">
            <span>adidas</span>
            <h5>plain shirt</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>&#8377;110</h4>
          </div>


          <!-- <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a> -->
          <a href=""
              onclick="addToCart('plain shirt', 110, 'product/n1.jpg')">
              <i class="fa-solid fa-cart-shopping cart"></i>
           </a>

        </div>
        <div class="pro">
          <img src="product/n2.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>plain shirt 2</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>&#8377;120</h4>
          </div>
          <!-- <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a> -->
          <a href=""
              onclick="addToCart('plain shirt 2', 120, 'product/n2.jpg')">
              <i class="fa-solid fa-cart-shopping cart"></i>
           </a>

        </div>
        <div class="pro">
          <img src="product/n3.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>plain shirt 3</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>&#8377;130</h4>
          </div>
          <!-- <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a> -->
          <a href=""
              onclick="addToCart('plain shirt 3', 130, 'product/n3.jpg')">
              <i class="fa-solid fa-cart-shopping cart"></i>
           </a>

        </div>
        <div class="pro">
          <img src="product/n4.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>printed shirt</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>&#8377;140</h4>
          </div>
          <!-- <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a> -->
          <a href=""
              onclick="addToCart('printed shirt', 140, 'product/n4.jpg')">
              <i class="fa-solid fa-cart-shopping cart"></i>
           </a>

        </div>
        <div class="pro">
          <img src="product/n5.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>lining shirt</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>&#8377;150</h4>
          </div>
          <!-- <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a> -->
          <a href=""
              onclick="addToCart('linig shirt', 150, 'product/n5.jpg')">
              <i class="fa-solid fa-cart-shopping cart"></i>
           </a>

        </div>
        <div class="pro">
          <img src="product/n6.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>lining shooting</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>&#8377;160</h4>
          </div>
          <!-- <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a> -->
          <a href=""
              onclick="addToCart('linig shooting', 160, 'product/n6.jpg')">
              <i class="fa-solid fa-cart-shopping cart"></i>
           </a>

        </div>
        <div class="pro">
          <img src="product/n7.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>pocket shirt</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>&#8377;170</h4>
          </div>
          <!-- <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a> -->
          <a href=""
              onclick="addToCart('pocket shirt', 170, 'product/n7.jpg')">
              <i class="fa-solid fa-cart-shopping cart"></i>
           </a>

        </div>
        <div class="pro">
          <img src="product/n8.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>half shirt</h5>
            <div class="star">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h4>&#8377;180</h4>
          </div>
          <!-- <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a> -->
          <a href=""
              onclick="addToCart('half shirt', 180, 'product/n8.jpg')">
              <i class="fa-solid fa-cart-shopping cart"></i>
           </a>

        </div>
      </div>
    </section>

    <section id="sm-banner" class="section-p1">
      <div class="banner-box">
        <h4>crazy deals</h4>
        <h2>buy 1 grt 1 free</h2>
        <span>The best classic dress is on sale at cara </span>
        <button class="white">Learn More</button>
      </div>
      <div class="banner-box banner-box2">
        <h4>spring/summer</h4>
        <h2>upcomming season</h2>
        <span>The best classic dress is on sale at cara </span>
        <button class="white">Cellection</button>
      </div>
    </section>

    <section id="banner3">
      <div class="banner-box">
        <h2>SEASONAL SALE</h2>
        <h3>winter Collection -50% OFF</h3>
      </div>

      <div class="banner-box banner-box2">
        <h2>NEW FOOTWEAR COLLECTION</h2>
        <h3>spring/Summer 2025</h3>
      </div>

      <div class="banner-box banner-box3">
        <h2>T-SHIRTS</h2>
        <h3>Trendy Prints</h3>
      </div>
    </section>

    <section id="newletter" class="section-p1 section-m1">
      <div class="newstext">
        <h4>Sign Up For Newsletters</h4>
        <p>
          Get E-mail updates about our latest shop and
          <span>special offers.</span>
        </p>
      </div>
      <div class="form">
        <input type="text" placeholder="Your email address" />
        <button class="normal">Sign Up</button>
      </div>
    </section>

    <footer class="section-p1">
      <div class="col">
        <img class="logo" src="logo.png" alt="" />
        <h4>Contact</h4>
        <p>
          <strong>Address:</strong> MGM Collage Road Ahmedpur
        </p>
        <p><strong>Phone:</strong> +91 8767096059/(+91)8459818895</p>
        <p><strong>Hours:</strong>10:00 - 18:00, Man -sat</p>
        <div class="follow">
          <h4>Follow us</h4>
          <div class="icon">
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-x-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-pinterest"></i>
            <i class="fa-brands fa-youtube"></i>
          </div>
        </div>
      </div>

      <div class="col">
        <h4>About</h4>
        <a href="#"> About us</a>
        <a href="#"> Delivery Information</a>
        <a href="#"> Privacy Polocy</a>
        <a href="#"> Terms & Conditions</a>
        <a href="#"> Contact Us</a>
      </div>

      <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart </a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order </a>
        <a href="#">Help</a>
      </div>

      <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
          <img src="pay/app.jpg" alt="" />
          <img src="pay/play.jpg" alt="" />
        </div>
        <p>Secured Payment Getways</p>
        <img src="pay/pay.png" alt="" />
      </div>
    </footer>

    <script src="script.js"></script>
  </body>
</html>
