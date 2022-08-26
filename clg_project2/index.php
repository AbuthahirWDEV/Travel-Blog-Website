<?php

include('./inc/header.php');
include('./inc/config.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Travel</title>
</head>
<body>
     <!-- Video Source -->
  <!-- https://www.pexels.com/video/aerial-view-of-beautiful-resort-2169880/ -->
  <section class="showcase">
    <header>
      <h2 class="logo">Travel</h2>
      <div class="toggle"></div>
    </header>
    <video src="Royalty Free Travel Video for Website Background(1080P_HD).mp4" muted loop autoplay></video>
    <div class="overlay"></div>
    <div class="text">
      <h2>Never Stop To </h2> 
      <h3>Exploring The World</h3>
      <p>Travel is the only thing you buy that makes you richer.<br>
        A journey of thousand miles will begin with single step. 
        </p>
      <a href="blog.php">Explore</a>
    </div>
    <ul class="social">
      <li><a href="#"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
      <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
      <li><a href="#"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
    </ul>
  </section>
  <div class="menu">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="#">News</a></li>
      <li><a href="destination.php">Destination</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="contactus.php">Contact</a></li>
      <li><a href="login.php">Login / Register</a></li>
    </ul>
    <!--<p class="ps-4 my-auto">Hi,<?php echo$_SESSION['username']?> </P>-->
  </div>



  <script src="show.js"></script>

    

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>