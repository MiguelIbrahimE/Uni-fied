<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kadisha - UULebanon </title>
    <link rel="icon" href="../logo-no-background.png">
    <link rel="stylesheet"href="../CSS/Moreinfo.css">
    <script src="https://kit.fontawesome.com/82f797382f.js" crossorigin="anonymous"></script>
    <script>
  

  let apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=ehden&appid=7c906fd2f1359b69d792183ac6cc79bc&units=metric`;
  
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
           <p style="text-align: center;">Beiteddine is 850 meters above the sea level. In it there is Beiteddine Palace, which was built by Emir Bechir el Chehabi II (who ruled Mount Lebanon for more than half a century). This palace is the best example of 19th century Lebanese architecture; it was built over a thirty year period of time.

In order to reach Beiteddine, one has to pass through Deir el Qamar and Mousa Castle, and a 6 kilometer drive on the main road. </p>
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