<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="icon" href="../logo-no-background.png">
  <link rel="stylesheet" type="text/css" href="../CSS/Tourism.css">

</head>
<body>

     
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
?>
<div class="cards">
  <?php
  if ($result) {
    foreach($result as $row) {
      $name = $row["NAME"];
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
</div>
</body>
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
<script>
  function run(){
    const id=document.getElementById();
    alert("You need to be logged in to mark a place as visited");
    
  }
</script>

</html>