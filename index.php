<!--
This is a non-dynamic web page written in HTML.

The following lines are HTML tags that define the structure 
of the page:
- <!DOCTYPE html>: defines the document type and version.
- <html>: represents the root element of an HTML document.
- <head>: contains metadata, such as the page title, 
  character set, and other important information.
- <meta>: provides metadata that can be used by web 
browsers and search engines.
- <title>: defines the title of the web page.
- <link>: provides links to external resources, 
such as CSS stylesheets and fonts.
- <body>: represents the content of an HTML document.
- <a>: creates a hyperlink.
- <input>: creates an input field, such as a checkbox.
- <label>: creates a label for an input field.
- <nav>: defines a section that contains navigation links.
- <ul>: creates an unordered list.
- <li>: creates a list item.

The following lines of code use inline styling to 
format and position the content of the web page:
- <img>: displays an image.
- <div>: defines a section of a web page.
- <h1>: creates a heading.
- <br>: inserts a line break.

The following lines of JavaScript code define 
functions that redirect the user to different pages when
 an image is clicked:
- function Restau(): redirects the user to the 
"Restaurants.php" page.
- function Tourism(): redirects the user to the \
"Tourism.php" page.

The following line of PHP code defines a Content 
Security Policy that restricts the sources from which 
the web page can load resources:
- header("Content-Security-Policy: default-src 
'self'; script-src 'self'; style-src 'self' 
https://fonts.googleapis.com; img-src 'self';");--->












<!DOCTYPE html>
<html lang="en">


<!--
  This is the document type declaration, 
  which specifies that this is an HTML5 document. 
  The "lang" attribute indicates that the language 
  of the document is English.
-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UULebanon </title>
    <link rel="icon" href="./logo-color.png">
    <link href='https://fonts.googleapis.com/css?family=Cedarville Cursive' rel='stylesheet'>
    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet"href="./CSS/indexstyles.css">

  </head>
  <!--This is the head section of the HTML document,
   which contains metadata and links to external resources.
    The "meta" tags provide information about the character 
    encoding, compatibility mode, and viewport of the web 
    page. The "title" tag specifies the title of the web 
    page. The "link" tags provide links to the favicon, 
    font stylesheets, and CSS stylesheet.-->
<body>
    <a href="index.html" class="logo" target="_blank">
        <img src="./logo-color.png" alt=""  style="width:50px;height:50px">
    </a>
    <input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon"/>
    <label for="menu-icon"></label>
    <nav class="nav"> 		
        <ul class="pt-5">
            <li><a href="./Pages/Tourism.php">Touristic-<br>Attractions</a></li>
            <li><a href="./Pages/Restaurants.php">Restaurants</a></li>
            <li><a href="./Pages/Lebanon.php">Map Of lebanon</a></li>
            <li><a href="./Pages/Transportation.php">Events</a></li>
            <li><a href="./Pages/Transportation.php">Transportation</a></li>
            <li><a href="./users/register_form.php">Sign In</a></li>
        </ul>
    </nav>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<div style="align-items: center;align-self: center;">
    <h1 style="text-align: center;align-items: center; margin: 0%;">Discover and Explore Lebanon in a<br>Unique and Unified Way</h1>
  </div>
  <br>
  <br> <br>
  <br>
  <br>
  <div style="padding: 10%;">
  <div>
    <div class="content_img" style="float: left; width: 45%; padding-bottom: 10px;">
      <img src="./Heritage/Anjar2.jpg" style="width: 100%;" onclick="Tourism();">
      <div class="img-text" style="text-align: center;" onclick="Tourism()">Tourism</div>
    </div>
    <div>
      <div class="content_img" style="float: right; width: 47%; padding-bottom: 10px;">
        <img src="./Restaurants/Osaka Sushi Lounge.jpg" style="width: 100%;" onclick="Restau()">
        <div class="img-text" style="text-align: center;"onclick="Restau()">Restaurants</div>
      </div>
    </div>
  </div>
</div>
<script>
  function Restau(){
    window.location.href="./Pages/Restaurants.php";
  }
  function Tourism(){
    window.location.href="./Pages/Tourism.php";
  }
  header("Content-Security-Policy: default-src 'self'; script-src 'self'; style-src 'self' https://fonts.googleapis.com; img-src 'self';");

</script>
</body>
</html>