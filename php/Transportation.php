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
    <title>Transportation - UULebanon </title>
    <link rel="icon" href="../logo-no-background.png">
    <link href='https://fonts.googleapis.com/css?family=Cedarville Cursive' rel='stylesheet'>
    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet"href="../CSS/Transportation.css">
    <script src="https://kit.fontawesome.com/82f797382f.js" crossorigin="anonymous"></script>

</head>
<body>
  <?php 
    require_once "../navbar/logedinbar.php";
    loadNavBar();
    ?>


  <script src="../JS/SearchBar.min.js"></script>   
  <br>
  
  <!--Cards-->
  
  <div class="cards">
    <div class="card">
      <div class="card__image-holder">
        <img class="card__image" src="../Transportation/Public Transportation.jpg">
      </div>
      <div class="card-title">
        </a>
        <h2>
          
          <a href="./Buses.php"target="_blank">Public Transportation</a>
          
        </h2>
      <small>Please take a note that public transportation in Lebanon is behind and that the prices are constantly changing.</small>
      </div>  
    </div>
    
    <div class="card">
      <div class="card__image-holder">
        <img class="card__image" src="../Transportation/Allo Taxi.jpg"/>
      </div>
      <div class="card-title">
        <h2>
          
          <a href="https://allo.taxi/home"target="_blank">Allo Taxi</a>
          
        </h2>
        <small><br>Also has busses and vans</small>
          
      </div>
     
    </div>
    <div class="card">
      <div class="card__image-holder">
        <img class="card__image" src="../Transportation/uber.jpg" />
      </div>
      <div class="card-title">
        <a href="#" class="toggle-info btn">
          <span class="left"></span>
          <span class="right"></span>
        </a>
        <h2>
          
           <a href="https://www.uber.com/us/en/ride/"target="_blank">Uber</a>
           <small></small>
          </h2>
          
      </div>
      
    </div>
    <div class="card">
      <div class="card__image-holder">
        <img class="card__image" src="../Transportation/Careem.jpg" />
      </div>
      <div class="card-title">
        <h2>
          
          <a href="https://www.careem.com/"target="_blank">Careem</a>
          
        </h2>
        
      </div>
    </div>

  
    <div class="card">
      <div class="card__image-holder">
        <img class="card__image" src="../Transportation/bolt.jpg" />
      </div>
      <div class="card-title">
        
        <h2>
        
          <a href="https://bolt.eu/en/cities/beirut/"target="_blank">Bolt</a>
          
          
        </h2>
      </div>
      
    </div>
    </div>
  
  </div>
  <!-- End of Card Layout-->
 <br>
 <br>
</body>
</html>