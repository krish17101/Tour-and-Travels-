<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
</head>
<body>
<!-- navbar section starts  -->

<!-- <header>

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
</header> -->

<!-- navbar section ends -->


<div>
    <?php 
            if(isset($_POST['submit'])){
                echo 'user submitted';
            }
    ?>
</div>   
    
<div>
<form action="registration.php" method="post">
    
<div class="Registration-container">
    <div class="row">
        <div class="column">    
            <h3>Registration</h3>
            <lable for="Name">Name: </lable>
            <input class="form-con" type="name" name="name"  placeholder="enter your name" required>
            <lable for="email">Email: </lable>
            <input class="form-con" type="email" name="email" placeholder="enter your email" required>
            <lable for="password">Password: </lable>
            <input class="form-con" type="password" name="password" placeholder="enter your password" required>
            
            <input class="form-con" type="submit" name="submit" value="Submit" >
            <p>Already have an account ? <a href="index.php"> Login</a></p>
        </div>   
    </div>
</div>
</form>
</div>

</body>
</html>