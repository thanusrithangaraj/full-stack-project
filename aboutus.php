<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./styling.css">
    <title>About Us</title>
</head>

<body>

    <?php include('navbar.php') ?>

    <div class="container about">
        <h1 class="title">About us</h1>
        <div class="about-content">
            <div class="image">
                <img src="./img/about">
            </div>

            <div class="content">
                <p>Welcome to BLUSH ND GLOW!
                    At BLUSH ND GLOW, we believe that beauty is more than just skin deep—it's a reflection of your unique personality, style, and confidence. 
                    Our mission is to empower individuals to express themselves freely through high-quality cosmetics that enhance their natural beauty.
                    Established with a passion for cosmetics and a commitment to customer satisfaction, BLUSH ND GLOW is your ultimate
                     destination for all things beauty. 
                      
                      <P>BLUSH ND GLOW is more than just a place to shop for cosmetics—it's a community. 
                      Our team of knowledgeable beauty enthusiasts is here to provide personalized recommendations, expert tips, and honest advice to help you 
                      achieve your desired look with confidence. Whether you're experimenting with bold new trends 
                      or sticking to timeless classics, we're committed to helping you look and feel your best, inside and out.
                      Thank you for choosing BLUSH ND GLOW as your beauty destination.</P>
                      
                     <P>We invite you to explore our collection, 
                      discover your signature style, and join us in celebrating the beauty of self-expression.
                      
                      Welcome to the BLUSH ND GLOW family! </p>

                <a href="./home.php" class="btn btn-outline-primary readmore">Read More</a>
            </div>
        </div>
    </div>

    <?php include('footer.php') ?>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>