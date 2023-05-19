<?php
session_start();
if(isset($_SESSION['id'])&isset($_SESSION['fname'])){
  
// User is logged in, display their name
$username = $_SESSION['fname'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    
    <!--font awesome cdn stuff-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- header section start -->
<section class="header">
    <a href="home.php" class="logo">tours and travels</a>
    
    <nav class="navbar">
        <a href="home.php" >home</a>
        <a href="about.php" >about</a>
        <a href="package.php" >package</a>
        <a href="login.php" ><?php echo "Hi ".$username; ?></a>
        <a href="logout.php" >logout</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!-- header section end -->

<!-- home section starts -->
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <!-- <div class="swiper-slide slide" style="background:url(https://as2.ftcdn.net/v2/jpg/02/65/26/83/1000_F_265268314_LmykO3vrtzmh3TQbBdnxj9vUczqqJXCU.jpg) no repeat"> -->
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <!-- <div class="swiper-slide slide" style="background:url(https://as2.ftcdn.net/v2/jpg/02/65/26/83/1000_F_265268314_LmykO3vrtzmh3TQbBdnxj9vUczqqJXCU.jpg) no repeat"> -->
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover new places</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <!-- <div class="swiper-slide slide" style="background:url(https://as2.ftcdn.net/v2/jpg/02/65/26/83/1000_F_265268314_LmykO3vrtzmh3TQbBdnxj9vUczqqJXCU.jpg) no repeat"> -->
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make your travel worthwhile</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>


        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<!-- home section ends -->

<!-- services section starts -->
<section class="services">

    <h1 class="heading-title">our services</h1>
    <div class="box-container">
        <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>adventure</h3>
        </div>

        <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>tour guide</h3>
        </div>

        <div class="box">
            <img src="images/icon-3.png" alt="">
            <h3>trekking</h3>
        </div>

        <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>camp fire</h3>
        </div>
        
        <div class="box">
            <img src="images/icon-5.png" alt="">
            <h3>off road</h3>
        </div>
        
        <div class="box">
            <img src="images/icon-6.png" alt="">
            <h3>camping</h3>
        </div>

    </div>
</section>
<!-- services section ends -->

<!-- home about services section start -->
<section class="home-about">
    <div class="image">
        <img src="images/about-img.jpg" alt="" >
    </div>

    <div class="content">
        <h3>about us</h3>
        <p>Welcome to our travels website! We are a team of passionate travelers who have come together to help you plan your dream vacation. Our website is designed to provide you with a seamless and stress-free booking experience.

We understand that travel planning can be overwhelming, so we aim to simplify the process by providing you with comprehensive information about destinations, accommodation options, and activities to do. Whether you're looking for a relaxing beach holiday, an adventure-packed trip, or a cultural immersion experience, we've got you covered.
        </p>
        <a href="about.php"class="btn">read more</a>

    </div>
</section>
<!-- home about services section end -->


<!-- home packages section starts -->

<section class="home-packages">
    <h1 class="heading-title">our packages</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="images/img1.jpg" alt="">
            </div>
            <div class="content">
                <h3>
                    france
                </h3>
                <p>starting at ₹2,49,999</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img2.jpg" alt="">
            </div>
            <div class="content">
                <h3>
                    spain
                </h3>
                <p>starting at ₹2,99,999</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/img3.jpg" alt="">
            </div>
            <div class="content">
                <h3>
                    singapore
                </h3>
                <p>starting at ₹1,49,999</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>

    </div>

    <div class="load-more"><a href="package.php" class="btn">load more</a></div>
</section>

<!-- home packages section ends -->

<!-- home offer section starts -->
<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>click now to save 50% off on your travel plans 
        </p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>

<!-- home offer section ends -->


<!-- footer srat -->*
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php" ><i class="fas fa-angle-right"></i> home</a>
            <a href="about.php" ><i class="fas fa-angle-right"></i> about</a>
            <a href="package.php" ><i class="fas fa-angle-right"></i> package</a>
            <a href="book.php" ><i class="fas fa-angle-right"></i> book</a>
        </div>
        
        <div class="box">
            <h3>extra links</h3>
            <a href="#" ><i class="fas fa-angle-right"></i>ask questions</a>
            <a href="#" ><i class="fas fa-angle-right"></i>about us</a>
            <a href="#" ><i class="fas fa-angle-right"></i>privacy policy</a>
            <a href="#" ><i class="fas fa-angle-right"></i>terms of use</a>
            
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" ><i class="fas fa-phone"></i>+91 1234567890</a>
            <a href="#" ><i class="fas fa-envelope"></i>travels</a>
            <a href="#" ><i class="fas fa-map"></i>Bangalore, India -123456</a>
            
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#" ><i class="fab fa-facebook"></i>facebook</a>
            <a href="#" ><i class="fab fa-twitter"></i>twitter</a>
            <a href="#" ><i class="fab fa-instagram"></i>instagram</a>
            <a href="#" ><i class="fab fa-instagram"></i>instagram</a>
            
            
        </div>


    </div>

    <div class="credit">text <span>cad project</span></div>
</section>
<!-- footer end -->



<!-- swiper js file -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!-- own js file link -->
<script src="js/script.js"></script>
</body>
</html>
<?php }else{
    $username="Login";
    header("Location: login.php");
    exit;
} ?>