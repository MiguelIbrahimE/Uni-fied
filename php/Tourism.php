<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="../logo-no-background.png">
  <link rel="stylesheet" type="text/css" href="../CSS/Tourism.css">
</head>
<body>
  <!-- Start of HTML and NavBar-->
  <?php 
    require_once "../navbar/navbar.php";
    loadNavBar();
  ?>
  <br><br><br><br>

  <?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  if(!isset($_SESSION["user_name"])){
    header("Location: ../index.php");
    exit();
  }
  $usrnm = $_SESSION["user_name"];

  require "../config/cfg.php";

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Retrieve user ID from database using email address
    $stmt = $pdo->prepare("SELECT ID FROM users WHERE email = :email");
    $stmt->bindParam(":email", $_SESSION["user_name"]);
    $stmt->execute();
    $user_id = $stmt->fetchColumn();

    // Fetch all visited sites for the user
    $stmt = $pdo->prepare("SELECT site_name, visited FROM visited_sites WHERE user_id = :user_id");
    $stmt->bindParam(":user_id", $user_id);
    $stmt->execute();
    $visited_sites = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = $pdo->query("SELECT NAME FROM touristic_sites");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="cards">
      <?php
      if ($result) {
        foreach($result as $row) {
          $name = $row["NAME"];
          $visited = false;

          // Check if user has visited the current site before
          foreach($visited_sites as $site) {
            if($site["site_name"] == $name && $site["visited"] == 1) {
              $visited = true;
              break;
            }
          }

          ?>
          <div class="card">
            <div class="card__image-holder">
              <?php echo'<img class="card__image" src="../Heritage/'.$name.'.jpg" />';?>
            </div>
            <div class="card-title">
              <h2>
                <?php echo'<a href="./'.$name.'.php" target="_blank">'.$name.'</a>';?>
              </h2>
              <div>
               <?php 
               // Set the checked property based on whether the user has visited the site before
               $checked = $visited ? "checked" : "";
               echo' <input type="checkbox" id="'.$name.'" name="'.$name.'" onclick="updateVisited(this)" '.$checked.'>';?>
               <?php echo' <label for="'.$name.'"><small>Visited</small></label>';?>
              </div>
            </div>
          </div>
          <?php
        } // end foreach
        ?>
      </div>
      <?php
      } else {
        echo "<p>No touristic sites found in the database</p>";
      }
    } catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
    $pdo = null;
    ?>
    <script src="../JS/Tourism.js"></script>
  </body>
</html>
