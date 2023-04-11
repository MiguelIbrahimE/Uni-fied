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
    <title>BeitEddine - UULebanon</title>
    <link rel="icon" href="../Lebanese_Flag.ico">
    <link rel="stylesheet"href="../CSS/Moreinfo.css">
    <script src="https://kit.fontawesome.com/82f797382f.js" crossorigin="anonymous"></script>

</head>
<body>
<?php 
    require_once "../navbar/navbar.php";
    loadNavBar();
    ?>


  <script src="../JS/app.js"></script>  
  <script src="../JS/SearchBar.js"></script>  
        <br>
    <div>
       <div style="width:51%;float:left;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3319.504036796937!2d35.57782751552176!3d33.695904243870764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f203c75459d93%3A0x339c929930abd754!2sBeiteddine%20Palace!5e0!3m2!1sen!2slb!4v1677258916129!5m2!1sen!2slb" height="450" width='100%'style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
       <div style="width:49%;float:right;text-align: center;">
        <h1>About:</h1>
        <p>"Sitting majestically on a hill surrounded by terraced gardens and orchards, Beiteddine Palace is one of the highlights of the Chouf Mountains. This restored 19th-century gem features sumptuous interiors, views over the surrounding hills and an important archaeological collection. Although conceived by Italian architects, the palace incorporates many traditional forms of Arab design and is a model of elegance. In summer, it's the venue of a well-known arts festival. The village is around 50km southeast of Beirut." ~<a href="https://www.lonelyplanet.com/lebanon/south-of-beirut/chouf-mountains/attractions/beiteddine-palace/a/poi-sig/1459395/361103">lonelyplanet</a></p>
        <img src="../Heritage/be.jpg" style="width: inherit;">
        <img src="../Heritage/be2.jpg" style="width: inherit;">
    
      </div>
    </div>
</div> 

    </body>
</html>