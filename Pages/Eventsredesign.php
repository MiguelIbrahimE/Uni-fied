<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="../logo-no-background.png">
 <link rel="stylesheet" href="../CSS/Events.css">
<script>

  header("Content-Security-Policy: default-src 'self'; script-src 'self'; style-src 'self' https://fonts.googleapis.com; img-src 'self';");
 </script> 
	<title>Events - UULebanon</title>
	<style type="text/css">
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
	
	<br>
	<table>
		<thead>
			<tr>
				<th>Month</th>
				<th>End</th>
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
$event_data['Fday'] = $event->find('.Fday', 0) ? $event->find('.Fday', 0)->plaintext : '';
$event_data['FMonth'] = $event->find('.FMonth', 0) ? $event->find('.FMonth', 0)->plaintext : '';
$event_data['FMonth2'] = $event->find('.FMonth2.mb5M', 0) ? $event->find('.FMonth2.mb5M', 0)->plaintext : '';
$event_data['eventFTitle'] = $event->find('.eventFTitle', 0) ? $event->find('.eventFTitle', 0)->plaintext : '';
$event_data['eventDdesc'] = $event->find('.eventDdesc', 0) ? $event->find('.eventDdesc', 0)->plaintext : '';
$events_array[] = $event_data;
}

$html->clear(); // Free up memory by clearing the HTML object
unset($html); // Unset the HTML object variable
?>
<?php foreach ($events_array as $event) : ?>
			<tr>
				
				<td><?php echo $event['FMonth']; ?></td>
				<td><?php echo $event['Fday']; ?> <?php echo $event['FMonth2']; ?></td>
				<td><?php echo $event['eventFTitle']; ?></td>
				<td><?php echo $event['eventDdesc']; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
</body>
</html>
