

<!DOCTYPE html>
<!--Let's GET WAMPY!!-->
<html lang="en">

<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tyre - UULebanon</title>
    <link rel="icon" href="../logo-no-background.png">
   <link rel="stylesheet" href="../CSS/Moreinfo.css">
    <script src="https://kit.fontawesome.com/82f797382f.js" crossorigin="anonymous"></script>
    <script src="../JS/Tyre.js"></script>
  
    </script>
  </head>
<?php 
require "../config/cfg.php";
$db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);


?>
<body>
<?php 
    require_once "../navbar/navbar.php";
    loadNavBar();
    ?>
    
    <script src="../JS/SearchBar.min.js"></script> 
    <br>
    <br>
    <br>
    <br>
    <div style="position:absolute;left:50%;top:50%;transform: translate(-50%, -50%);">
        

         <div style="width:100%;">
            <h1 style="text-align: center;">About:</h1>
            <p style="text-align:center;font-size:14px">"Located on the southern coast of Lebanon, 83 km south of Beirut, the antique town of Tyre was the great Phoenician city that reigned over the seas and founded prosperous colonies such as Cadiz and Carthage and according to legend, was the place of the discovery of purple pigment."~UNESCO</p>
  <div style="width:auto;height:50%">

                <div style="padding-right: 10px;">
                 <img src="../Heritage/tyre2.jpg" style="width: 50%;float:left">
               </div>
               <div>
                
                 <img src="../Heritage/ruins-Tyre-Lebanon.jpg" style="width: 50%;float:right">
               </div>
               <div style="width:100%;height:30%">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6671.653220838251!2d35.20745562716855!3d33.27103134353518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151e7d8ea52c5ea7%3A0x59efe6dd17f39c84!2sRuins%20of%20Tyre%20-%20Necropolis!5e0!3m2!1sen!2slb!4v1677348835446!5m2!1sen!2slbb" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
   </div>
            </div>
         </div>
         
    </div>
    <div class="weather-card" style="padding-left:10px; width:25%">
  <img src="" alt="Weather Icon" id="weather-icon">
  <div class="weather-info">
    <h2 id="city-name" style="font-size:14px">City Name</h2>
    <h3 id="temperature">Temperature</h3>
    <p id="description">Weather Description</p>
    <p id="precipitation">Precipitation</p>
  </div>
</div>

    </body>
</html>
