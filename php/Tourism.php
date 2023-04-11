

<!DOCTYPE html>
<html lang="en">
<head>
  <!--Head-->
   <link rel="icon" href="../logo-no-background.png">
  <link rel="stylesheet" type="text/css" href="../CSS/Tourism.css">
  <!--Burger Icon-->
 
</head>
<body>
  <!-- Start of HTML and NavBar-->
  <?php 
    require_once "../navbar/navbar.php";
    loadNavBar();
    ?>
  <br><br><br><br>

 
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
      ?><div class="card">
              <div class="card__image-holder">
                <?php echo'<img class="card__image" src="../Heritage/'.$name.'.jpg" />';?>
              </div>
              <div class="card-title">
                <h2>
                  <?php echo'<a href="./'.$name.'.php" target="_blank">'.$name.'</a>';?>
                </h2>
                <div>
                 <?php echo' <input type="checkbox" id="'.$name.'" name="'.$name.'" onclick="run()">';?>
                 <?php echo' <label for="'.$name.'"><small>Visited</small></label>';?>
                </div>
              </div>
            </div>
   <?php }
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