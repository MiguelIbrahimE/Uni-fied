const searchContainer = document.querySelector('.search-container');
const searchIcon = document.querySelector('.search-icon');

searchIcon.addEventListener('click', () => {
  searchContainer.classList.toggle('show');
});
var search_btn = document.querySelector(".search_btn");
var close_btn = document.querySelector(".close_btn");
var search_box_wrap = document.querySelector(".search_box_wrap");
var input_search = document.querySelector(".input_search");

search_btn.addEventListener("click", function(){
	search_box_wrap.classList.add("active");
	input_search.focus();
});

close_btn.addEventListener("click", function(){
	search_box_wrap.classList.remove("active");
});