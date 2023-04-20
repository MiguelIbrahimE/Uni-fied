<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UULebanon </title>
    <link rel="icon" href="./logo-color.png">
    <link href='https://fonts.googleapis.com/css?family=Cedarville Cursive' rel='stylesheet'>
    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet"href="./CSS/indexstyles.css">
</head>
<body>
  <script src="./searchbar.js"></script>
    <a href="index.html" class="logo" target="_blank">
        <img src="./logo-color.png" alt=""  style="width:50px;height:50px">
    </a>
    <input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon"/>
    <label for="menu-icon"></label>
    <nav class="nav"> 		
        <ul class="pt-5">
            <li><a href="./Pages/Tourism.php">Touristic-<br>Attractions</a></li>
            <li><a href="./Pages/Restaurants.php">Restaurants</a></li>
            <li><a href="./Pages/Transportation.php">Transportation</a></li>
            <li><a href="./Pages/Lebanon.php">Map of Lebanon</a></li>
            <li><a href="./users//register_form.php">Sign In</a></li>
        </ul>
    </nav>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    
   
<div style="align-items: center;align-self: center;">
    <h1 style="text-align: center;align-items: center; margin: 0%;">Discover and Explore Lebanon in a<br>Unique and Unified Way</h1>
  </div>
  <br>
  <br> <br>
  <br>
  <br>
  <div style="padding: 10%;">
  <div>
    <div class="content_img" style="float: left; width: 45%; padding-bottom: 10px;">
      <img src="./Heritage/Anjar2.jpg" style="width: 100%;" onclick="Tourism();">
      <div class="img-text" style="text-align: center;">Tourism</div>
    </div>
    <div>
      <div class="content_img" style="float: right; width: 47%; padding-bottom: 10px;">
        <img src="./Restaurants/Osaka Sushi Lounge.jpg" style="width: 100%;" onclick="Restau()">
        <div class="img-text" style="text-align: center;">Restaurants</div>
      </div>
    </div>
  </div>
</div>

</body>
<script>
  function Restau(){
    document.location.href="./Pages/Restaurants.php"
  }
  function Tourism(){
    document.location.href="./Pages/Tourism.php"
  }
</script>
</html>