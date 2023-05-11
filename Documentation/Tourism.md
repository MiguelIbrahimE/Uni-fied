This code appears to be a HTML file containing both HTML markup and CSS styling. The HTML markup includes a page title, a logo, and a menu. The CSS styling includes a set of variables, a series of styles applied to various elements on the page, and media queries to modify these styles for different screen sizes.

Here is a breakdown of the code:
<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="icon" href="../logo-no-background.png">
  <title>Tourism - UULebanon</title>
</head>
<body>
This is the start of the HTML document. The <!DOCTYPE html> line specifies the version of HTML being used, while the <html> tag indicates the start of the HTML document. The <head> tag includes links to external resources (in this case, a favicon), as well as the page title. The <body> tag indicates the start of the page content.
<style>
  /* CSS styling rules */
</style>
This <style> tag is used to define CSS rules to apply to elements on the page.
<div class="header">
  <div class="navbar">
    <div class="brand">
      Tourism
    </div>
    <button class="burger">
      <span class="burger-line"></span>
      <span class="burger-line"></span>
      <span class="burger-line"></span>
    </button>
    <div class="menu">
      <div class="menu-inner">
        <a class="menu-link" href="#">Home</a>
        <a class="menu-link" href="#">About</a>
        <a class="menu-link" href="#">Contact</a>
      </div>
    </div>
    <div class="overlay"></div>
  </div>
</div>
This is the markup for a header/navigation bar at the top of the page. It includes a logo/brand name, a "burger" button for accessing a menu on smaller screens, and a dropdown menu containing links to various pages on the site.
<main>
  <section>
    <div class="container">
      <!-- Page content goes here -->
    </div>
  </section>
</main>
This section contains the main content of the page, contained within a <section> element with a <div> for the content itself

Documentation:

The code you provided is a basic HTML document that creates a webpage. Here is a breakdown of what each line does:

<!DOCTYPE html> - This is a declaration that tells the browser that this is an HTML5 document.

<html lang="en"> - This is the opening tag for the HTML document, and it specifies the language of the document.

<head> - This is the opening tag for the head section of the document. The head section contains information about the document, such as the title of the page, stylesheets, and scripts.

<link rel="icon" href="../logo-no-background.png"> - This is a link to the icon for the webpage, which is typically displayed in the browser's tab or bookmark menu.

<title>Tourism - UULebanon</title> - This is the title of the webpage, which is displayed in the browser's title bar.

</head> - This is the closing tag for the head section.

<body> - This is the opening tag for the body section of the document. The body section contains the content that will be displayed on the webpage.

<style> ... </style> - This is an embedded style sheet that contains CSS code to style the webpage.

<div> - This is a generic container element used to group and style other elements on the webpage.

@import url(https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap); - This is an import statement that brings in the Rubik font family from Google Fonts to be used on the webpage.

*,::after,::before,body{text-rendering:optimizeLegibility}... - This is a CSS rule that applies to all elements on the page, optimizing text rendering for legibility.

<main> - This is an HTML5 element that defines the main content of the webpage.

<section> - This is an HTML5 element used to group related content together.

<div class="container"> - This is a container element with a class of "container" that is used to group and style other elements on the webpage.

<h1 class="brand"> - This is a header element with a class of "brand" that contains the name of the website or organization.

<header class="header"> - This is a header element with a class of "header" that contains the logo and navigation menu.

<nav class="navbar"> - This is a navigation element with a class of "navbar" that contains the navigation links.

<div class="menu"> - This is a container element with a class of "menu" that is used to display a drop-down menu.

<div class="burger"> - This is a container element with a class of "burger" that is used to display a hamburger menu icon.

<div class="burger-line"> - This is a container element with a class of "burger-line" that is used to display the lines of the hamburger menu icon.

<div class="overlay"> - This is a container element with a class of "overlay" that is used to create a semi-transparent layer over the webpage when the drop-down menu is open.

<form class="search-block"> - This is a form element with a class of "search-block" that is used to display a search box.

</body> - This is the closing tag for the body section.

</html> - This is the closing tag for the HTML document.