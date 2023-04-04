<?php
session_start();

if (!isset($_SESSION["uid"])) {
    header("Location: ../index.html");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map View of Lebanon</title>
    <link rel="icon" href="../Lebanese_Flag.ico">
    <link rel="stylesheet"href="../CSS/Lebanon.css">
    <script src="https://kit.fontawesome.com/82f797382f.js" crossorigin="anonymous"></script>

    </head>
    <header class="header" id="header">
    <nav class="navbar container">
       <a href="../index.html" class="brand">Unified</a>
       <div class="burger" id="burger">
          <span class="burger-line"></span>
          <span class="burger-line"></span>
          <span class="burger-line"></span>
       </div>
       <span class="overlay"></span>
       <div class="menu" id="menu">
          <ul class="menu-inner">
             <li class="menu-item"><a class="menu-link" href="../index.html">Home</a></li>
             <li class="menu-item"><a class="menu-link" href="./Restaurants.html">Restaurants</a></li>
             <li class="menu-item"><a class="menu-link" href="./Lebanon.html">Map of Lebanon</a></li>
             <li class="menu-item"><a class="menu-link" href="./Transportation.html">Transportation</a></li>

          </ul>
       </div>
       <span><i class="bx bx-search search-toggle"></i></span>
       <div class="search-block">
          <form class="search-form">
             <span><i class="bx bx-arrow-back search-cancel"></i></span>
             <input type="search" name="search" class="search-input" placeholder="Search here...">
          </form>
       </div>
    </nav>
 </header>


  <script src="../JS/app.js"></script>  
  <script src="../JS/SearchBar.js"></script>  
  
        <br>
    <!--https://www.google.com.qa/maps/d/-->
    
    <iframe src="https://www.google.com.qa/maps/d/u/0/embed?mid=1Ly1TatB7RWT20NFJRevhY_2Mjb_2iGI&ehbc=2E312F" width="100%" height="780px"></iframe>
</body>
</html>