
<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
  <!--Head-->
   <link rel="icon" href="../logo-no-background.png">
  <link rel="stylesheet" type="text/css" href="../CSS/Tourism.css">
  <!--Burger Icon-->
 
</head>
<body>
  <!-- Start of HTML and NavBar-->
  <header class="header" id="header">
    <nav class="navbar container">
       <a href="../index.html" class="brand"><img src="../logo-no-background.png"style="width:46px"></a>
       <div class="burger" id="burger">
          <span class="burger-line"></span>
          <span class="burger-line"></span>
          <span class="burger-line"></span>
       </div>
       <span class="overlay"></span>
       <div class="menu" id="menu">
          <ul class="menu-inner">
             <li class="menu-item"><a class="menu-link" href="../index.php">Home</a></li>
             <li class="menu-item"><a class="menu-link" href="./Restaurants.php">Restaurants</a></li>
             <li class="menu-item"><a class="menu-link" href="./Lebanon.php">Map of Lebanon</a></li>
             <li class="menu-item"><a class="menu-link" href="./Transportation.php">Transportation</a></li>
             <li class="menu-item"><a class="menu-link" href="./SignUp.php">Sign Up/ Log In</a></li>
          </ul>
       </div>
       <span><i class="bx bx-search search-toggle"></i></span>
       <div class="search-block">
          <form class="search-form">
             <span><i class="bx bx-arrow-back search-cancel"></i></span>
             <input type="search" name="search" class="search-input" placeholder="Search here...">
          </form>
          <div id="search-results"></div>
       </div>
       
    </nav>
 </header>
  <br><br><br><br>';

  ?>
 <?php
require "../config/cfg.php";

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $stmt = $pdo->query("SELECT NAME FROM touristic_sites");
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

  if ($result) {
    foreach($result as $row) {
      $name = $row["NAME"];
      echo '<div class="card">
              <div class="card__image-holder">
                <img class="card__image" src="../Heritage/'.$name.'.jpg" />
              </div>
              <div class="card-title">
                <h2>
                  <a href="./'.$name.'.php" target="_blank">'.$name.'</a>
                </h2>
                <div>
                  <input type="checkbox" id="'.$name.'" name="'.$name.'" onclick="run()">
                  <label for="'.$name.'"><small>Visited</small></label>
                </div>
              </div>
            </div>';
    }
  } else {
    echo "0 results";
  }
  
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

$pdo = null;
?>
</body>
<script src="../JS/app.js"></script>  
  <script src="../JS/SearchBar.js"></script>  

</html>