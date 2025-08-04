<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@11.1.14/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

   <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css link -->
     <link rel="stylesheet" href="styles.css">

</head>
<body>

<!-- header start -->
<section class="header">
    <a href="home.php" class="logo" img src="38826">Travel.</a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="packages.php">package</a>
        <a href="book.php">book</a>
       
        <a href="Contact US.php">Contact US</a>
        <a href="./login2/admin_login.php">Admin Panel</a>
    </nav>
    <form action="search.php" method="get" class="search-form">
    <input type="text" name="query" placeholder="Search destinations..." required>
    <button type="submit"><i class="fas fa-search"></i></button>
</form>


    <button id="menu-btn" class="fas fa-bars" aria-label="Toggle menu"></button>
</section>
<!-- header end --> 
 




<!-- home section start -->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) ">
                <div class="content">
                    <span>Explore, Discover, Travel</span>
                    <h3>travel around the world</h3>
                    <a href="https://www.sltda.gov.lk/en" class="btn">Discover More</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) ">
                <div class="content">
                    <span>Explore, Discover, Travel</span>
                    <h3>discover new places</h3>
                    <a href="packages.php" class="btn">Discover More</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) ">
                <div class="content">
                    <span>Explore, Discover, Travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="packages.php" class="btn">Discover More</a>
                </div>
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
 <!-- home section end  -->


<!-- services section start -->
<section class="services">
   <h1 class="heading-title">Our Services</h1>
   <div class="box-container">
    <div class="box">
        <i class="fas fa-user-tie"></i>
        <h3>Tour Guide</h3>
    </div>
    <div class="box">
        <i class="fas fa-clock"></i>
        <h3>24/7 Service</h3>
    </div>
    <div class="box">
        <i class="fas fa-taxi"></i>
        <h3>Cab Booking</h3>
    </div>
    <div class="box">
       <i class="fas fa-bed"></i>
        <h3>Room Reservation</h3>
    </div>
    <div class="box">
      <i class="fas fa-utensils"></i>
        <h3>Food & Beverages</h3>
    </div>
    <div class="box">
        <i class="fas fa-shield-alt"></i>
        <h3> <a href="https://www.police.lk/" class="btn">Safety </a></h3>
    </div>

   </div>
</section>
<!-- services section end -->





<!--home about section start -->
<section class="home-about">
    <div class="image">
        <img src="images/anuradhapura.jpg" alt="">
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>welcome to explore srilanka, your gateway to discovering the enhanting beauty, rich history, and vibrant cultutre of Srilanka.
            Our mission is to provide travelers with comprehensive, up-to-date, and authentic information about everything this island paradise
            has to offer-from breathtaking landscapes and ancient heritage sites to thrilling adventures and unique culinary experiences. 
            Whether you are a solo backpacker, a couple on a romantic gateway, or a family looking for an unforgettable vacation, we are here to 
            make your journey effortless and memorable.
        </p>
        <a href="about.php" class="btn">read more</a>
    </div>
</section>
<!-- home about section end -->




<!-- home packages start -->
<section class="home-packages">
    <h1 class="heading-title">our packages</h1>
    
    <div class="box-container">
    
        <div class="BOX">
            <div class="image">
                <img src="images/fort.jpg" alt="">
            </div>
            <div class="content">
                <h3>galle</h3>
                <p> Our mission is to provide travelers with comprehensive, up-to-date, and authentic information about everything this island paradise
                    has to offer-from breathtaking landscapes and ancient heritage 
                    sites to thrilling adventures and unique culinary experiences. 
                </p> 
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

        <div class="BOX">
            <div class="image">
                <img src="images/nuwaraeliya.jpg" alt="">
            </div>
            <div class="content">
                <h3>nuwara eliya</h3>
                <p> Our mission is to provide travelers with comprehensive, up-to-date, and authentic information about everything this island paradise
                    has to offer-from breathtaking landscapes and ancient heritage 
                    sites to thrilling adventures and unique culinary experiences. 
                </p> 
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>


        <div class="BOX">
            <div class="image">
                <img src="images/colombo.jpg" alt="">
            </div>
            <div class="content">
                <h3>colombo</h3>
                <p> mission is to provide travelers with comprehensive, up-to-date, and authentic information about everything this island paradise
                    has to offer-from breathtaking landscapes and ancient heritage 
                    sites to thrilling adventures and unique culinary experiences. 
                </p> 
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>

    </div>


    <div class="load-more"><a href="packages.php" class="btn">load more</a></div>
</section>
<!-- home package end -->




<!--home offer section starts -->
<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>ur mission is to provide travelers with comprehensive, up-to-date, and authentic information about everything this island paradise
            has to offer-from breathtaking landscapes and ancient heritage 
            sites to thrilling adventures and unique culinary experiences. </p>
            <a href="book.php" class="btn">book now</a>
    </div>
</section>
<!-- home offer section end -->







<!-- footer section start --> 
<section class="footer">
    <div class="box-container">
        <div class="box">
        <h3>Quick Links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
        <a href="packages.php"><i class="fas fa-angle-right"></i>package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
        </div>
        <div class="box">
        <h3>Extra Links</h3>
        <a href="#"><i class="fas fa-angle-right"></i>Ask Questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
        <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>Terms of Use</a>
        </div>
        <div class="box">
        <h3>Contact Info</h3>
        <a href="#"><i class="fas fa-phone"></i>+94 76 339 9521</a>
        <a href="#"><i class="fas fa-phone"></i>+94 76 339 9521</a>
        <a href="#"><i class="fas fa-envelope"></i>mohamedmaahi6@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i>Mawanella, Srilanka</a>
        </div>
        <div class="box">
            <h3>Follow Us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>
        </div>
    </div>
    
</section>
 <!-- footer section end -->
<!--  -->












<!-- Swiper JS link -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>



<!-- custom js file link -->
<script src="script.js"></script>

</body>
</html>