<?php
function loadNavBar(){
    ?>
     
<header class="header" id="header">
    <nav class="navbar container">
       <a href="../index.php" class="brand"><img src="../logo-no-background.png"style="width:46px"></a>
       <div class="burger" id="burger">
          <span class="burger-line"></span>
          <span class="burger-line"></span>
          <span class="burger-line"></span>
       </div>
       <span class="overlay"></span>
       <div class="menu" id="menu">
          <ul class="menu-inner">
             <li class="menu-item"><a class="menu-link" href="../index.php">Home</a></li>
             <li class="menu-item"><a class="menu-link" href="../Tourism.php">Tourism</a></li>
             <li class="menu-item"><a class="menu-link" href="./Restaurants.php">Restaurants</a></li>
             <li class="menu-item"><a class="menu-link" href="./Lebanon.php">Map of Lebanon</a></li>
             <li class="menu-item"><a class="menu-link" href="./Transportation.php">Transportation</a></li>
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
    <?php
}
?>
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