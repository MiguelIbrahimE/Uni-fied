<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="../logo-no-background.png">
  <link rel="stylesheet" type="text/css" href="../CSS/Tourism.css">
</head>
<body>
  <!-- Start of HTML and NavBar-->
  <?php 
    require_once "../navbar/logedinbar.php";
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
    
      <script>
   // Open and Close Navbar Menu
const navbarMenu = document.getElementById("menu");
const burgerMenu = document.getElementById("burger");
const bgOverlay = document.querySelector(".overlay");

if (burgerMenu && bgOverlay) {
   burgerMenu.addEventListener("click", () => {
      navbarMenu.classList.add("is-active");
      bgOverlay.classList.toggle("is-active");
   });

   bgOverlay.addEventListener("click", () => {
      navbarMenu.classList.remove("is-active");
      bgOverlay.classList.toggle("is-active");
   });
}

// Close Navbar Menu on Links Click
document.querySelectorAll(".menu-link").forEach((link) => {
   link.addEventListener("click", () => {
      navbarMenu.classList.remove("is-active");
      bgOverlay.classList.remove("is-active");
   });
});

// Open and Close Search Bar Toggle
const searchBlock = document.querySelector(".search-block");
const searchToggle = document.querySelector(".search-toggle");
const searchCancel = document.querySelector(".search-cancel");

if (searchToggle && searchCancel) {
   searchToggle.addEventListener("click", () => {
      searchBlock.classList.add("is-active");
   });

   searchCancel.addEventListener("click", () => {
      searchBlock.classList.remove("is-active");
   });
}

const searchInput = document.querySelector('.search-input');
const searchResults = document.querySelector('#search-results');
const files = [
  {name:"Anjar", url:"../Pages/Anjar.php"},
  {name:"Baalbek", url:"../Pages/Baalbek.php"},
  {name:"BeitEddine", url:"../Pages/BeitEddine.php"},
  {name:"Byblos", url:"../Pages/Byblos.php"},
  {name:"Kadisha", url:"../Pages/Kadisha.php"},
  {name:"Map", url:"../Pages/Lebanon.php"},
  {name:"Tyre", url:"../Pages/Tyre.php"},
  {name:"Busses", url:"../Pages/Buses.php"},
  {name:"Restaurant", url:"../Pages/Restaurants.php"},
  {name:"Transportation", url:"../Pages/Transportation.php"},
  {name:"Map", url:"../Pages/Lebanon.php"},
  {name:"Lebanon", url:"../Pages/Lebanon.php"},
];

searchInput.addEventListener('input', function() {
  const query = searchInput.value.toLowerCase();
  const results = [];

  // loop through files and folders to find matches
  for (let i = 0; i < files.length; i++) {
    const name = files[i].name.toLowerCase();
    if (name.startsWith(query)) {
      results.push(files[i]);
    }
  }

  // create HTML elements to display search results
  let html = '';
  for (let i = 0; i < results.length; i++) {
    const url = sanitizeUrl(results[i].url);
    const name = sanitizeText(results[i].name);
    html += `<a href="${url}">${name}<br></a>`;
  }
  if(query==""){
   html="";
  }
  // display search results to user
  searchResults.innerHTML = html;
});

function sanitizeText(text) {
  // sanitize text by removing any potential script injection characters
  return text.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;').replace(/'/g, '&#x27;');
}

function sanitizeUrl(url) {
  // sanitize url by validating it and returning a clean version
  const cleanedUrl = new URL(url, window.location.href);
  return cleanedUrl.href;
}

</script>
    </script>
  </body>
</html>
