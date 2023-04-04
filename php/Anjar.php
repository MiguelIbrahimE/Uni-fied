<?php
session_start();

if (!isset($_SESSION["uid"])) {
    header("Location: ../index.html");
    exit();
}

?>

<!-- This is the DOCTYPE declaration for HTML5 document. -->
<!DOCTYPE html>

<!-- The opening tag of a HTML5 document. -->
<html lang="en">

<head>
    <!-- Character encoding and compatibility of the page. -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The title of the webpage which displays on the tab. -->
    <title>Anjar - UULebanon</title>
    <!-- Favicon icon which represents the webpage in the user's browser tab. -->
    <link rel="icon" href="../Lebanese_Flag.ico">
    <!-- An external stylesheet is added which helps to style the HTML page. -->
    <link rel="stylesheet" href="../CSS/Moreinfo.css">
    <!-- Required JavaScript framework 'Font Awesome' is linked from CDN. -->
    <script src="https://kit.fontawesome.com/82f797382f.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Header or navigation bar for the website. -->
    <header class="header" id="header">
    <nav class="navbar container">
       <a href="../index.html" class="brand">UNIFIED</a>
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

    <br><br>
    <br><br>
    <!-- A section containing two divs -->
    <div>
        <!-- A div that holds an embedded Google maps location powered by iframe. -->
        <div style="width:50%;float:left">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3318.0844551935083!2d35.93139905120686!3d33.73263218059935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1518cd3e96cabccb%3A0xcf629f22f09b166e!2sUmayyad%20City%20Ruins!5e0!3m2!1sen!2slb!4v1677145361125!5m2!1sen!2slb" width='100%' height="450" style="border:0;" float="left" display="inline-block" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <!-- Another div for information about Anjar followed by two photos. -->
        <div style="width:49%;float:right;text-align: center;">
            <h1>About:</h1>
            <p>"Founded during the Umayyad period under Caliph Walid Ibn Abd Al-Malak (705-715), the city of Anjar bears outstanding witness to the Umayyad civilization. Anjar is an example of an inland commercial centre, at the crossroads of two important routes: one leading from Beirut to Damascus and the other crossing the Bekaa and leading from Homs to Tiberiade." ~<a href="https://whc.unesco.org/en/list/293/"style="text-decoration:none">UNESCO</a></p>
            
            <!-- First photo for Anjar. -->
            <img src="../Heritage/Anjar.jpg" style="width: inherit;">
            
            <!-- Second photo for Anjar. -->
            <img src="../Heritage/Anjar2.jpg" style="width: inherit;">
        </div>
    </div>

</body>

</html> 
