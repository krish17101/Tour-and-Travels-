<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<!--  section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>T</span>ravel</a>

    <nav class="navbar">
    <a href="index.php">home</a>
        <a href="Book.php">book</a>
        <a href="package.php">packages</a>
        <a href="index.php #services">services</a>
        <a href="index.php #gallery">gallery</a>
        <a href="index.php #review">review</a>
        <a href="index.php #contact">contact</a>
   
    
</header>

<!-- header section ends -->

    <!-- book section starts  -->

<section class="book" id="book">

<h1 class="heading">
<div class="header_1">
        <img src="images/header12.png" alt="">
    </div>
    <span>b</span>
    <span>o</span>
    <span>o</span>
    <span>k</span>
    <span class="space"></span>
    <span>n</span>
    <span>o</span>
    <span>w</span>
</h1>

<div class="row">

    <div class="image">
        <img src="images/book-img.svg" alt="">
    </div>

    <form class="book" action="">
        <div class="inputBox">
            <h3>Enter your name</h3>
            <input type="text" placeholder=" name">
        </div>
        <div class="inputBox">
            <h3>Enter your Destination place</h3>
            <input type="text" placeholder="place name">
        </div>
        <div class="inputBox">
            <h3>how many</h3>
            <input type="number" placeholder="number of guests">
        </div>
        <div class="inputBox">
            <h3>arrivals</h3>
            <input type="date">
        </div>
        <div class="inputBox">
            <h3>leaving</h3>
            <input type="date">
        </div>
        <input type="submit" class="btn" value="book now">
        
        <span class="back"> <a href="package.php" >Back</a></span>
        
    </form>

</div>

</section>

<!-- book section ends -->


<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Travel is a step-down subsidiary of Fairfax Financial Holdings Group; held through its Indian listed subsidiary, Thomas Cook (India). Travel India is a leading travel and tourism company active across various travel segments including Leisure Travel, Incentive Travel and Business Travel.</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">india</a>
            <a href="#">USA</a>
            <a href="#">japan</a>
            <a href="#">france</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="index.php">home</a>
            <a href="book.php">book</a>
            <a href="index.php">packages</a>
            <a href="index.php">services</a>
            <a href="index.php">gallery</a>
            <a href="index.php">review</a>
            <a href="index.php">contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">linkedin</a>
        </div>

    </div>
</section>



<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>