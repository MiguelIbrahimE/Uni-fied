<!DOCTYPE html>
<html>
<head>
<script>
  header("Content-Security-Policy: default-src 'self'; script-src 'self'; style-src 'self' https://fonts.googleapis.com; img-src 'self';");
 </script> 
	<title>Scraping Results</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #f2f2f2;
		}
		@import url("https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap");
:root {
  --color-black: hsl(0, 0%, 10%);
  --color-darks: hsl(0, 0%, 25%);
  --color-greys: hsl(0, 0%, 60%);
  --color-light: hsl(0, 0%, 95%);
  --color-white: hsl(0, 0%, 100%);
  --color-blue-100: hsl(217, 91%, 60%);
  --color-blue-200: hsl(221, 83%, 53%);
  --color-blue-300: hsl(224, 76%, 48%);
  --shadow-small: 0 1px 3px 0 rgba(0, 0, 0, 0.1),
     0 1px 2px 0 rgba(0, 0, 0, 0.06);
  --shadow-medium: 0 4px 6px -1px rgba(0, 0, 0, 0.1),
     0 2px 4px -1px rgba(0, 0, 0, 0.06);
  --shadow-large: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
     0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

*,
*::before,
*::after {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  list-style: none;
  list-style-type: none;
  text-decoration: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-rendering: optimizeLegibility;
  z-index: 1;
}

html {
  font-size: 100%;
  box-sizing: inherit;
  scroll-behavior: smooth;
  height: -webkit-fill-available;
}

/* Styles for body */
body {
  background: #ececec;
  color: #787676;
  font-family:serif;
  text-rendering: optimizeLegibility;
}

main {
  overflow: hidden;
}


.section {
  margin: 0 auto;
  padding: 6rem 0 1rem;
}

.container {
  max-width: 75rem;
  height: auto;
  margin: 0 auto;
  padding: 0 1.25rem;
}

.brand {
  font-family: inherit;
  font-size: 1.5rem;
  font-weight: 600;
  line-height: 1.5;
  letter-spacing: -1px;
  text-transform: uppercase;
  color: var(--color-white)
}

.header {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: auto;
  z-index: 10;
  margin: 0 auto;

  box-shadow: var(--shadow-medium);
 background: #000000;
}

.navbar {
  position: relative;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  height: 4rem;
  margin: 0 auto;
  z-index: 3;
}

.menu {
  position: fixed;
  top: 0;
  left: -100%;
  width: 80%;
  height: 100%;
  z-index: 10;
  overflow-y: auto;
  background-color: var(--color-white);
  box-shadow: var(--shadow-medium);
  transition: all 0.5s ease-in-out;
  z-index: 3;
}
.menu.is-active {
  top: 0;
  left: 0;
  z-index: 22;
}
.menu-inner {
  display: flex;
  flex-direction: column;
  row-gap: 1.25rem;
  margin: 1.25rem;
  z-index: 3;
}
.menu-link {
  font-family: inherit;
  font-size: 1rem;
  font-weight: 500;
  line-height: 1.5;
  text-transform: uppercase;
  color: var(--color-pink);
  transition: all 0.3s ease;
}
.menu-link:hover {
  color: var(--color-blue-200);
}
@media only screen and (min-width: 55rem) {
  .menu {
    position: relative;
    top: 0;
    left: 0;
    width: auto;
    height: auto;
    margin-left: auto;
    background: none;
    box-shadow: none;
  }
  .menu-inner {
    display: flex;
    flex-direction: row;
    column-gap: 1.75rem;
    margin: 0 auto;
    margin-right: 5rem;
  }
  .menu-link {
    text-transform: capitalize;
  }
  .menu-block {
    margin-left: 2rem;
  }
}

.burger {
  position: relative;
  display: block;
  cursor: pointer;
  order: -1;
  width: 1.75rem;
  height: auto;
  border: nofne;
  outline: none;
  visibility: visible;
  z-index: 11;
  height:50px
}
.burger-line {
  position: absolute;
  top: 50%;
  left: 0;
  width: 100%;
  height: 2px;
  background-color: var(--color-white);
  transition: all 0.3s ease-in-out;
}
.burger-line::before,
.burger-line::after {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: var(--color-white);
  transition: all 0.3s ease-in-out;
}
.burger-line::before {
  top: -8px;
}
.burger-line::after {
  bottom: -8px;
}
@media only screen and (min-width: 55rem) {
  .burger {
    display: none;
    visibility: hidden;
  }
}

.overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 9;
  opacity: 0;
  visibility: hidden;
  background-color: rgba(0, 0, 0, 0.6);
  transition: all 0.3s ease-in-out;
}
.overlay.is-active {
  display: block;
  opacity: 1;
  visibility: visible;
}


.search-toggle, .search-cancel {
display: block;
position: relative;
  cursor: pointer;

  line-height: inherit;
  border: 1px solid grey;
  border-radius: 5px;
 color:black;
float:right;
left:0px;
 font-size: 40px;
  padding: 2px 23px 2px 30px;
  outline: 0;
  background-color: #635f5f;
  height:30px;
  width:30px;


}


.search-toggle:hover, .search-cancel:hover{
    border: 1px solid #009688;
    background-color: white;
}
.search-block {
  position: absolute;
  top: 0px;
  right: 0px; 
  display:hidden;
  background-color: var(--color-white); 
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
z-index: 22;
}
.menu.is-active .search-bar {
  display: block;
}.search-block {
  position: fixed;
  top: 0;
  right: -100%;
  width: 100%;
  height: 100%;
  z-index: 10;
  overflow: hidden;
  background-color: var(--color-white);
  transition: all 0.45s ease-in-out;
}
.search-block.is-active {
  top: 0;
  right: 0;
  z-index: 22;
}
.search-form {
  display: flex;
  align-items: center;
  -moz-column-gap: 0.75rem;
       column-gap: 0.75rem;
  padding: 0.75rem 1rem;
  z-index: 22;
}
.search-input {
  display: block;
  font-family: inherit;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  width: 100%;
  height: auto;
  padding: 0.65rem 1.25rem;
  border: none;
  outline: none;
  border-radius: 0.25rem;
  color: var(--color-black);
  background-color: var(--color-light);
  z-index: 22;
}
.search-input::-webkit-search-decoration, .search-input::-webkit-search-cancel-button {
  display: none;
  visibility: hidden;
}



span{
  float:right;
  right:0px
}
div.cards {
  margin: 50px auto;
  max-width: 1060px;
  text-align: center;
  max-height: 1060px;
}
div.card {
  background: #ffffff;
  display: inline-block;
  margin: 8px;
  perspective: 1000;
  position: relative;
  text-align: left;
  transition: all 0.3s 0s ease-in;
  width: 360px;
  z-index: 1;
  max-height: 600px;
  height: fit-content;
}
div.card img {
  height:246px;
  width: 360px;

}
div.card .card__image-holder {
  height: 0px;
  padding-bottom: 72%;
}
div.card div.card-title {
  background: #ffffff;
  padding: 6px 15px 10px;
  position: relative;
  z-index: 0;
}
div.card div.card-title a.toggle-info {
  border-radius: 32px;
  height: 32px;
  padding: 0;
  position: absolute;
  right: 15px;
  top: 10px;
  width: 32px;
}

div.card div.card-title a.toggle-info span {
  background: #ffffff;
  display: block;
  height: 2px;
  position: absolute;
  top: 16px;
  transition: all 0.15s 0s ease-out;
  width: 12px;
}
div.card div.card-title a.toggle-info span.left {
  right: 14px;
  transform: rotate(45deg);
}
div.card div.card-title a.toggle-info span.right {
  left: 14px;
  transform: rotate(-45deg);
}
div.card div.card-title h2 {
  font-size: 24px;
  font-weight: 700;
  letter-spacing: -0.05em;
  margin: 0;
  padding: 0;
}
div.card div.card-title h2 small {
  display: block;
  font-size: 18px;
  font-weight: 600;
  letter-spacing: -0.025em;
}
div.card div.card-description {
  padding: 0 15px 10px;
  position: relative;
  font-size: 14px;
}
div.card div.card-actions {
  box-shadow: 0 2px 0px 0 rgba(0, 0, 0, 0.075);
  padding: 10px 15px 20px;
  text-align: center;
}
div.card div.card-flap {
  background: #d9d9d9;
  position: absolute;
  width: 100%;
  transform-origin: top;
  transform: rotateX(-90deg);
}
div.card div.flap1 {
  transition: all 0.3s 0.3s ease-out;
  z-index: -1;
}
div.card div.flap2 {
  transition: all 0.3s 0s ease-out;
  z-index: -2;
}
div.cards.showing div.card {
  cursor: pointer;
  opacity: 0.6;
  transform: scale(0.88);
}
.no-touch div.cards.showing div.card:hover {
  opacity: 0.94;
  transform: scale(0.92);
}
div.card.show {
  opacity: 1 !important;
  transform: scale(1) !important;
}
div.card.show div.card-title a.toggle-info {
  background: #ff6666 !important;
}
div.card.show div.card-title a.toggle-info span {
  top: 15px;
}
div.card.show div.card-title a.toggle-info span.left {
  right: 10px;
}
div.card.show div.card-title a.toggle-info span.right {
  left: 10px;
}
div.card.show div.card-flap {
  background: #ffffff;
  transform: rotateX(0deg);
}
div.card.show div.flap1 {
  transition: all 0.3s 0s ease-out;
}
div.card.show div.flap2 {
  transition: all 0.3s 0.2s ease-out;
}
a{
  color:rgb(221, 197, 197);
  text-decoration: none;
}
.card {
  display: inline-block;
  width: 300px;
  height: 400px;
  margin: 1rem;
  background-color: #fff;
  box-shadow: var(--shadow-medium);
}
.card {
  display: inline-block;
  width: 300px;
  height: 400px;
  margin: 1rem;
  background-color: #fff;
  box-shadow: var(--shadow-medium);
}
@media only screen and (min-width: 1200px) {
  .card {
    width: calc(33.33% - 2rem);
    height: 400px;
    margin: 1rem;
  }
}

#search-results {
  position: absolute;
  top: 100%;
  left: 0;
  right: 0;
  background-color: #fff;
  border: 1px solid #ccc;
  max-height: 200px;
  overflow-y: auto;
}

#search-results a {
  display: block;
  padding: 5px 10px;
  color: #333;
  text-decoration: none;
}

#search-results a:hover {
  background-color: #f2f2f2;
}
	</style>
</head>
<body>
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
             <li class="menu-item"><a class="menu-link" href="./Tourism.php">Tourism</a></li>
             <li class="menu-item"><a class="menu-link" href="./Restaurants.php">Restaurants</a></li>
             <li class="menu-item"><a class="menu-link" href="./Lebanon.php">Map of Lebanon</a></li>
             <li class="menu-item"><a class="menu-link" href="./Transportation.php">Transportation</a></li>
             <li class="menu-item"><a class="menu-link" href="../users/register_form.php">Sign Up/Log In</a></li>
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
	<script src="../JS/SearchBar.min.js"></script>
	<br><br><br><br>
	<h1>Events:</h1>
	<table>
		<thead>
			<tr>
				<th>Title</th>
				<th>Date</th>
				<th>Location</th>
				<th>Image</th>
				<th>Day</th>
				<th>Month</th>
				<th>Time</th>
				<th>Title</th>
				<th>-</th>
				<th>Name</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include('simple_html_dom.php');

			$url = 'https://www.ticketingboxoffice.com/';
			$html = file_get_contents($url);

			$html = str_get_html($html); // Updated to use str_get_html function
            $events_array = array(); // Initialize the array outside of the foreach loop

foreach ($html->find('div.containerMix') as $event) { // Changed the variable name to $event to be more descriptive
$event_data = array();
$event_data['title'] = $event->find('.event-title', 0) ? $event->find('.event-title', 0)->plaintext : '';
$event_data['date'] = $event->find('.event-date', 0) ? $event->find('.event-date', 0)->plaintext : '';
$event_data['location'] = $event->find('.event-location', 0) ? $event->find('.event-location', 0)->plaintext : '';
$event_data['image'] = $event->find('.event-image img', 0) ? $event->find('.event-image img', 0)->src : '';
$event_data['Fday'] = $event->find('.Fday', 0) ? $event->find('.Fday', 0)->plaintext : '';
$event_data['FMonth'] = $event->find('.FMonth', 0) ? $event->find('.FMonth', 0)->plaintext : '';
$event_data['FMonth2'] = $event->find('.FMonth2', 0) ? $event->find('.FMonth2', 0)->plaintext : '';
$event_data['eventFTitle'] = $event->find('.eventFTitle', 0) ? $event->find('.eventFTitle', 0)->plaintext : '';
$event_data['eventFTiitle2Lines'] = $event->find('.eventFTiitle2Lines', 0) ? $event->find('.eventFTiitle2Lines', 0)->plaintext : '';
$event_data['Ellipsis-lg-2'] = $event->find('.Ellipsis-lg-2', 0) ? $event->find('.Ellipsis-lg-2', 0)->plaintext : '';
$event_data['eventDdesc'] = $event->find('.eventDdesc', 0) ? $event->find('.eventDdesc', 0)->plaintext : '';

$events_array[] = $event_data;
}

$html->clear(); // Free up memory by clearing the HTML object
unset($html); // Unset the HTML object variable
?>
<?php foreach ($events_array as $event) : ?>
			<tr>
				<td><?php echo $event['title']; ?></td>
				<td><?php echo $event['date']; ?></td>
				<td><?php echo $event['location']; ?></td>
				<td><img src="<?php echo $event['image']; ?>" alt="<?php echo $event['title']; ?>" style="max-height: 100px;"></td>
				<td><?php echo $event['Fday']; ?></td>
				<td><?php echo $event['FMonth']; ?></td>
				<td><?php echo $event['FMonth2']; ?></td>
				<td><?php echo $event['eventFTitle']; ?></td>
				<td><?php echo $event['eventFTiitle2Lines']; ?></td>
				<td><?php echo $event['Ellipsis-lg-2']; ?></td>
				<td><?php echo $event['eventDdesc']; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
</body>
</html>
