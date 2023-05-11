



UULebanon

A Capstone Web Project 

By

Miguel Ibrahim

ID: 202005354

Capstone Professor: Dr. Azzam Mourad

CSC 599: Capstone Project






**Table of Contents**
#
[**I.**	**Introduction:**	3](#_toc134616182)

[**II.**	**Technology Stack:**	4](#_toc134616183)

[**III.**	**Explaining Key Terms:**	5](#_toc134616184)

[**IV.**	**APIs and Frameworks Used:**	6](#_toc134616185)

[**V.**	**Database Design:**	10](#_toc134616186)

[**A.**	**TABLE: USERS**	12](#_toc134616187)

[**B.**	**TABLE:  RESTAURANTS**	13](#_toc134616188)

[**C.**	**TABLE: TOURISTIC_SITES**	15](#_toc134616189)

[**D.**	**Relational databases:**	16](#_toc134616190)

[a.	Visited_sites:	16](#_toc134616191)

[b.	Rated_restaurants:	16](#_toc134616192)

[**VI.**	**Application Flow:**	18](#_toc134616193)

[**i.**	**Index.php:**	20](#_toc134616194)

[**ii.**	**Touristic Attractions: Tourism.php**	21](#_toc134616195)

[**iii.**	**Anjar.php:**	28](#_toc134616196)

[**iv.**	**Restaurant.php:**	30](#_toc134616197)

[**v.**	**SignUp/ LogIn:**	36](#_toc134616198)

[**vi.**	**Uni-fied/php/Tourism.php:**	42](#_toc134616199)

[**vii.**	**Server-Side Automated Functions**	51](#_toc134616200)

[**viii.**	**Uni-fied/php/restaurants.php**	63](#_toc134616201)

[**ix.**	**Events.php**	80](#_toc134616202)

[**VII.**	**Future Prospects:**	93](#_toc134616203)

[**VIII.**	**References**	95](#_toc134616204)


**

1. # <a name="_toc134616182"></a>**Introduction:**
As an introduction to the Capstone Project, one must start with the problem it is trying to solve. According to macrotrends Lebanon’s tourism statistics for 2020 averaged around 2,369,000,000$ being spent by tourists, a sharp decline of 72.82% from 2019. One of the major problems when it comes to searching for a country on google, Bing, or any other search engine, is that the first few pages does not sum up the information into a concise and clear page. Some results’ origins net from Instagram such as the fact with the 961 page (<https://www.the961.com/touristic-sites-lebanon-this-summer/>), these images may be removed, altered, reported, or private to the uploader (if the user’s page is private).

The idea sprouted while scrolling through the many restaurants on google maps. When searching for restaurants on google maps, the user is greeted with many results, and searching through them, and through their pictures may be daunting and time consuming for the user. Users these days want information to be available on a single page in a concise manner, and always available. 

The Web Application: UULebanon looks to solve these problems by providing the necessary information, pictures, hosted in a clear and concise manner with no link to Instagram with a sole focus on the user as well as the performance of the application. The UU in UULebanon stands for Unique and Unified which are the main goals of this Web App, and of course Lebanon since it focuses on Lebanon.

Similar to trip advisor, this Web Application looks forward to providing a “local trip advisor”, such local trip advisor is worked in collaboration with experienced touristic companies in Lebanon, as well as the developer’s experience in Public Transport in Lebanon.
1. # <a name="_toc134616183"></a>**Technology Stack:**
- Front End Stack:
  - HTML5: HTML that has CSS styling embedded within, as well as improved semantic tags and mobile compatibility as well as the capability of incorporating it with Caching techniques.
  - CSS3: New CSS Stack that serves for a better responsiveness for all devices. It also has advanced styling features, media queries, flexbox, and reduced file sizes.
  - JavaScript:  JavaScript is used in this application to allow users to see a responsive page as well as allowing code reusability when it comes to the search Bar as well as the Navbar. 
- Back End Stack:
  - PHP: PHP is used in this application to make the most of the website dynamic as well as allowing the website to reuse elements of code such as the navbar by calling functions in a php code that has the navbar.
  - Python: Python is used in this Web Application to Web scrape information from the web and add it to the web application, the python code also allows recommending touristic sites to users based on their visited sites.
- Database Stack:
  - MySQL: MySQL is a popular Database that is mostly used with Web Applications, this database allows the website to load the content dynamically as well as providing future incentives for the Web Application.
1. # <a name="_toc134616184"></a>**Explaining Key Terms:**
1. Web App: it is a software program that runs on a web server and can be accessed through a web browser. Unlike traditional desktop applications, web applications do not need to be installed on a user’s device, and they can be accessed from any device with an internet connection on a web browser.
1. Caching: Caching is a technique used by web applications to improve performance and reduce server load. It involves storing frequently accessed data in fast storage mediums so it can be quickly retrieved without needed to generate it every time the website is called. 
1. Responsive: A responsive web application means that the web application can run on TV, Laptop, Desktop, and mobile.
1. Dynamic: A dynamic web application is a web application that uses databases to load the information on the website. This can be useful if the developer wants a short code with no need to focus on styling everything.
1. Search Bar: a search bar is a convenient User Interface to all users, if the user wants to search for anything on all the database, they can input what they want to search for and return a result if it exists in the database.
1. Nav Bar: Nav Bar or Navigation Bar is an essential element to the usability of the web application; this allows the user to visit all the other websites the web application can offer. This Nav Bar can transform into a drop nav when the screen width is mobile proportions. The drop nav is similar to navbar; however, it has a recognizable burger line which is always recognizable as a drop nav.
1. Code reusability: This signifies that most of the code bases are similar to each other, thus there is no need to rewrite the same code in every file, instead these codes are written in a separate file, and called using a function making the code smaller.
1. Web Scraping: Web scraping is a technique used by Natural Language Processing, a branch of Artificial Intelligence, to scrape websites for essential information, which can prove useful for use later.
1. # <a name="_toc134616185"></a>**APIs and Frameworks Used:**
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
- Weather API
  - OpenWeatherMap API

Python Imports:

- Mysql.connector
- Requests
- Bs4 à BeautifulSoup

Frameworks:

- Bootstrap
- jQuery
- CDN (Content Delivery Network) à AJAX

Explaining usage of APIs:
Openstreetmap + Leaflet: 

1. Cost: Google Maps API usage can be expensive for websites that receive a large amount of traffic or require frequent updates.
1. Openness: OpenStreetMap data is open-source, meaning that it can be freely used, edited, and distributed by anyone. This allows for greater flexibility and customization than Google Maps, which has more restrictions on data usage.
1. Privacy: Some users may prefer to use a mapping solution that does not track their location or collect their data, and OpenStreetMap offers a more privacy-conscious option.
1. Customization: Leaflet is a lightweight and highly customizable JavaScript library for interactive maps, allowing developers to create unique and tailored mapping experiences for their users.

(Leaflet, 2022)

OpenWeatherMap API:

OpenWeather is a popular weather information provider used by many developers and businesses because of its extensive coverage and features. It provides up-to-date and accurate weather information for millions of locations worldwide, including current weather conditions, hourly and daily forecasts, historical data, and more. Additionally, OpenWeather provides easy-to-use APIs that developers can use to integrate weather data into their applications quickly and easily. Other weather information providers may have their own unique features or advantages, but OpenWeather's coverage, accuracy, and API ease-of-use make it a popular choice for many developers. (Open Weather, 2023)

Content Delivery Network using CloudFlare

Cloudflare is a company that provides a content delivery network (CDN) to improve the performance, security, and reliability of websites and applications.

A CDN is a distributed network of servers that work together to deliver content to users from the server that is geographically closest to them. By caching content on servers located closer to end-users, a CDN can reduce the distance that data must travel, resulting in faster load times for websites and applications.

Cloudflare's CDN is designed to provide additional features beyond traditional CDN offerings. These features include DDoS protection, SSL/TLS encryption, web application firewall (WAF) protection, and caching optimization. Cloudflare also provides analytics and performance insights to help website owners optimize their content delivery.

Overall, Cloudflare's CDN can help website owners improve their website's speed, security, and reliability while reducing their infrastructure costs. (Cloudflare, 2023)

1. <a name="_toc134616186"></a>**Database Design:** 

   =================================================
Legend: 

- Rectangle: TABLES
- Circle/Ovals: Columns, attributes, assets.
- Rhombus (Tilted Squares):  Relations










ER DIAGRAM :





1. ## <a name="_toc134616187"></a>**TABLE: USERS**



The Table: Users is the table that stores signed up users inside it, the Primary key is **ID** to help interact with other tables, it is an int variable that is AUTO\_INCREMENTed meaning that every time a new user is registered, the database gives them a new ID unique to them.

**PASSWORD:** password is a variable character of size 256, it uses a unique hashing technique for MySQL to store the user’s password in the database

**CREATION\_DATE:** creation date is a date format that tracks if there is any breach in the database, it tracks the creation date of the user for this Web Application.

**MODIFICATION\_DATE:** modification date is a date format that tracks when the user changes his/her password and to detect the date of the potential data breach.

**email:** email is trivial to all web applications, instead of saving the ID of the user as a session, their email is stored in AES format on the session, this is a varchar of 200 to allow basic 128-bit AES encryption.

**Name:** Name is an essential part to keep track of whoever is active on the website, this web application can use the name of the person and the last activated time since the last cookie generated to see if the user is active or not

**Usertype:** This column is there to add more functionalities, websites and interfaces to the web application, this allows future improvements such as adding events, hotels, and organizations.
1. ## <a name="_toc134616188"></a>**TABLE:  RESTAURANTS**

**NAME:** name is the primary key of this table, it is a varchar of 90, it allows the user to interact with another table which is **rated\_restaurants using** Table users and the logged in user.

**DESCRIPTION:** description is a varchar of 300 characters, in this application, it is used to describe restaurants to make the genre, food selection or filtering results easier.

**FIRST\_INTRODUCED:** this column is when the restaurant is first introduced into the database, it is a date format that allows the admin to know how long this restaurant has been in the database.

**EDITED\_DATE, LAST\_UPDATED:** it is similar to the table users, it has the same functionality.

**Rating:** Rating is a floating point that tells the user how much the restaurant is rated.

**NUMBER\_OF\_RATINGS:** this keeps track of how many ratings the restaurant has received to not change the number of stars significantly each time a user rates a restaurant.

**Type:** Type is the type of restaurant it is, it is a variable character of size 50 allowing to determine the type of restaurant (food style) :Japanese, Lebanese, Indian, etc.

**Href:** Href allows the program to redirect the user to the main page of the restaurant which in this case is tourist advisor since it’s a website that is always online unlike other web applications 
1. ## <a name="_toc134616189"></a>**TABLE: TOURISTIC\_SITES**

**NAME:** NAME is the primary key in this TABLE, it is a variable character of size 50, it allows the user to mark the site as visited according to the value of NAME stored in visited sites.

**DEESCRIPTION:** This is the description of the site, it refers to the more information about the site, allowing the display of the information to be displayed.

**FIRST\_INTRODUCED, EDITED DATE, LAST UPDATED:** these are like the ones in users, and touristic sites.






1. ## <a name="_toc134616190"></a>**Relational databases:** 

1. ### <a name="_toc134616191"></a>Visited\_sites:

This relational database **“visited\_sites”** is a** product of having a relational aspect in this relational database, users visit touristic sites, this relation is one-to-many, meaning that one user (at a time) may visit many sites, and many sites may be visited by many (one at a time).

In this case, it takes the site\_name as a foreign key to the table: touristic\_sites’ “NAME” and allows the USER\_ID to alter VISITED to visited or not visited according to sitename.
1. ### <a name="_toc134616192"></a>Rated\_restaurants:

This relational database **“rated\_restaurants”** is a** product of having a relational aspect in this relational database, users rates restaurants, this relation is one-to-many, meaning that one user may rate many restaurants, and many restaurants may be rated by many users (one at a time).

In this case, it takes the restaurant\_name (NAME) as a foreign key to the table: restaurants “NAME” and allows the USER\_ID to alter Rating to allow the user to input their own rating for a restaurant.












1. # <a name="_toc134616193"></a>**Application Flow:**

Version I:

Legend: 

Dotted Lines: You can go from any of these places to any of the other places

Full line: One way only, only accepts incoming requests, does not reroute

Line with arrow: Allows movement of user from current place to place pointed to

Dotted Lines between Baalbek and Busses.php: There exists more Touristic places that are not mentioned.


Version II:

The dotted lines and arrows are similar to version I, however,  there is a lot more functionalities, and the web application is much larger than version I. In version II however, the rhombus represents an if statement, so if the sign in was successful it will go to Tourism.php, if not, it will return to signin.php. Trying to access a logged in page should be impossible since it is a breach of the system, so the program checks for if the session exists or not, if it exists it will allow the user to access the page he/she typed in the browser, if it did not find it, it will reroute them to the main page which is index.php. The One Way Only represents that the application flow only goes one way from a place to another with no physical way back unless one presses the back button on the browser.
1. ### <a name="_toc134616194"></a>**Index.php:** 

Index.html is the first page the user sees when they visit the Web Application, this php file is composed of a drop nav, stylings, APIs (Google fonts APIs), this page also contains means to directly access the sites using the pictures displayed on the main page, the first one on the left is touristic sites, and the one on he right is restaurants. This file has access to the styling sheet: indexstyles.css that has access to API fonts created by google, and access to content delivery network (CDN). This website is responsive to all available screen sizes and is capable of rerouting to: Touristic Attractions, Restaurants, Transportation, Map of Lebanon, and Sign In.
1. ### <a name="_toc134616195"></a>**Touristic Attractions: Tourism.php**

In this php file, the web application queries MySQL first to select all the results from touristic\_sites and display them dynamically on the front end using php and css. This page also has a responsive navbar that is capable of morphing from a drop nav to a top nav according to the text size. Like so:

Code : 

<!DOCTYPE html>

<html lang="en">

<head>

`   `<link rel="icon" href="../logo-no-background.png">

`  `<link rel="stylesheet" type="text/css" href="../CSS/Tourism.css">

</head>

<body>

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
1. ### <a name="_toc134616196"></a>**Anjar.php:**

This format is used by all the additional websites pages. The following web page presents images of the site taken by hand as well as its location relative to the map, the user can read an “about” usually extracted from UNESCO’s website, this page also has a weather information about that site; however, open-source information like these do not provide precipitation or chances of precipitations, thus take caution, and prepare in advance.

One might wonder: “What might this button do?”, this button is a button that expands into a search bar as so:

In this embedded page, the user can search for anything that exists in the whole site, before that, the input is cleaned and checked for any SQL injections or XSS attacks as so:

function sanitizeText(text) {

`  `// sanitize text by removing any potential script injection characters

`  `return text.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;').replace(/'/g, '&#x27;');

}

This is an example, later, this page would be capable of displaying an image within the search results, as well as a better orientation that can come out under the searchbar.

Ofcourse, if the searchbar is empty, it does not return anything

Clicking on the button again leads us back to the page it was opened from.
1. ### <a name="_toc134616197"></a>**Restaurant.php:**

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

`        `<div class="container">

`          `<input type="radio" id="All" name="categories" value="All" checked>

`          `<input type="radio" id="Lebanese" name="categories" value="Lebanese">

`          `<input type="radio" id="Italian" name="categories" value="Italian">

`          `<input type="radio" id="Japanese" name="categories" value="Japanese">

`          `<input type="radio" id="Indian" name="categories" value="Indian">

`          `<input type="radio" id="Others" name="categories" value="Others">

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
1. ### <a name="_toc134616198"></a>**SignUp/ LogIn:**
Sign Up and Login is by far the largest file that based on these files:

The main file: register\_form composes of sign up and login code that sends the results to another file, which sends the results to the database. 

<?php

@include './config.php';

if (!$conn) {

`   `die("Connection failed: " . mysqli\_connect\_error());

}

session\_start();

function isEmailValid($email) {

`   `return preg\_match("/^[^\s@]+@[^\s@]+\.[^\s@]+$/", $email);

}

function isPasswordValid($password) {

`   `return preg\_match("/^(?=.\*[a-z])(?=.\*[A-Z])(?=.\*\d)[a-zA-Z\d]{8,}$/", $password);

}

if(isset($\_POST['submit'])){

`   `$current\_time = date('Y-m-d H:i:s');

`   `$current\_time2 = date('Y-m-d H:i:s');

`   `$name = mysqli\_real\_escape\_string($conn, $\_POST['name']);

`   `$email = mysqli\_real\_escape\_string($conn, $\_POST['email']);

`   `$pass = md5($\_POST['password']);

`   `$cpass = md5($\_POST['cpassword']);

`   `$user\_type = $\_POST['user\_type'];



`   `$select = "SELECT \* FROM users WHERE email = ? AND PASSWORD = ?";

`   `$stmt = $conn->prepare($select);

`   `$stmt->bind\_param("ss", $email, $pass);

`   `$stmt->execute();

`   `$result = $stmt->get\_result();

`   `if(mysqli\_num\_rows($result) > 0){

`      `$error[] = 'user already exists!';


`   `} else {

`      `if($pass != $cpass){

`         `$error[] = 'password not matched!';

`      `} else if (!isEmailValid($email)) {

`         `$error[] = 'invalid email format!';

`      `} else if (!isPasswordValid($\_POST['password'])) {

`         `$error[] = 'password must be at least 8 characters, one uppercase, one lowercase, and one number!';

`      `} else {

`         `$insert = "INSERT INTO users(name, email, PASSWORD, user\_type, CREATION\_DATE, MODIFICATION\_DATE) 

`         `VALUES('$name', '$email', '$pass', '$user\_type', '$current\_time', '$current\_time2')";

`         `mysqli\_query($conn, $insert);

`         `$user\_select = "SELECT ID FROM users WHERE email = ? AND PASSWORD = ?";

`         `$stmt = $conn->prepare($user\_select);

`         `$stmt->bind\_param("ss", $email, $pass);

`         `$stmt->execute();

`         `$user\_result = $stmt->get\_result();

`         `$user\_row = mysqli\_fetch\_assoc($user\_result);

`         `$user\_id = $user\_row['ID'];

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

?>

<!DOCTYPE html>

<html lang="en">

<head>

`   `<meta charset="UTF-8">

`   `<meta http-equiv="X-UA-Compatible" content="IE=edge">

`   `<meta name="viewport" content="width=device-width, initial-scale=1.0">

`   `<title>register form</title>

`   `<link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="form-container">

`   `<form action="" method="post">

`      `<h3>register now</h3>

`      `<?php

`      `if(isset($error)){

`         `foreach($error as $error){

`            `echo '<span class="error-msg">'.$error.'</span>';

`         `};

`      `};

`      `?>

`      `<input type="text" name="name" required placeholder="enter your name">

`      `<input type="email" name="email" required placeholder="enter your email">

`      `<input type="password" name="password" required placeholder="enter your password">

`      `<input type="password" name="cpassword" required placeholder="confirm your password">

`      `<select name="user\_type">

`         `<option value="user"></option>

`         `<option value="admin"></option>

`      `</select>

`      `<input type="submit" name="submit" value="register now" class="form-btn">

`      `<p>already have an account? <a href="login\_form.php">login now</a></p>

`   `</form>

</div>

</body>

</html>

This code is a complex code that does the following:

- Create a user in the database with AES encryption based off PASSWORD function in mysql, when creating a user, this program also initializes many other databases by initializing visited\_sites to have all the UserIDs and tourism names as the following: 
- This code also prevents potential SQLi attacks and checks for email regex to verify h authenticity of the user.

The following is 2 test users, these test users were created on the basis of testing purposes, this information is basically tied to the information of the logged in user. To explain this process, we need to see the page first.
1. ### <a name="_toc134616199"></a>**Uni-fied/php/Tourism.php:**


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


document.querySelectorAll(".menu-link").forEach((link) => {

`   `link.addEventListener("click", () => {

`      `navbarMenu.classList.remove("is-active");

`      `bgOverlay.classList.remove("is-active");

`   `});

});


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

`  `for (let i = 0; i < files.length; i++) {

`    `const name = files[i].name.toLowerCase();

`    `if (name.startsWith(query)) {

`      `results.push(files[i]);

`    `}

`  `}

`  `let html = '';

`  `for (let i = 0; i < results.length; i++) {

`    `const url = sanitizeUrl(results[i].url);

`    `const name = sanitizeText(results[i].name);

`    `html += `<a href="${url}">${name}<br></a>`;

`  `}

`  `if(query==""){

`   `html="";

`  `}



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
1. ### <a name="_toc134616200"></a>**Server-Side Automated Functions**
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

New functionalities include a custom based recommendation algorithm unique to each user, this is the code:

import mysql.connector

import smtplib

from email.mime.multipart import MIMEMultipart

from email.mime.base import MIMEBase

from email.mime.text import MIMEText

from email.utils import COMMASPACE

from email import encoders

import configparser

config = configparser.ConfigParser()


\# Connect to MySQL server

config.read('config.ini')

mydb = mysql.connector.connect(

` `mysql\_host = config['mysql']['host'],

` `mysql\_user = config['mysql']['user'],

` `mysql\_password = config['mysql']['password'],

` `mysql\_database = config['mysql']['database']

)

smtp\_server = config['smtp']['server']

smtp\_port = config['smtp']['port']

smtp\_username = config['smtp']['username']

smtp\_password = config['smtp']['password']

\# Create cursor to execute queries

mycursor = mydb.cursor()

\# Query 'users' table to get email and ID

mycursor.execute("SELECT email, ID FROM users")

\# Fetch all rows of the query result

users = mycursor.fetchall()

\# Loop through each user

for user in users:

`    `# Query 'visited\_sites' table to get VISITED value of each site\_name for the user

`    `mycursor.execute("SELECT site\_name, VISITED FROM visited\_sites WHERE user\_ID = %s", (user[1],))

`    `visited\_sites = mycursor.fetchall()

`    `# Create a list of not visited sites

`    `not\_visited\_sites = []

`    `for site in visited\_sites:

`        `if not site[1]:

`            `not\_visited\_sites.append(site[0])



`    `# If the user has not visited any sites, send email with list of sites and a picture of each site


`    `if not\_visited\_sites:

`        `# Format email content

`        `email\_content = f"Dear {user[0]},\n\nYou have not yet visited:\n"

`        `for site\_name in not\_visited\_sites:

`            `email\_content += f"- {site\_name}\n"


`            `# Get the location of the visited site from the touristic\_sites table


`            `mycursor.execute("SELECT location FROM touristic\_sites WHERE name = %s", (site\_name,))

`            `location = mycursor.fetchone()[0]


`            `# Get all the sites that are close to the visited site from the touristic\_sites table

`            `mycursor.execute("SELECT name FROM touristic\_sites WHERE location = %s AND name != %s", (location, site\_name))

`            `nearby\_sites = mycursor.fetchall()

`            `if nearby\_sites:

`                `email\_content += "You may also be interested in visiting these nearby sites:\n"

`                `for nearby\_site in nearby\_sites:

`                    `email\_content += f"- {nearby\_site[0]}\n"



`        `email\_content += "\nPlease take the opportunity to visit these sites. Otherwise, please enjoy a picture of them:\n"

`        `# Send email with pictures of sites

`        `for site\_name in not\_visited\_sites:

`            `email\_content += f"{site\_name}.jpg\n"


`        `# Create a MIME message object and add sender, recipient and subject

`        `msg = MIMEMultipart()

`        `msg['From'] = smtp\_username

`        `msg['To'] = user[0]

`        `msg['Subject'] = 'Sites to visit'

`        `# Add text content to the message

`        `text = MIMEText(email\_content)

`        `msg.attach(text)



`        `# Add pictures of sites to the message

`        `for site\_name in not\_visited\_sites:

`            `filepath = f'../Heritage/{site\_name}.jpg'

`            `with open(filepath, 'rb') as f:

`                `img = MIMEBase('application', 'octet-stream')

`                `img.set\_payload(f.read())

`                `encoders.encode\_base64(img)

`                `img.add\_header('Content-Disposition', f'attachment; filename="{site\_name}.jpg"')

`                `msg.attach(img)



`    `# Send the message using SMTP server

`    `with smtplib.SMTP(smtp\_server, smtp\_port) as server:

`        `server.ehlo()

`        `server.starttls()

`        `server.ehlo()

`        `server.login(smtp\_username, smtp\_password)

`        `server.sendmail(smtp\_username, user[0], msg.as\_string())

`        `print(f"Email sent to {user[0]}")







**Explaining the code:**


The script uses the following libraries: mysql.connector for connecting to a MySQL database, smtplib for sending emails using the Simple Mail Transfer Protocol (SMTP), and email for creating and formatting email messages.

The script reads configuration information from a config.ini file using the configparser library. The configuration file contains information such as the MySQL server hostname, username, password, and database name, as well as the SMTP server hostname, port number, username, and password.

The script first connects to the MySQL database using the configuration information read from the file. It then queries the users table to get the email address and ID of each user. For each user, the script queries the visited\_sites table to get the VISITED value of each site that the user has visited. If a user has not visited any sites, the script creates a list of not visited sites, and for each site, it queries the touristic\_sites table to get the location of the site and a list of nearby sites.

The script then creates an email message for each user containing the list of not visited sites and the pictures of those sites. It attaches the pictures to the email message using the email.mime.base.MIMEBase class. Finally, the script sends the email to the user using the SMTP server specified in the configuration file.

Overall, this script automates the process of sending personalized emails to users based on their visiting habits, encouraging them to visit the touristic sites they have not yet explored.
1. ### <a name="_toc134616201"></a>**Uni-fied/php/restaurants.php**

A logged-in user has the capability to review a restaurant he/she has visited once and only once, the user will be pressing on Review and the following will show up: 

A pop up on the screen will show up and it will query the user to input a value between 1 and 5 and wil update the database, since Al Hindi is already updated by the user signed in, it wont be updated again, lets update another restaurant

Let’s update this restaurant by clicking on Review

I am going to give it a rating of 5 to see what happens


The Application is well updated, now since the application is online and being updated multiple times, results may vary a lot from time to time.

The code:

<?php

`   `if (session\_status() == PHP\_SESSION\_NONE) {

`     `session\_start();

`   `}

`   `if(!isset($\_SESSION["user\_name"])){

`     `header("Location: ../index.php");

`     `exit();

`   `}

`   `$usrnm = $\_SESSION["user\_name"];

`  `?>

<!DOCTYPE html>

<html lang="en">

<head>

`  `<script>

`    `function review(name) {

`    `var rating = prompt("Please enter your rating (out of 5):");

`    `if (rating != null && rating != "" && !isNaN(rating)) {

`      `rating = Math.min(Math.max(parseInt(rating), 1), 5);

`      `var xhr = new XMLHttpRequest();

`      `xhr.onreadystatechange = function() {

`        `if (xhr.readyState == 4 && xhr.status == 200) {

`          `var result = JSON.parse(xhr.responseText);

`          `alert(result.message);

`        `}

`      `};


`      `xhr.open("POST", "review.php", true);

`      `xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

`      `xhr.send("name=" + name + "&rating=" + rating);

`    `}

`  `}


`    `</script>

`  `<!--Head-->

`   `<link rel="icon" href="../logo-no-background.png">

`  `<link rel="stylesheet" type="text/css" href="../CSS/restaurants.css">

`  `<!--Burger Icon-->

`  `<title>Restaurants - UULebanon</title>

</head>

<body>

`  `<!-- Start of HTML and NavBar-->


`  `<?php 

`    `require\_once "../navbar/logedinbar.php";

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

`                       `<?php echo  '<a href=./'.$name.'.php target="\_blank">';?><?php echo''.$name ?>

`                       `</a>

`                     `</h2>


`                     `<?php

`                     `$floor\_num = floor($ratings);       

`                   `echo  '<p> Rating: '.$ratings.' Rated by: '.$nmb\_rating.' users</p>';?>  

`                    `<button onclick="review('<?php echo $name; ?>')">Review</button>

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

`  `<script src="../JS/SearchBar.min.js"></script>  

<script>

`  `function run(){

`    `const id=document.getElementById();

`  `}

</script>

</html>





**Review.php:** 

<?php

$user\_name = $\_SESSION['user\_name'];

// Connect to the database

$db = new mysqli('localhost', 'root', '', 'users');

// Check for errors

if ($db->connect\_errno) {

`    `die('Failed to connect to database: ' . $db->connect\_error);

}

if ($\_SERVER["REQUEST\_METHOD"] == "POST") {

`  `require\_once "../config/cfg.php";

`  `$name = $\_POST["name"];

`  `$rating = $\_POST["rating"];

`  `// Check if the rating value is valid

`  `if (!is\_numeric($rating) || $rating < 1 || $rating > 5) {

`    `$response = array("status" => "error", "message" => "Invalid rating value. Please enter a value between 1 and 5.");

`    `echo json\_encode($response);

`    `exit;

`  `}


`  `try {

`    `$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

`    `$pdo->setAttribute(PDO::ATTR\_ERRMODE, PDO::ERRMODE\_EXCEPTION);

`    `$stmt = $pdo->prepare("SELECT Rating, NUMBER\_OF\_RATINGS FROM restaurants WHERE NAME = ?");

`    `$stmt->execute([$name]);

`    `$result = $stmt->fetch(PDO::FETCH\_ASSOC);

`    `if ($result) {

`      `// Get the user ID from the database

`      `$user\_query = "SELECT ID FROM users WHERE name = '$user\_name'";

`      `$user\_result = $db->query($user\_query);

`      `$user\_row = $user\_result->fetch\_assoc();

`      `$user\_id = $user\_row['ID'];


`      `// Check if the user has already rated this restaurant

`      `$check\_query = "SELECT \* FROM rated\_restaurants WHERE NAME = ? AND USER\_ID = ?";

`      `$stmt\_check = $db->prepare($check\_query);

`      `$stmt\_check->bind\_param("si", $name, $user\_id);

`      `$stmt\_check->execute();

$check\_result = $stmt\_check->get\_result();$check\_result = $db->query($check\_query);

`      `if ($check\_result->num\_rows > 0) {

`        `$response = array("status" => "error", "message" => "You have already rated this restaurant.");

`        `echo "<script>alert('You have already rated this restaurant.');</script>";

`        `echo json\_encode($response);



`      `} else {

`        `$current\_rating = $result["Rating"];

`        `$current\_number\_of\_ratings = $result["NUMBER\_OF\_RATINGS"];

`        `$new\_rating = ($current\_rating \* $current\_number\_of\_ratings + $rating) / ($current\_number\_of\_ratings + 1);

`        `$stmt = $pdo->prepare("UPDATE restaurants SET Rating = ?, NUMBER\_OF\_RATINGS = ? WHERE NAME = ?");

`        `$stmt->execute([$new\_rating, $current\_number\_of\_ratings + 1, $name]);

`        `$insert\_query = "INSERT INTO rated\_restaurants (NAME, RATING, USER\_ID) VALUES (?, ?, ?)";

`        `$stmt\_insert = $db->prepare($insert\_query);

`        `$stmt\_insert->bind\_param("sii", $name, $rating, $user\_id);

`        `if (!$stmt\_insert->execute()) {

`            `die('Failed to insert rating: ' . $db->error);

`        `} else {

`          `$response = array("status" => "success", "message" => "Review added successfully.");

`          `echo "<script>alert('Review added successfully.');</script>";

`          `echo json\_encode($response);

`        `}

`      `}

`      `$db->close();


`    `} else {

`      `$response = array("status" => "error", "message" => "Restaurant not found.");

`      `echo json\_encode($response);

`    `}

`  `} catch(PDOException $e) {

`    `$response = array("status" => "error", "message" => "Database error: " . $e->getMessage());

`    `echo json\_encode($response);

`  `}

`  `$pdo = null;

}

?>

**Explaining Restaurants.php code:**


The first block of code checks if a PHP session is already started, and if not, starts a new session. Then, it checks if the session has a variable named "user\_name" set. If not, it redirects the user to the index.php page and exits the script.

1. The next section contains HTML code for the web page, including a navbar, a list of restaurants, and a search bar.
1. The PHP code starts with a try-catch block that connects to a database using PDO and queries a table named "restaurants" to get information about each restaurant. It then loops through the results and displays the information for each restaurant in a list item.
1. For each restaurant, the PHP code displays the name, image, category, rating, and the number of users that have rated it. It also displays a "Review" button for each restaurant that calls a JavaScript function named "review" and passes the restaurant name as a parameter.
1. The "review" function prompts the user to enter a rating (out of 5) for the restaurant. It then sends an AJAX request to the "review.php" file with the restaurant name and rating as parameters. If the request is successful, it displays a message to the user with the response from the server.
1. The HTML code also includes a set of radio buttons for filtering the list of restaurants by category. It uses JavaScript to apply the filter and display only the restaurants that match the selected category.

**Explaining review.php:**

This PHP code is a script that handles the review form submission for a restaurant rating system.

The first few lines retrieve the user name from the session and create a connection to the database. Then, it checks if the request method is POST and if it is, it retrieves the name and rating values from the form using the $\_POST superglobal variable.

The code then checks if the rating value is valid by ensuring that it is a number between 1 and 5. If it is not valid, an error response is returned in JSON format and the script exits.

If the rating is valid, the script attempts to establish a PDO database connection and retrieve the current rating and number of ratings for the restaurant specified in the form. If the restaurant is not found in the database, an error response is returned.

If the restaurant is found, the script checks if the user has already rated the restaurant by querying the rated\_restaurants table using the user ID and restaurant name. If the user has already rated the restaurant, an error response is returned and the script exits.

If the user has not rated the restaurant, the script calculates the new rating by taking the current rating and number of ratings, adding the new rating, and dividing by the new number of ratings. The restaurants table is updated with the new rating and number of ratings, and the user's rating is inserted into the rated\_restaurants table. If the insertion is successful, a success response is returned in JSON format and an alert is displayed in the browser. If the insertion fails, a database error message is returned.

Finally, the script closes the database connection and exits.

1. <a name="_toc134616202"></a>**Events.php**
   Events.php is a relatively new idea that does the following:

<!DOCTYPE html>

<html>

<head>

<link rel="icon" href="../logo-no-background.png">



<script>

`  `header("Content-Security-Policy: default-src 'self'; script-src 'self'; style-src 'self' https://fonts.googleapis.com; img-src 'self';");

` `</script> 

`    `<title>Scraping Results</title>

`    `<style type="text/css">

`    `\*,::after,::before,body{text-rendering:optimizeLegibility}.header,.navbar,table{width:100%}.header,.menu{box-shadow:var(--shadow-medium);top:0}.menu-inner,.navbar{display:flex;z-index:3}.brand,.menu-link{line-height:1.5;text-transform:uppercase;font-family:inherit}.brand,.menu-link,.search-input{font-family:inherit}#search-results a,\*,::after,::before,a{text-decoration:none}table{border-collapse:collapse}td,th{text-align:left;padding:8px;border-bottom:1px solid #ddd}#search-results a:hover,th{background-color:#f2f2f2}:root{--color-black:hsl(0, 0%, 10%);--color-darks:hsl(0, 0%, 25%);--color-greys:hsl(0, 0%, 60%);--color-light:hsl(0, 0%, 95%);--color-white:hsl(0, 0%, 100%);--color-blue-100:hsl(217, 91%, 60%);--color-blue-200:hsl(221, 83%, 53%);--color-blue-300:hsl(224, 76%, 48%);--shadow-small:0 1px 3px 0 rgba(0, 0, 0, 0.1),0 1px 2px 0 rgba(0, 0, 0, 0.06);--shadow-medium:0 4px 6px -1px rgba(0, 0, 0, 0.1),0 2px 4px -1px rgba(0, 0, 0, 0.06);--shadow-large:0 10px 15px -3px rgba(0, 0, 0, 0.1),0 4px 6px -2px rgba(0, 0, 0, 0.05)}\*,::after,::before{padding:0;margin:0;box-sizing:border-box;list-style:none;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;z-index:1}.container,.header,.navbar,.section{margin:0 auto}html{font-size:100%;box-sizing:inherit;scroll-behavior:smooth;height:-webkit-fill-available}body{background:#ececec;color:#787676;font-family:serif}main{overflow:hidden}.section{padding:6rem 0 1rem}.container{max-width:75rem;height:auto;padding:0 1.25rem}.brand{font-size:1.5rem;font-weight:600;letter-spacing:-1px;color:var(--color-white)}.header{position:fixed;left:0;height:auto;z-index:10;background:#000}.navbar{position:relative;flex-direction:row;align-items:center;justify-content:space-between;height:4rem}.menu{position:fixed;left:-100%;width:80%;height:100%;overflow-y:auto;background-color:var(--color-white);transition:.5s ease-in-out;z-index:3}.menu.is-active{top:0;left:0;z-index:22}.menu-inner{flex-direction:column;row-gap:1.25rem;margin:1.25rem}.menu-link{font-size:1rem;font-weight:500;color:var(--color-pink);transition:.3s}.menu-link:hover{color:var(--color-blue-200)}.burger{position:relative;display:block;cursor:pointer;order:-1;width:1.75rem;border:nofne;outline:0;visibility:visible;z-index:11;height:50px}.burger-line{position:absolute;top:50%;left:0;width:100%;height:2px;background-color:var(--color-white);transition:.3s ease-in-out}.burger-line::after,.burger-line::before,.overlay{width:100%;height:100%;transition:.3s ease-in-out}.burger-line::after,.burger-line::before{content:"";position:absolute;background-color:var(--color-white)}.burger-line::before{top:-8px}.burger-line::after{bottom:-8px}@media only screen and (min-width:55rem){.menu{position:relative;top:0;left:0;width:auto;height:auto;margin-left:auto;background:0 0;box-shadow:none}.menu-inner{display:flex;flex-direction:row;column-gap:1.75rem;margin:0 5rem 0 auto}.menu-link{text-transform:capitalize}.menu-block{margin-left:2rem}.burger{display:none;visibility:hidden}}.overlay{position:fixed;top:0;left:0;z-index:9;opacity:0;visibility:hidden;background-color:rgba(0,0,0,.6)}.overlay.is-active{display:block;opacity:1;visibility:visible}.search-cancel,.search-toggle{display:block;position:relative;cursor:pointer;line-height:inherit;border:1px solid grey;border-radius:5px;color:#000;float:right;left:0;font-size:40px;padding:2px 23px 2px 30px;outline:0;background-color:#635f5f;height:30px;width:30px}.search-cancel:hover,.search-toggle:hover{border:1px solid #009688;background-color:#fff}.search-block{display:hidden;background-color:var(--color-white);box-shadow:0 2px 5px rgba(0,0,0,.1);position:fixed;top:0;right:-100%;width:100%;height:100%;z-index:10;overflow:hidden;background-color:var(--color-white);transition:.45s ease-in-out}.menu.is-active .search-bar{display:block}.search-block.is-active{top:0;right:0;z-index:22}.search-form{display:flex;align-items:center;-moz-column-gap:0.75rem;column-gap:.75rem;padding:.75rem 1rem;z-index:22}.search-input{display:block;font-size:1rem;font-weight:400;line-height:1.5;width:100%;height:auto;padding:.65rem 1.25rem;border:none;outline:0;border-radius:.25rem;color:var(--color-black);background-color:var(--color-light);z-index:22}.card,div.card{display:inline-block}#search-results,.card{background-color:#fff}.search-input::-webkit-search-cancel-button,.search-input::-webkit-search-decoration{display:none;visibility:hidden}span{float:right;right:0}div.cards{margin:50px auto;max-width:1060px;text-align:center;max-height:1060px}div.card{background:#fff;margin:8px;perspective:1000;position:relative;text-align:left;transition:.3s ease-in;width:360px;z-index:1;max-height:600px;height:fit-content}div.card img{height:246px;width:360px}div.card .card\_\_image-holder{height:0;padding-bottom:72%}div.card div.card-title{background:#fff;padding:6px 15px 10px;position:relative;z-index:0}div.card div.card-title a.toggle-info{border-radius:32px;height:32px;padding:0;position:absolute;right:15px;top:10px;width:32px}div.card div.card-title a.toggle-info span{background:#fff;display:block;height:2px;position:absolute;top:16px;transition:.15s ease-out;width:12px}div.card div.card-title a.toggle-info span.left{right:14px;transform:rotate(45deg)}div.card div.card-title a.toggle-info span.right{left:14px;transform:rotate(-45deg)}div.card div.card-title h2{font-size:24px;font-weight:700;letter-spacing:-.05em;margin:0;padding:0}div.card div.card-title h2 small{display:block;font-size:18px;font-weight:600;letter-spacing:-.025em}div.card div.card-description{padding:0 15px 10px;position:relative;font-size:14px}div.card div.card-actions{box-shadow:0 2px 0 0 rgba(0,0,0,.075);padding:10px 15px 20px;text-align:center}div.card div.card-flap{background:#d9d9d9;position:absolute;width:100%;transform-origin:top;transform:rotateX(-90deg)}div.card div.flap1{transition:.3s ease-out .3s;z-index:-1}div.card div.flap2,div.card.show div.flap1{transition:.3s ease-out}div.card div.flap2{z-index:-2}div.cards.showing div.card{cursor:pointer;opacity:.6;transform:scale(.88)}.no-touch div.cards.showing div.card:hover{opacity:.94;transform:scale(.92)}div.card.show{opacity:1!important;transform:scale(1)!important}div.card.show div.card-title a.toggle-info{background:#f66!important}div.card.show div.card-title a.toggle-info span{top:15px}div.card.show div.card-title a.toggle-info span.left{right:10px}div.card.show div.card-title a.toggle-info span.right{left:10px}div.card.show div.card-flap{background:#fff;transform:rotateX(0)}div.card.show div.flap2{transition:.3s ease-out .2s}a{color:#ddc5c5}.card{width:300px;height:400px;margin:1rem;box-shadow:var(--shadow-medium)}@media only screen and (min-width:1200px){.card{width:calc(33.33% - 2rem);height:400px;margin:1rem}}#search-results{position:absolute;top:100%;left:0;right:0;border:1px solid #ccc;max-height:200px;overflow-y:auto}#search-results a{display:block;padding:5px 10px;color:#333}

`    `</style>



</head>

<body>

<header class="header" id="header">

`    `<nav class="navbar container">

`       `<a href="../index.php" class="brand"><img src="../logo-no-background.png"style="width:46px"></a>

`       `<div class="burger" id="burger">

`          `<span class="burger-line"></span>

`          `<span class="burger-line"></span>

`          `<span class="burger-line"></span>

`       `</div>

`       `<span class="overlay"></span>

`       `<div class="menu" id="menu">

`          `<ul class="menu-inner">

`             `<li class="menu-item"><a class="menu-link" href="../index.php">Home</a></li>

`             `<li class="menu-item"><a class="menu-link" href="./Tourism.php">Tourism</a></li>

`             `<li class="menu-item"><a class="menu-link" href="./Restaurants.php">Restaurants</a></li>

`             `<li class="menu-item"><a class="menu-link" href="./Lebanon.php">Map of Lebanon</a></li>

`             `<li class="menu-item"><a class="menu-link" href="./Transportation.php">Transportation</a></li>

`             `<li class="menu-item"><a class="menu-link" href="../users/register\_form.php">Sign Up/Log In</a></li>

`         `</ul>

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

`    `<script src="../JS/SearchBar.min.js"></script>

`    `<br><br><br><br>

`    `<h1>Events:</h1>

`    `<table>

`        `<thead>

`            `<tr>

`                `<th>Title</th>

`                `<th>Date</th>

`                `<th>Location</th>

`                `<th>Image</th>

`                `<th>Day</th>

`                `<th>Month</th>

`                `<th>Time</th>

`                `<th>Title</th>

`                `<th>-</th>

`                `<th>Name</th>

`                `<th>Description</th>

`            `</tr>

`        `</thead>

`        `<tbody>

`            `<?php

`            `include('simple\_html\_dom.php');

`            `$url = 'https://www.ticketingboxoffice.com/';

`            `$html = file\_get\_contents($url);

`            `$html = str\_get\_html($html); // Updated to use str\_get\_html function

`            `$events\_array = array(); // Initialize the array outside of the foreach loop




foreach ($html->find('div.containerMix') as $event) { // Changed the variable name to $event to be more descriptive

$event\_data = array();

$event\_data['title'] = $event->find('.event-title', 0) ? $event->find('.event-title', 0)->plaintext : '';

$event\_data['date'] = $event->find('.event-date', 0) ? $event->find('.event-date', 0)->plaintext : '';

$event\_data['location'] = $event->find('.event-location', 0) ? $event->find('.event-location', 0)->plaintext : '';

$event\_data['image'] = $event->find('.event-image img', 0) ? $event->find('.event-image img', 0)->src : '';

$event\_data['Fday'] = $event->find('.Fday', 0) ? $event->find('.Fday', 0)->plaintext : '';

$event\_data['FMonth'] = $event->find('.FMonth', 0) ? $event->find('.FMonth', 0)->plaintext : '';

$event\_data['FMonth2'] = $event->find('.FMonth2', 0) ? $event->find('.FMonth2', 0)->plaintext : '';

$event\_data['eventFTitle'] = $event->find('.eventFTitle', 0) ? $event->find('.eventFTitle', 0)->plaintext : '';

$event\_data['eventFTiitle2Lines'] = $event->find('.eventFTiitle2Lines', 0) ? $event->find('.eventFTiitle2Lines', 0)->plaintext : '';

$event\_data['Ellipsis-lg-2'] = $event->find('.Ellipsis-lg-2', 0) ? $event->find('.Ellipsis-lg-2', 0)->plaintext : '';

$event\_data['eventDdesc'] = $event->find('.eventDdesc', 0) ? $event->find('.eventDdesc', 0)->plaintext : '';

$events\_array[] = $event\_data;

}

$html->clear(); // Free up memory by clearing the HTML object

unset($html); // Unset the HTML object variable

?>



<?php foreach ($events\_array as $event) : ?>

`            `<tr>

`                `<td><?php echo $event['title']; ?></td>

`                `<td><?php echo $event['date']; ?></td>

`                `<td><?php echo $event['location']; ?></td>

`                `<td><img src="<?php echo $event['image']; ?>" alt="<?php echo $event['title']; ?>" style="max-height: 100px;"></td>

`                `<td><?php echo $event['Fday']; ?></td>

`                `<td><?php echo $event['FMonth']; ?></td>

`                `<td><?php echo $event['FMonth2']; ?></td>

`                `<td><?php echo $event['eventFTitle']; ?></td>

`                `<td><?php echo $event['eventFTiitle2Lines']; ?></td>

`                `<td><?php echo $event['Ellipsis-lg-2']; ?></td>

`                `<td><?php echo $event['eventDdesc']; ?></td>

`            `</tr>

`        `<?php endforeach; ?>

`    `</tbody>


</table>

</body>

</html>

**Explaining the code:**

This code is a webscraping script that does the following:

\-  Use Virgin Megastore’s Ticketing Box Office to query the events available of their website using php.

\- The <script> tag contains JavaScript code that sets the Content-Security-Policy header. This header helps to prevent cross-site scripting attacks by specifying which resources are allowed to be loaded from which origins.

**- The scraping:**


` `The first line includes a PHP file called "simple\_html\_dom.php" which provides functions to parse and manipulate HTML documents.

`  `The second line defines the URL of the webpage to be scraped.

`  `The third line retrieves the HTML content of the webpage using the PHP function file\_get\_contents.

`  `The fourth line creates an instance of simple\_html\_dom and passes the HTML content retrieved in step 3 to the str\_get\_html function which converts the HTML content into a simple\_html\_dom object.

`  `The fifth line initializes an empty array called $events\_array to hold the data of each event.

`  `The sixth line starts a foreach loop to iterate through each div element on the webpage with a class of "containerMix". For each element, it extracts the relevant data using simple\_html\_dom functions and saves it in an associative array called $event\_data.

`  `The last line within the foreach loop appends the $event\_data array to the $events\_array array.

`  `The $html object is cleared and the memory allocated to it is released to avoid memory leaks.

`  `The events data is displayed in an HTML table using a foreach loop that iterates through each event in the $events\_array array and displays it in a table row.

Image:

The code outputs the above as result.
1. # <a name="_toc134616203"></a>**Future Prospects:**
The Future Prospects of this capstone project is to take this web application further by adding a better interaction with the site. Currently the site is up and running on Wamp, and the next move is to host it online on a paid or a free hosting service. The images are generated statically, downloading the images is necessary to keep the website online and accessible, a website with images that don’t lead anywhere is a failed website. This leads to more problems however, if the image does not exist, and the web scraping finds new restaurants in Lebanon, it needs access to that image as well as the rating, and number of ratings.

Currently, the checkbox method is the most complex method of updating the VISITED section of visited\_sites/ sites\_visited, if the checkbox is not working, updating the database may not work. Sometimes however, the database updates, but the checkbox remains the same, problems like these may be due to multiple users creating and logging into the same website at the same laptop/desktop/device, a dynamic session is necessary to know exactly which user\_id to grab at the time. Another solution is to add a up\_time for the users database to know exactly who is logged in and from where and when.

Another suggestion for the website is to add Lebanese Culture as well as hotels, with each having their own mechanisms and functionalities. Other suggestions include adding more events to the page using methods of python instead of php since pp was not made for web scraping, even if I were to download the dom parser function and use it with php, it wouldn’t be better than to use python; however, I will need to convert the wole application to a framework that suits machine learning such as Django which is a whole new type of framwork that supports web development, and that I am not familiar with at all.

















1. # <a name="_toc134616204"></a>**References**
*Lebanon Tourism Statistics 1995-2023*. (n.d.). MacroTrends. <https://www.macrotrends.net/countries/LBN/lebanon/tourism-statistics>

*What is an API? (Application Programming Interface) | MuleSoft*. (n.d.). MuleSoft. https://www.mulesoft.com/resources/api/what-is-an-api


95

