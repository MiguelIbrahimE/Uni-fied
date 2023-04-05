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
  {name:"Anjar", url:"../Pages/Anjar.html"},
  {name:"Baalbek", url:"../Pages/Baalbek.html"},
  {name:"BeitEddine", url:"../Pages/BeitEddine.html"},
  {name:"Byblos", url:"../Pages/Byblos.html"},
  {name:"Kadisha", url:"../Pages/Kadisha.html"},
  {name:"Map", url:"../Pages/Lebanon.html"},
  {name:"Tyre", url:"../Pages/Tyre.html"},
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
    html += `<a href="${url}">${name}</a>`;
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
