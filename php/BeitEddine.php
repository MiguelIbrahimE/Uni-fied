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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeitEddine - UULebanon</title>
    <link rel="icon" href="../logo-no-background.png">
    <link rel="stylesheet"href="../CSS/Moreinfo.css">
    <script src="https://kit.fontawesome.com/82f797382f.js" crossorigin="anonymous"></script>
    <script>
  

  let apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=Beit%20ed-Dine&appid=7c906fd2f1359b69d792183ac6cc79bc&units=metric`;
  
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
<body>
  <br> <br> <br> <br> 
<?php 
     require_once "../navbar/logedinbar.php";
    loadNavBar();
    ?>


  <script src="../JS/app.js"></script>  
  <script src="../JS/SearchBar.min.js"></script> 

    
  <div style="position:absolute;left:50%;top:50%;transform: translate(-50%, -50%);">
        

        <div style="width:100%;">
           <h1 style="text-align: center;">About:</h1>
           <p style="text-align: center;">Beiteddine is 850 meters above the sea level. In it there is Beiteddine Palace, which was built by Emir Bechir el Chehabi II (who ruled Mount Lebanon for more than half a century). This palace is the best example of 19th century Lebanese architecture; it was built over a thirty year period of time.

In order to reach Beiteddine, one has to pass through Deir el Qamar and Mousa Castle, and a 6 kilometer drive on the main road. </p>
           <div style="width:auto;height:50%">

               <div style="padding-right: 10px;">
               <img src="../Heritage/be.jpg" style="width: 50%;float:left">
               </div>
              <div>
               
                <img src="../Heritage/be2.jpg" style="width: 50%;float:right">
                <div style="width:100%;height:35%">
            
             <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6639.125077687026!2d35.5767963!3d33.6943899!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f203c75459d93%3A0x339c929930abd754!2sBeiteddine%20Palace!5e0!3m2!1sen!2slb!4v1681980306873!5m2!1sen!2slb" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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