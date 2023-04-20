<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Byblos - UULebanon</title>
    <link rel="icon" href="../logo-no-background.png">
    <link rel="stylesheet"href="../CSS/Moreinfo.css">
    <script src="https://kit.fontawesome.com/82f797382f.js" crossorigin="anonymous"></script>
    <script src="../JS/Byblos.js">
  

    </script>
</head>
<body>
  <br> <br> <br> <br> 
<?php 
    require_once "../navbar/navbar.php";
    loadNavBar();
    ?>


  <script src="../JS/app.js"></script>  
  <script src="../JS/SearchBar.min.js"></script> 

    
  <div style="position:absolute;left:50%;top:50%;transform: translate(-50%, -50%);">
        

        <div style="width:100%;">
           <h1 style="text-align: center;">About:</h1>
           <p style="text-align: center;">"The ruins of many successive civilizations are found at Byblos, one of the oldest Phoenician cities. Inhabited since Neolithic times, it has been closely linked to the legends and history of the Mediterranean region for thousands of years. Byblos is also directly associated with the history and diffusion of the Phoenician alphabet." ~ <a hef="https://whc.unesco.org/en/list/295/">UNESCO</a></p>
           <div style="width:auto;height:50%">

               <div style="padding-right: 10px;">
               <img src="../Heritage/Old_souk_Jbeil1.jpg" style="width: 50%;float:left">
               </div>
              <div>
               
                <img src="../Heritage/Old_souk_Jbeil.jpg" style="width: 50%;float:right">
                <div style="width:100%;height:35%">
             
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3303.0354768391144!2d35.644276915216786!3d34.11984148058762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f5cac247f1d31%3A0xeaa60abda1f03ce9!2sByblos%20Citadel!5e0!3m2!1sen!2slb!4v1681980538457!5m2!1sen!2slb" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>  
           </div>
           
        </div>
       
   </div>
</div> 
<div class="weather-card" style="padding-left:10px;">
  <img src="" alt="Weather Icon" id="weather-icon">
  <div class="weather-info">
    <h2 id="city-name">City Name</h2>
    <h3 id="temperature">Temperature</h3>
    <p id="description">Weather Description</p>
  </div>
</div>
    </body>
</html>