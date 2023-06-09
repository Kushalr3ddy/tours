<?php
session_start();
if(isset($_SESSION['id'])&isset($_SESSION['fname'])){
  
// User is logged in, display their name
$fullname = $_SESSION['fname'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>

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
        <a href="login.php" >login</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!-- header section end -->

<div class="heading" style="background:url(images/header-bg-2.jpg) no-repeat">
<h1>book now</h1>

</div>

<!-- booking section starts -->
<section class="booking">
    <h1 class="heading-title">book your trip</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="<?php echo $fullname; ?>" name="name">
            </div>

            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>

            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="phone no" name="phone">
            </div>

            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>

            <div class="inputBox">
                <span>where to :</span>
                <input type="text" placeholder="place you want to visit" name="location">
            </div>

            <div class="inputBox">
                <span>how many :</span>
                <input type="number" placeholder="number of guests" name="guests">
            </div>

            <div class="inputBox">
                <span>arrivals :</span>
                <input type="date" name="arrivals">
            </div>

            <div class="inputBox">
                <span>leaving :</span>
                <input type="date" name="leaving">
            </div>

        </div>

        <input type="submit" value="submit" class="btn" name="send">

    </form>
</section>
<!-- booking section ends -->






<!-- footer srat -->
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
    //$username="Login";
    header("Location: login.php");
    exit;
} ?>