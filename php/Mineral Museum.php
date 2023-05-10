<? 
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
<!--Let's GET WAMPY!!-->
<html lang="en">

<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIM - UULebanon</title>
    <link rel="icon" href="../logo-no-background.png">
   <link rel="stylesheet" href="../CSS/Moreinfo.css">
    <script src="https://kit.fontawesome.com/82f797382f.js" crossorigin="anonymous"></script>
    <script>
  

  let apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=Beirut&appid=7c906fd2f1359b69d792183ac6cc79bc&units=metric`;
  
  fetch(apiUrl)
    .then(response => response.json())
    .then(data => {
      console.log(data);
      let temperature = data['main']['temp'];
      let description = data['weather'][0]['description'];
      let icon = data['weather'][0]['icon'];
  
      document.getElementById("city-name").innerHTML = data['name'];
      document.getElementById("temperature").innerHTML = `${temperature}&deg;C`;
      document.getElementById("description").innerHTML = description;
      document.getElementById("weather-icon").setAttribute("src", `https://openweathermap.org/img/w/${icon}.png`);
    })
    .catch(error => console.log(error));
  
    </script>
  </head>
<?php 
require "../config/cfg.php";
$db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);


?>
<body>
<?php 
    require_once "../navbar/logedinbar.php";
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
           <p style="text-align: center;">
           mim is a private mineral museum in Beirut, Lebanon. It exhibits more than 1800 minerals, representing some 400 different species from over 70 countries. Created by nature itself, those works of art with their breathtaking aesthetics were formed in earth’s crust millions of years ago.

            <div style="width:auto;height:50%">

               <div style="padding-right: 10px;">
               <img src="../images/mim1.jpg" style="width: 50%;float:left">
               </div>
              <div>
               
                <img src="../images/mim2.jpg" style="width: 50%;float:right">
                <div style="width:100%;height:35%">
            
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.382226852332!2d35.5119313152105!3d33.87980858065314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f1705ab8bd363%3A0xb28421716fea4f82!2sMIM%20Mineral%20Museum!5e0!3m2!1sen!2slb!4v1681837582978!5m2!1sen!2slb" width='100%' height="100%" style="border:0;" float="left" display="inline-block" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>  
           </div>
           
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
