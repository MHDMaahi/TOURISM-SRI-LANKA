<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>


    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@11.1.14/swiper-bundle.min.css">
    <!-- Include Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper@9.0.0/swiper-bundle.min.css">


   <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <!-- custom css link -->
     <link rel="stylesheet" href="styles.css">
   



</head>
<body>
<!-- header start -->
<section class="header">
    <a href="home.php" class="logo">Travel.</a>
    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="packages.php">package</a>
        <a href="book.php">book</a>
    </nav>

    <button id="menu-btn" class="fas fa-bars" aria-label="Toggle menu"></button>

   
</section>

<!-- header end --> 
 

<div class="heading" style="background:url(images/heading-bg-1.jpg)  no-repeat" >
    <h1>About Us</h1>
</div>

<!-- about section strt-->
 <section class="about">

 <div class="image">
    <img src="images/anuradhapura.jpg" alt="">
 </div>
 <div class="content">
    <h3>Why Choose Us?</h3>

    <p>welcome to explore srilanka, your gateway to discovering the enhanting beauty, rich history, and vibrant cultutre of Srilanka.
    Our mission is to provide travelers with comprehensive, up-to-date, and authentic information about everything this island paradise
            has to offer-from breathtaking landscapes and ancient heritage sites to thrilling adventures and unique culinary experiences. 
       </p>           
    
    <p>Whether you are a solo backpacker, a couple on a romantic gateway, or a family looking for an unforgettable vacation, 
        we are here to make your journey effortless and memorable.</p>

    <div class="icons-container">
        <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destinations</span>
        </div> 
        <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>afforadble price</span>
        </div> 
        <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service</span>
        </div>   
    </div>
 </div>
 </section>
<!-- about end -->

<h2>Reviews</h2>
    <div id="reviews">
        <?php include 'display_reviews.php'; ?>
    </div>

<h1>Submit a Review</h1>
    <form action="submit_review.php" method="POST" class="review-form">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="rating">Rating (1-5):</label>
        <input type="number" id="rating" name="rating" min="1" max="5" required>

        <label for="comment">Comment:</label>
        <textarea id="comment" name="comment" required></textarea>

        <button type="submit">Submit Review</button>
    </form>


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













<!-- Swiper JS link -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- Include Swiper JS -->
<script src="https://unpkg.com/swiper@9.0.0/swiper-bundle.min.js"></script>




<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>