



UULebanon

A Capstone Web Project 

By

Miguel Ibrahim

ID: 202005354

Capstone Professor: Dr. Azzam Mourad

CSC 599: Capstone Project






**Table of Contents**
#
[**I.**	**Introduction:**	3](#_toc132375144)

[**II.**	**Technology Stack:**	4](#_toc132375145)

[**III.**	**Explaining Key Words:**	5](#_toc132375146)

[**IV.**	**APIs and Frameworks Used:**	6](#_toc132375147)

[**V.**	**Database Design:**	8](#_toc132375148)

[**A.**	**TABLE: USERS**	9](#_toc132375149)

[**B.**	**TABLE:  RESTAURANTS**	10](#_toc132375150)

[**C.**	**TABLE: TOURISTIC_SITES**	11](#_toc132375151)

[**D.**	**Relational databases:**	12](#_toc132375152)

[a.	Visited_sites:	12](#_toc132375153)

[b.	Rated_restaurants:	13](#_toc132375154)

[**VI.**	**Application Flow:**	14](#_toc132375155)

[**i.**	**Index.php:**	15](#_toc132375156)

[**ii.**	**Touristic Attractions: Tourism.php**	16](#_toc132375157)

[**iii.**	**Anjar.php:**	23](#_toc132375158)

[**iv.**	**Restaurant.php:**	25](#_toc132375159)

[**v.**	**SignUp/ LogIn:**	31](#_toc132375160)

[**vi.**	**Uni-fied/php/Tourism.php:**	35](#_toc132375161)

[**vii.**	**Server-Side Automated Functions**	44](#_toc132375162)

[**VII.**	**Future Prospects:**	48](#_toc132375163)

[**A.**	**References**	50](#_toc132375164)


**

1. # <a name="_toc132375144"></a>**Introduction:**
As an introduction to the Capstone Project, one must start with the problem it is trying to solve. According to macrotrends Lebanon’s tourism statistics for 2020 averaged around 2,369,000,000$ being spent by tourists, a sharp decline of 72.82% from 2019. One of the major problems when it comes to searching for a country on google, Bing, or any other search engine, is that the first few pages does not sum up the information into a concise and clear page. Some results’ origins net from Instagram such as the fact with the 961 page (<https://www.the961.com/touristic-sites-lebanon-this-summer/>), these images may be removed, altered, reported, or private to the uploader (if the user’s page is private).

The idea sprouted while scrolling through the many restaurants on google maps. When searching for restaurants on google maps, the user is greeted with many results, and searching through them, and through their pictures may be daunting and time consuming for the user. Users these days want information to be available on a single page in a concise manner, and always available. 

The Web Application: UULebanon looks to solve these problems by providing the necessary information, pictures, hosted in a clear and concise manner with no link to Instagram with a sole focus on the user as well as the performance of the application. The UU in UULebanon stands for Unique and Unified which are the main goals of this Web App, and of course Lebanon since it focuses on Lebanon.

Similar to trip advisor, this Web Application looks forward to providing a “local trip advisor”, such local trip advisor is worked in collaboration with experienced touristic companies in Lebanon, as well as the developer’s experience in Public Transport in Lebanon.
1. # <a name="_toc132375145"></a>**Technology Stack:**
- Front End Stack:
  - HTML5: HTML that has CSS styling embedded within, as well as improved semantic tags and mobile compatibility as well as the capability of incorporating it with Caching techniques.
  - CSS3: New CSS Stack that serves for a better responsiveness for all devices. It also has advanced styling features, media queries, flexbox, and reduced file sizes.
  - JavaScript:  JavaScript is used in this application to allow users to see a responsive page as well as allowing code reusability when it comes to the search Bar as well as the Navbar. 
- Back End Stack:
  - PHP: PHP is used in this application to make the most of the website dynamic as well as allowing the website to reuse elements of code such as the navbar by calling functions in a php code that has the navbar.
  - Python: Python is used in this Web Application to Web scrape information from the web and add it to the web application, prospects suggest using python for recommending sites the user has not visited yet.
- Database Stack:
  - MySQL: MySQL is a popular Database that is mostly used with Web Applications, this database allows the website to load the content dynamically as well as providing future incentives for the Web Application.
1. # <a name="_toc132375146"></a>**Explaining Key Words:**
1. Web App: it is a software program that runs on a web server and can be accessed through a web browser. Unlike traditional desktop applications, web applications do not need to be installed on a user’s device, and they can be accessed from any device with an internet connection on a web browser.
1. Caching: Caching is a technique used by web applications to improve performance and reduce server load. It involves storing frequently accessed data in fast storage mediums so it can be quickly retrieved without needed to generate it every time the website is called. 
1. Responsive: A responsive web application means that the web application can run on TV, Laptop, Desktop, and mobile.
1. Dynamic: A dynamic web application is a web application that uses databases to load the information on the website. This can be useful if the developer wants a short code with no need to focus on styling everything.
1. Search Bar: a search bar is a convenient User Interface to all users, if the user wants to search for anything on all the database, they can input what they want to search for and return a result if it exists in the database.
1. Nav Bar: Nav Bar or Navigation Bar is an essential element to the usability of the web application; this allows the user to visit all the other websites the web application can offer. This Nav Bar can transform into a drop nav when the screen width is mobile proportions. The drop nav is similar to navbar; however, it has a recognizable burger line which is always recognizable as a drop nav.
1. Code reusability: This signifies that most of the code bases are similar to each other, thus there is no need to rewrite the same code in every file, instead these codes are written in a separate file, and called using a function making the code smaller.
1. Web Scraping: Web scraping is a technique used by Natural Language Processing, a branch of Artificial Intelligence, to scrape websites for essential information, which can prove useful for use later.
1. # <a name="_toc132375147"></a>**APIs and Frameworks Used:**
An API (Application Programming Interface) is a set of protocols, routines, and tools that enable different software applications to communicate with each other. APIs are used to define how software components should interact, making it easier for developers to create complex applications by providing pre-built functionality.

APIs allow developers to interact with a service or application in a standardized way, without having to know the underlying implementation details. For example, a weather API may provide developers with access to current weather conditions by accepting a location parameter and returning weather data in a standardized format such as JSON or XML. (MuleSoft, n.d.).

APIs:

- Google API:
  - Google Maps API
  - Google Reviews API
  - Google Fonts API
- Other Maps:
  - Openstreetmap.org
  - Leaflet

Python Imports:

- Mysql.connector
- Requests
- Bs4 à BeautifulSoup

Frameworks:

- Bootstrap
- jQuery
- CDN (Content Delivery Network) à AJAX
1. <a name="_toc132375148"></a>**Database Design:** 

   =================================================



1. ## <a name="_toc132375149"></a>**TABLE: USERS**



The Table: Users is the table that stores signed up users inside it, the Primary key is **ID** to help interact with other tables, it is an int variable that is AUTO\_INCREMENTed meaning that every time a new user is registered, the database gives them a new ID unique to them.

**PASSWORD:** password is a variable character of size 256, it uses a unique hashing technique for MySQL to store the user’s password in the database

**CREATION\_DATE:** creation date is a date format that tracks if there is any breach in the database, it tracks the creation date of the user for this Web Application.

**MODIFICATION\_DATE:** modification date is a date format that tracks when the user changes his/her password and to detect the date of the potential data breach.

**email:** email is trivial to all web applications, instead of saving the ID of the user as a session, their email is stored in AES format on the session, this is a varchar of 200 to allow basic 128-bit AES encryption.
1. ## <a name="_toc132375150"></a>**TABLE:  RESTAURANTS**

**NAME:** name is the primary key of this table, it is a varchar of 90, it allows the user to interact with another table which is **rated\_restaurants** 

**DESCRIPTION:** description I a varchar of 300 characters, in this application, it is not used.

**FIRST\_INTRODUCED:** this column is when the restaurant is first introduced into the database, it is a date format that allows the admin to know how long this restaurant has been in the database.

**EDITED\_DATE, LAST\_UPDATED:** it is similar to the table users, it has the same functionality.

**Rating:** Rating is a floating point that tells the user how much the restaurant is rated.

**NUMBER\_OF\_RATINGS:** this keeps track of how many ratings the restaurant has received to not change the amount of stars significantly each time a user rates a restaurant.

**Type:** Type is the type of restaurant it is, it is a variable character of size 50 allowing to determine the type of restaurant (food style) :Japanese, Lebanese, Indian, etc.

**Href:** Href allows the program to redirect the user to the main page of the restaurant; however, it is not used since the href may be dirty (meaning that the website might not exist).
1. ## <a name="_toc132375151"></a>**TABLE: TOURISTIC\_SITES**

**NAME:** NAME is the primary key in this TABLE, it is a variable character of size 50, it allows the user to mark the site as visited according to the value of NAME stored in visited sites.

**DEESCRIPTION:** This is the description of the site, it refers to the more information about the site, allowing the display of the information to be displayed.

**FIRST\_INTRODUCED, EDITED DATE, LAST UPDATED:** these are like the ones in users, and touristic sites.
1. ## <a name="_toc132375152"></a>**Relational databases:ZXCVBNM,.** 

1. ### <a name="_toc132375153"></a>Visited\_sites:

This relational database **“visited\_sites”** is a** product of having a relational aspect in this relational database, users visit touristic sites, this relation is many-to-many, meaning that many users may visit many sites, and many sites may be visited by many users.

In this case, it takes the site\_name as a foreign key to the table: touristic\_sites’ “NAME” and allows the USER\_ID to alter VISITED to visited or not visited according to sitename.


1. ### <a name="_toc132375154"></a>Rated\_restaurants:

This relational database **“rated\_restaurants”** is a** product of having a relational aspect in this relational database, users rates restaurants, this relation is many-to-many, meaning that many user may rate many restaurants, and many restaurants may be rated by many users.

In this case, it takes the restaurant\_name (NAME) as a foreign key to the table: restaurants “NAME” and allows the USER\_ID to alter Rating to allow the user to input their own rating for a restaurant.









1. # <a name="_toc132375155"></a>**Application Flow:**


Legend: 

Dotted Lines: You can go from any of these places to any of the other places

Full line: One way only, only accepts incoming requests, does not reroute

Line with arrow: Allows movement of user from current place to place pointed to

Dotted Lines between Baalbek and Busses.php: There exists more Touristic places that are not mentioned.


1. ### <a name="_toc132375156"></a>**Index.php:** 

Index.html is the first page the user sees when they visit the Web Application, this php file is composed of a drop nav, stylings, APIs (Google fonts APIs), this page also contains means to directly access the sites using the pictures displayed on the main page, the first one on the left is touristic sites, and the one on he right is restaurants. This file has access to the styling sheet: indexstyles.css that has access to API fonts created by google, and access to content delivery network (CDN). This website is responsive to all available screen sizes and is capable of rerouting to: Touristic Attractions, Restaurants, Transportation, Map of Lebanon, and Sign In.


1. ### <a name="_toc132375157"></a>**Touristic Attractions: Tourism.php**

In this php file, the web application queries MySQL first to select all the results from touristic\_sites and display them dynamically on the front end using php and css. This page also has a responsive navbar that is capable of morphing from a drop nav to a top nav according to the text size. Like so:

Code : 

<!DOCTYPE html>

<html lang="en">

<head>

`   `<link rel="icon" href="../logo-no-background.png">

`  `<link rel="stylesheet" type="text/css" href="../CSS/Tourism.css">

</head>

<body>

`  `<!-- Start of HTML and NavBar-->

`  `<?php 

`    `require\_once "../navbar/navbar.php";

`    `loadNavBar();

`    `?>

`  `<br><br><br><br>

` `<?php

require "../config/cfg.php";

try {

`  `$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

`  `$pdo->setAttribute(PDO::ATTR\_ERRMODE, PDO::ERRMODE\_EXCEPTION);



`  `$stmt = $pdo->query("SELECT NAME FROM touristic\_sites");

`  `$result = $stmt->fetchAll(PDO::FETCH\_ASSOC);

?>

<div class="cards">

`  `<?php

`  `if ($result) {

`    `foreach($result as $row) {

`      `$name = $row["NAME"];

`      `?>

`      `<div class="card">

`              `<div class="card\_\_image-holder">

`                `<?php echo'<img class="card\_\_image" src="../Heritage/'.$name.'.jpg" />';?>

`              `</div>

`              `<div class="card-title">

`                `<h2>

`                  `<?php echo'<a href="./'.$name.'.php" target="\_blank">'.$name.'</a>';?>

`                `</h2>

`                `<div>

`                 `<?php echo' <input type="checkbox" id="'.$name.'" name="'.$name.'" onclick="run()">';?>

`                 `<?php echo' <label for="'.$name.'"><small>Visited</small></label>';?>

`                `</div>

`              `</div>

`            `</div>

`   `<?php }

`  `} else {

`    `echo "0 results";

`  `}

} catch(PDOException $e) {

`  `echo "Error: " . $e->getMessage();

}

$pdo = null;

?>

</div>

</body>

<script src="../JS/app.js"></script>  

`  `<script src="../JS/SearchBar.js"></script>  

<script>

`  `function run(){

`    `const id=document.getElementById();

`    `alert("You need to be logged in to mark a place as visited");

`  `}

</script>

</html>

This php file is extremely concise and straightforward, this php file queries mysql with the config file save on another folder, this query returns result and the php can display these results on the page in a card-like format. If this page were to be static, the code would have been 500 lines long, using this approach allows us to reduce the size of the code. 

<?php

require "../config/cfg.php";

In this code, the program is calling the config file for the configuration of mysql database name, location, username and password.

<?php 

`    `require\_once "../navbar/navbar.php";

`    `loadNavBar();

`    `?>

In this code, the function being called is in navbar, the navbar is being called dynamically from another file and displayed on the page.

<?php

function loadNavBar(){

`    `?>



<header class="header" id="header">

`    `<nav class="navbar container">

`       `<a href="../index.html" class="brand"><img src="../logo-no-background.png"style="width:46px"></a>

`       `<div class="burger" id="burger">

`          `<span class="burger-line"></span>

`          `<span class="burger-line"></span>

`          `<span class="burger-line"></span>

`       `</div>

`       `<span class="overlay"></span>

`       `<div class="menu" id="menu">

`          `<ul class="menu-inner">

`             `<li class="menu-item"><a class="menu-link" href="../index.php">Home</a></li>

`             `<li class="menu-item"><a class="menu-link" href="../Tourism.php">Tourism</a></li>

`             `<li class="menu-item"><a class="menu-link" href="./Restaurants.php">Restaurants</a></li>

`             `<li class="menu-item"><a class="menu-link" href="./Lebanon.php">Map of Lebanon</a></li>

`             `<li class="menu-item"><a class="menu-link" href="./Transportation.php">Transportation</a></li>

`            `<li class="menu-item"><a class="menu-link" href="./index.php">Sign Up/ Log In</a></li>

`                `</ul>

`       `</div>

`       `<span><i class="bx bx-search search-toggle"></i></span>

`       `<div class="search-block">

`          `<form class="search-form">

`             `<span><i class="bx bx-arrow-back search-cancel"></i></span>

`             `<input type="search" name="search" class="search-input" placeholder="Search here...">

`          `</form>

`          `<div id="search-results"></div>

`       `</div>

`    `</nav>

` `</header>

`    `<?php

}

?>

The above is the code for the navbar, instead of using the same coded in each page, this function is being called to reduce the size of the files dramatically.

Tourism.php allows the user to click on the name of the site which leads them to their dedicated page as follows:
1. ### <a name="_toc132375158"></a>**Anjar.php:**

This format is used by all the additional websites pages. The following web page presents images of the site taken by hand as well as it’s location relative to the map, the user can read an “about” usually extracted from UNESCO’s website.

One might wonder: “What might this button do?”, this button is a button that expands into a searchbar as so:

In this embedded page, the user can search for anything that exists in the whole site, before that, the input is cleaned and checked for any SQL injections or XSS attacks as so:

function sanitizeText(text) {

`  `// sanitize text by removing any potential script injection characters

`  `return text.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;').replace(/'/g, '&#x27;');

}

This is an example, later, this page would be capable of displaying an image within the search results, as well as a better orientation that can come out under the searchbar.

Ofcourse, if the searchbar is empty, it does not return anything

Clicking on the button again leads us back to the page it was opened from.
1. ### <a name="_toc132375159"></a>**Restaurant.php:**

This php page is dedicated towards displaying restaurants on the front end. This php code is also dynamic, meaning it queries the database for all the restaurants available in the database and returns its name, rating, number of ratings, and type. 

The code:

<!DOCTYPE html>

<html lang="en">

<head>

`  `<!--Head-->

`   `<link rel="icon" href="../logo-no-background.png">

`  `<link rel="stylesheet" type="text/css" href="../CSS/restaurants.css">

`  `<!--Burger Icon-->

</head>

<body>

`  `<!-- Start of HTML and NavBar-->

`  `<?php 

`    `require\_once "../navbar/navbar.php";

`    `loadNavBar();

`    `?>

`  `<br><br><br><br>

` `<?php

require "../config/cfg.php";

?>

<section class="author-archive">

`      `<!-- HTML -->

`        `<div class="container">

`        `<!--Defining set elements-->

`          `<input type="radio" id="All" name="categories" value="All" checked>

`          `<input type="radio" id="Lebanese" name="categories" value="Lebanese">

`          `<input type="radio" id="Italian" name="categories" value="Italian">

`          `<input type="radio" id="Japanese" name="categories" value="Japanese">

`          `<input type="radio" id="Indian" name="categories" value="Indian">

`          `<input type="radio" id="Others" name="categories" value="Others">

`      `<!-- Enabling filtering and how to define them and display them-->

`          `<ol class="filters">

`            `<li>

`              `<label for="All">All</label>

`            `</li>

`            `<li>

`              `<label for="Lebanese">Lebanese</label>

`            `</li>

`            `<li>

`              `<label for="Italian">Italian</label>

`            `</li>

`            `<li>

`              `<label for="Japanese">Japanese</label>

`            `</li>

`            `<li>

`              `<label for="Indian">Indian</label>

`            `</li>

`            `<li>

`              `<label for="Others">Others</label>

`            `</li>

`          `</ol>

<?php

try {

`  `$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

`  `$pdo->setAttribute(PDO::ATTR\_ERRMODE, PDO::ERRMODE\_EXCEPTION);

`  `$stmt = $pdo->query("SELECT NAME,Rating,NUMBER\_OF\_RATINGS,Type FROM restaurants");

`  `$result = $stmt->fetchAll(PDO::FETCH\_ASSOC);

?>

<ol class="posts">

`  `<?php

`  `if ($result) {

`    `foreach($result as $row) {

`      `$name = $row["NAME"];

`      `$ratings= $row["Rating"];

`      `$nmb\_rating=$row["NUMBER\_OF\_RATINGS"];

`      `$type=$row["Type"];

`      `?>

`     `<li class="post" data-category=<?php echo''.$type?>>

`              `<!--1024x740!-->

`               `<article>

`                 `<figure>

`                   `<?php echo'<a hre  f="'.$name.'.php" target="\_blank">'?>

`                    `<?php echo' <img src="../Restaurants/'.$name.'.jpg" alt="">'?>

`                   `</a>

`                   `<figcaption>

`                     `<ol class="post-categories">

`                       `<li>

`                         `<a href=""><?php echo ''.$type?></a>

`                       `</li> 

`                     `</ol>

`                     `<h2 class="post-title">

`                       `<a href="https://www.instagram.com/nasmabeyrouth/?hl=en" target="\_blank"><?php echo''.$name ?>

`                       `</a>

`                     `</h2>

`                     `<?php

`                     `$floor\_num = floor($ratings);     

`                   `echo  '<p> Rating: '.$ratings.' Rated by: '.$nmb\_rating.' users</p>';?>

`                   `</figcaption>

`                 `</figure>

`               `</article>

`             `</li>

`   `<?php }

`  `} else {

`    `echo "0 results";

`  `}

} catch(PDOException $e) {

`  `echo "Error: " . $e->getMessage();

}

$pdo = null;

?>

</ol>

</body>

<script src="../JS/app.js"></script>  

`  `<script src="../JS/SearchBar.js"></script>  

<script>

`  `function run(){

`    `const id=document.getElementById();

`  `}

</script>

</html>

This php allows the filtering of data presented on the page, as well as viewing the rating of the website (extracted from google manually) as well as the number of ratings (extracted from google manually). The users of this website after login are capable of rating the restaurant once, increasing/descreasing their rating according to their input provided when pressing on the RATE button.



1. ### <a name="_toc132375160"></a>**SignUp/ LogIn:**
Sign Up and Login is by far the largest file that based on these files:

The main file: register\_form composes of sign up and login code that sends the results to another file, which sends the results to the database. 

if(isset($\_POST['submit'])){

`   `$current\_time = date('Y-m-d H:i:s');

`   `$current\_time2 = date('Y-m-d H:i:s');

`   `$name = mysqli\_real\_escape\_string($conn, $\_POST['name']);

`   `$email = mysqli\_real\_escape\_string($conn, $\_POST['email']);

`   `$pass = md5($\_POST['password']);

`   `$cpass = md5($\_POST['cpassword']);

`   `$user\_type = $\_POST['user\_type'];

`   `$select = "SELECT \* FROM users WHERE email = '$email' && PASSWORD = '$pass'";

`   `$result = mysqli\_query($conn, $select);

`   `if(mysqli\_num\_rows($result) > 0){

`      `$error[] = 'user already exists!';

`   `} else {

`      `if($pass != $cpass){

`         `$error[] = 'password not matched!';

`      `} else {

`         `$insert = "INSERT INTO users(name, email, PASSWORD, user\_type, CREATION\_DATE, MODIFICATION\_DATE) 

`         `VALUES('$name', '$email', '$pass', '$user\_type', '$current\_time', '$current\_time2')";

`         `mysqli\_query($conn, $insert);

`         `// get user ID

`         `$user\_select = "SELECT ID FROM users WHERE email = '$email' && PASSWORD = '$pass'";

`         `$user\_result = mysqli\_query($conn, $user\_select);

`         `$user\_row = mysqli\_fetch\_assoc($user\_result);

`         `$user\_id = $user\_row['ID'];

`         `// initialize visited sites

`         `$sites\_select = "SELECT NAME FROM touristic\_sites";

`         `$sites\_result = mysqli\_query($conn, $sites\_select);

`         `while($site\_row = mysqli\_fetch\_assoc($sites\_result)){

`            `$site\_name = $site\_row['NAME'];

`            `$site\_insert = "INSERT INTO visited\_sites(USER\_ID, site\_name, VISITED) 

`            `VALUES('$user\_id', '$site\_name', 0)";

`            `mysqli\_query($conn, $site\_insert);

`         `}

`         `header('location:login\_form.php');

`      `}

`   `}

};

This code is a complex code that does the following:

- Create a user in the database with AES encryption based off PASSWORD function in mysql, when creating a user, this program also initializes many other databases by initializing visited\_sites to have all the UserIDs and tourism names as the following: 

The following is 2 test users, these test users were created on the basis of testing purposes, this information is basically tied to the information of the logged in user. To explain this process, we need to see the page first.
1. ### <a name="_toc132375161"></a>**Uni-fied/php/Tourism.php:**

This page might seem very similar to the not logged in user; however, this code is not similar. 

This is the code:
<!DOCTYPE html>

<html lang="en">

<head>

`   `<link rel="icon" href="../logo-no-background.png">

`  `<link rel="stylesheet" type="text/css" href="../CSS/Tourism.css"

</head>

<body>

<header class="header" id="header">

`    `<nav class="navbar container">

`       `<a href="../index.html" class="brand"><img src="../logo-no-background.png"style="width:46px"></a>

`       `<div class="burger" id="burger">

`          `<span class="burger-line"></span>

`          `<span class="burger-line"></span>

`          `<span class="burger-line"></span>

`       `</div>

`       `<span class="overlay"></span>

`       `<div class="menu" id="menu">

`          `<ul class="menu-inner">

`             `<li class="menu-item"><a class="menu-link" href="../index.php">Home</a></li>

`             `<li class="menu-item"><a class="menu-link" href="../Tourism.php">Tourism</a></li>

`             `<li class="menu-item"><a class="menu-link" href="./Restaurants.php">Restaurants</a></li>

`             `<li class="menu-item"><a class="menu-link" href="./Lebanon.php">Map of Lebanon</a></li>

`             `<li class="menu-item"><a class="menu-link" href="./Transportation.php">Transportation</a></li>

`                `</ul>

`       `</div>

`       `<span><i class="bx bx-search search-toggle"></i></span>

`       `<div class="search-block">

`          `<form class="search-form">

`             `<span><i class="bx bx-arrow-back search-cancel"></i></span>

`             `<input type="search" name="search" class="search-input" placeholder="Search here...">

`          `</form>

`          `<div id="search-results"></div>

`       `</div>

`    `</nav>

` `</header>

<script>

`   `// Open and Close Navbar Menu

const navbarMenu = document.getElementById("menu");

const burgerMenu = document.getElementById("burger");

const bgOverlay = document.querySelector(".overlay");

if (burgerMenu && bgOverlay) {

`   `burgerMenu.addEventListener("click", () => {

`      `navbarMenu.classList.add("is-active");

`      `bgOverlay.classList.toggle("is-active");

`   `});

`   `bgOverlay.addEventListener("click", () => {

`      `navbarMenu.classList.remove("is-active");

`      `bgOverlay.classList.toggle("is-active");

`   `});

}

// Close Navbar Menu on Links Click

document.querySelectorAll(".menu-link").forEach((link) => {

`   `link.addEventListener("click", () => {

`      `navbarMenu.classList.remove("is-active");

`      `bgOverlay.classList.remove("is-active");

`   `});

});

// Open and Close Search Bar Toggle

const searchBlock = document.querySelector(".search-block");

const searchToggle = document.querySelector(".search-toggle");

const searchCancel = document.querySelector(".search-cancel");

if (searchToggle && searchCancel) {

`   `searchToggle.addEventListener("click", () => {

`      `searchBlock.classList.add("is-active");

`   `});

`   `searchCancel.addEventListener("click", () => {

`      `searchBlock.classList.remove("is-active");

`   `});

}

const searchInput = document.querySelector('.search-input');

const searchResults = document.querySelector('#search-results');

const files = [

`  `{name:"Anjar", url:"../Pages/Anjar.php"},

`  `{name:"Baalbek", url:"../Pages/Baalbek.php"},

`  `{name:"BeitEddine", url:"../Pages/BeitEddine.php"},

`  `{name:"Byblos", url:"../Pages/Byblos.php"},

`  `{name:"Kadisha", url:"../Pages/Kadisha.php"},

`  `{name:"Map", url:"../Pages/Lebanon.php"},

`  `{name:"Tyre", url:"../Pages/Tyre.php"},

`  `{name:"Busses", url:"../Pages/Buses.php"},

`  `{name:"Restaurant", url:"../Pages/Restaurants.php"},

`  `{name:"Transportation", url:"../Pages/Transportation.php"},

`  `{name:"Map", url:"../Pages/Lebanon.php"},

`  `{name:"Lebanon", url:"../Pages/Lebanon.php"},

];

searchInput.addEventListener('input', function() {

`  `const query = searchInput.value.toLowerCase();

`  `const results = [];

`  `// loop through files and folders to find matches

`  `for (let i = 0; i < files.length; i++) {

`    `const name = files[i].name.toLowerCase();

`    `if (name.startsWith(query)) {

`      `results.push(files[i]);

`    `}

`  `}

`  `// create HTML elements to display search results

`  `let html = '';

`  `for (let i = 0; i < results.length; i++) {

`    `const url = sanitizeUrl(results[i].url);

`    `const name = sanitizeText(results[i].name);

`    `html += `<a href="${url}">${name}<br></a>`;

`  `}

`  `if(query==""){

`   `html="";

`  `}

`  `// display search results to user

`  `searchResults.innerHTML = html;

});

function sanitizeText(text) {

`  `// sanitize text by removing any potential script injection characters

`  `return text.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;').replace(/'/g, '&#x27;');

}

function sanitizeUrl(url) {

`  `// sanitize url by validating it and returning a clean version

`  `const cleanedUrl = new URL(url, window.location.href);

`  `return cleanedUrl.href;

}

</script>

`  `<br><br><br><br>

` `<?php

require "../config/cfg.php";

try {

`  `$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

`  `$pdo->setAttribute(PDO::ATTR\_ERRMODE, PDO::ERRMODE\_EXCEPTION);

`  `$stmt = $pdo->query("SELECT NAME FROM touristic\_sites");

`  `$result = $stmt->fetchAll(PDO::FETCH\_ASSOC);

?>

<div class="cards">

`  `<?php

`  `if ($result) {

`    `foreach($result as $row) {

`      `$name = $row["NAME"];

`      `?>

`      `<div class="card">

`              `<div class="card\_\_image-holder">

`                `<?php echo'<img class="card\_\_image" src="../Heritage/'.$name.'.jpg" />';?>

`              `</div>

`              `<div class="card-title">

`                `<h2>

`                  `<?php echo'<a href="./'.$name.'.php" target="\_blank">'.$name.'</a>';?>

`                `</h2>

`                `<div>

`                 `<?php echo' <input type="checkbox" id="'.$name.'" name="'.$name.'" onclick="run()">';?>

`                 `<?php echo' <label for="'.$name.'"><small>Visited</small></label>';?>

`                `</div>

`              `</div>

`            `</div>

`   `<?php }

`  `} else {

`    `echo "0 results";

`  `}

} catch(PDOException $e) {

`  `echo "Error: " . $e->getMessage();

}

$pdo = null;

?>

</div>

</body>

<script>

`  `function run(){

`    `const id=document.getElementById();

`    `alert("You need to be logged in to mark a place as visited");

`  `}

</script>

</html>

An extensive code for a simple website is what makes the experience great, this web application can update the database value VISITED (Which is a Boolean) to either 1 or 0 signifying that it is visited by the user. 

Code process:
1\. Query the database to enable the user to create an account, as well as that, it needs to initialize the database: visited sites, everytime a user is created, it should query the database to use the username to fetch the ID, and it should create a series of data in visited sites to 0 where the columns are Full texts. à register\_form.php

2\. Extract Session: User\_name (email) which is an AES encrypted plain text, decrypt it using AES as well to decrypt the hash and to use it later on.

3\. This decrypted hash will be used to query the database users for the ID of the user currently logged in, this will return their ID. At the same time, the database queries the table: touristic\_sites to display all the touristic\_sites on the page. The ID of the user is used to retrieve all the VISITED information from the USER. This information is displayed in front of the user and viewed responsively and dynamically.

4\. The checkbox is interacted by using an AJAX form as a future goal of this project: keep the database updated, remove users, and admin page.

All the other pages are similar to the ones in the not logged in user.
1. ### <a name="_toc132375162"></a>**Server-Side Automated Functions**

Many of the functions of the web application are done automatically by a detector software done as a vendor option; however, for the sake of simplicity, it is important to mention these functions.



This is the folder that governs the automated functions on the server. 

Cmptscrprest.py or Compute Scraping for Restaurant, is a python program that does web scraping every midnight for new restaurants in Lebanon. The rampant issue in Lebanon means that new companies and touristic sites don’t surface frequently. If some do surface, it is important to know when they started:

import mysql.connector

import requests

from bs4 import BeautifulSoup

\# Establish connection

cnx = mysql.connector.connect(user='root', password='',

`                              `host='localhost', database='users')

\# Create cursor object

cursor = cnx.cursor()

\# execute a query

query = "SELECT LAST\_UPDATED,NAME FROM restaurants"

cursor.execute(query)

array=[]

\# Iterate over results

for result in cursor:

`    `array.append(result)

`    `print(result)

query = 'Best restaurants in Lebanon'

num\_results = 1  # number of search results to retrieve

\# Send a GET request to Google's search engine

url = f'https://www.google.com/search?q={query}&num={num\_results}'

headers = {'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3'}

response = requests.get(url, headers=headers)

\# Parse the HTML response using BeautifulSoup

soup = BeautifulSoup(response.content, 'lxml')

\# Locate the search results container

search\_results = soup.find\_all('div', class\_='g')

\# Extract the necessary data from each search result

urls = []

queries=[]

for result in search\_results:

`    `# Extract the URL of the search result

`    `url = result.find('a')['href']

`    `# Check if the URL is a real link and add it to the list of URLs

`    `if url.startswith('http'):

`        `urls.append(url)

\# Query each website and extract the last updated time

for url in urls:

`    `# Send a GET request to the website

`    `response = requests.get(url)

`    `# Parse the HTML response using BeautifulSoup

`    `soup = BeautifulSoup(response.content, 'lxml')

`    `# Locate the last updated time, if available

`    `time\_tag = soup.find('time')

`    `if time\_tag:

`        `last\_updated\_time = time\_tag.text

`        `print(f'URL: {url}, Last Updated Time: {last\_updated\_time}')

`        `queries.append(last\_updated\_time)

`    `else:

`        `print(f'URL: {url}, Last Updated Time not found')

for db\_result, web\_result in zip(array, queries):

`    `# Compare the last updated time values

`    `if db\_result[0] != web\_result:

`        `# Print the differences

`        `print(f"Name: {db\_result[1]}, Last Updated (DB): {db\_result[0]}, Last Updated (Web): {web\_result}")

cursor.close()

cnx.close()

This python code manually shows what are new, putting this file into an ipynb file allows the full execution of the code. Explaining the code however, this code is tied to mysql database as well as google search engine. This program queries the database for the name, and last updated information from restaurants, this information is compared to the information extracted from web scraping the results of the first 10 results of the first page of google. In this case, there are no new restaurants in Lebanon.

Cmptscrptrsm.py or Compute Scraping Tourism, is similar to Cmptscrprest.py but with touristic sites instead, running the code on an ipynb file shows the following:

The site shows that Anjar is newly updated since an initial time of 1980 (Which is an initialization time writes for all restaurants and touristic sites). Since the name is similar, there is no need to update the database.

Please ignore the other files, they are files to check for integrity of items in the database


1. # <a name="_toc132375163"></a>**Future Prospects:**
The Future Prospects of this capstone project is to take this web application further by adding recommendation systems, a well as better interaction with the site. Currently the site is up and running on Wamp, and the next move is to host it online on a paid or a free hosting service. The images are generated statically, downloading the images is necessary to keep the website online and accessible, a website with images that don’t lead anywhere is a failed website. This leads to more problems however, if the image does not exist, and the web scraping finds new restaurants in Lebanon, it needs access to that image as well as the rating, and number of ratings.

Currently, the checkbox method is the most complex method of updating the VISITED section of visited\_sites/ sites\_visited, if the checkbox is busted/ not working, updating the database may not work. Sometimes however, the database updates, but the checkbox remains the same, problems like these may be due to multiple users creating and logging into the same website at the same laptop/desktop/device, a dynamic session is necessary to know exactly which user\_id to grab at the time. Another solution is to add a up\_time for the users database to know exactly who is logged in and from where and when.

Another suggestion for the website is to add Lebanese Culture as well as hotels, with each having their own mechanisms and functionalities.








1. ## <a name="_toc132375164"></a>**References**
*Lebanon Tourism Statistics 1995-2023*. (n.d.). MacroTrends. <https://www.macrotrends.net/countries/LBN/lebanon/tourism-statistics>

*What is an API? (Application Programming Interface) | MuleSoft*. (n.d.). MuleSoft. https://www.mulesoft.com/resources/api/what-is-an-api


50

