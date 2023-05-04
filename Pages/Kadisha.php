<!DOCTYPE html>
<html lang="en">
<head>
<script>
  header("Content-Security-Policy: default-src 'self'; script-src 'self'; style-src 'self' https://fonts.googleapis.com; img-src 'self';");
 </script> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kadisha - UULebanon </title>
    <link rel="icon" href="../logo-no-background.png">
    <link rel="stylesheet"href="../CSS/Moreinfo.css">
    <script src="https://kit.fontawesome.com/82f797382f.js" crossorigin="anonymous"></script>
    <script src="../JS/Kadisha.js">
  
    </script>
</head>
<body>
  <!-- Start of HTML and NavBar-->
  <?php 
    require_once "../navbar/navbar.php";
    loadNavBar();
    ?>



  <script src="../JS/app.js"></script>  
  <script src="../JS/SearchBar.min.js"></script> 
  <br>
  <br>
  <br>
  <br>
   
  <div style="position:absolute;left:50%;top:50%;transform: translate(-50%, -50%);">
        

        <div style="width:100%;">
           <h1 style="text-align: center;">About:</h1>
           <p style="text-align: center;font-size:14px"">The Qadisha valley is one of the most important early Christian monastic settlements in the world. Its monasteries, many of which are of a great age, stand in dramatic positions in a rugged landscape. Nearby are the remains of the great forest of cedars of Lebanon, highly prized in antiquity for the construction of great religious buildings.</p>
           <div style="width:auto;height:50%">

               <div style="padding-right: 10px;">
               <img src="../Heritage/Kadishas.jpg" style="width: 50%;float:left">
               </div>
              <div>
               
                <img src="../Heritage/Kadisha.jpg" style="width: 50%;float:right">
                <div style="width:100%;height:35%">
            
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13187.140652046557!2d35.9469634!3d34.2795302!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1522025604855ff5%3A0x25b3acb003a8c175!2sKadisha%20Valley!5e0!3m2!1sen!2slb!4v1677340709744!5m2!1sen!2slb" width="100%"  height="35%"style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>  
           </div>
           
        </div>
        </div>
   </div>
</div> 

<div class="weather-card" style="padding-left:10px; width:25%">
  <img src="" alt="Weather Icon" id="weather-icon">
  <div class="weather-info">
    <h2 id="city-name"style="font-size:14px"">City Name</h2>
    <h3 id="temperature">Temperature</h3>
    <p id="description">Weather Description</p>
    <p id="precipitation">Precipitation</p>
  </div>
</div>
    </body>
</html>