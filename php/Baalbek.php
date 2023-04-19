<?php
  
   if (session_status() == PHP_SESSION_NONE) {
     session_start();
   }
   if(!isset($_SESSION["user_name"])){
     header("Location: ../index.php");
     exit();
   }
   $usrnm = $_SESSION["user_name"];
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baalbek - UULebanon</title>
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
       <div style="width:50%;float:left;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.443306833477!2d36.2038155512128!3d34.006830180523224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1518a162051b92a1%3A0x8e971363504900cf!2sBaalbek%20Roman%20Ruins!5e0!3m2!1sen!2slb!4v1677235799713!5m2!1sen!2slb" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
       <div style="width:49%;float:right;text-align: center;">
        <h1>About:</h1>
        <p>"The complex of temples at Baalbek is located at the foot of the south-west slope of Anti-Lebanon, bordering the fertile plain of the Bekaa at an altitude of 1150 m.  The city of Baalbek reached its apogee during Roman times.  Its colossal constructions built over a period of more than two centuries, make it one of the most famous sanctuaries of the Roman world and a model of Imperial Roman architecture. Pilgrims thronged to the sanctuary to venerate the three deities, known under the name of the Romanized Triad of Heliopolis, an essentially Phoenician cult (Jupiter, Venus and Mercury)." ~UNESCO</p>
        <img src="../Heritage/Baalbek.jpg" style="width: inherit;">
        <img src="../Heritage/MappedBaalbek.jpg" style="width: inherit;">
    
      </div>
    </div>
</div> 

    </body>
</html>