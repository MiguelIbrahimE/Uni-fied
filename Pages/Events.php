<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="../logo-no-background.png">
 
<script>

  header("Content-Security-Policy: default-src 'self'; script-src 'self'; style-src 'self' https://fonts.googleapis.com; img-src 'self';");
 </script> 
	<title>Scraping Results</title>
	<style type="text/css">
	*,::after,::before,body{text-rendering:optimizeLegibility}.header,.navbar,table{width:100%}.header,.menu{box-shadow:var(--shadow-medium);top:0}.menu-inner,.navbar{display:flex;z-index:3}.brand,.menu-link{line-height:1.5;text-transform:uppercase;font-family:inherit}.brand,.menu-link,.search-input{font-family:inherit}#search-results a,*,::after,::before,a{text-decoration:none}table{border-collapse:collapse}td,th{text-align:left;padding:8px;border-bottom:1px solid #ddd}#search-results a:hover,th{background-color:#f2f2f2}:root{--color-black:hsl(0, 0%, 10%);--color-darks:hsl(0, 0%, 25%);--color-greys:hsl(0, 0%, 60%);--color-light:hsl(0, 0%, 95%);--color-white:hsl(0, 0%, 100%);--color-blue-100:hsl(217, 91%, 60%);--color-blue-200:hsl(221, 83%, 53%);--color-blue-300:hsl(224, 76%, 48%);--shadow-small:0 1px 3px 0 rgba(0, 0, 0, 0.1),0 1px 2px 0 rgba(0, 0, 0, 0.06);--shadow-medium:0 4px 6px -1px rgba(0, 0, 0, 0.1),0 2px 4px -1px rgba(0, 0, 0, 0.06);--shadow-large:0 10px 15px -3px rgba(0, 0, 0, 0.1),0 4px 6px -2px rgba(0, 0, 0, 0.05)}*,::after,::before{padding:0;margin:0;box-sizing:border-box;list-style:none;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;z-index:1}.container,.header,.navbar,.section{margin:0 auto}html{font-size:100%;box-sizing:inherit;scroll-behavior:smooth;height:-webkit-fill-available}body{background:#ececec;color:#787676;font-family:serif}main{overflow:hidden}.section{padding:6rem 0 1rem}.container{max-width:75rem;height:auto;padding:0 1.25rem}.brand{font-size:1.5rem;font-weight:600;letter-spacing:-1px;color:var(--color-white)}.header{position:fixed;left:0;height:auto;z-index:10;background:#000}.navbar{position:relative;flex-direction:row;align-items:center;justify-content:space-between;height:4rem}.menu{position:fixed;left:-100%;width:80%;height:100%;overflow-y:auto;background-color:var(--color-white);transition:.5s ease-in-out;z-index:3}.menu.is-active{top:0;left:0;z-index:22}.menu-inner{flex-direction:column;row-gap:1.25rem;margin:1.25rem}.menu-link{font-size:1rem;font-weight:500;color:var(--color-pink);transition:.3s}.menu-link:hover{color:var(--color-blue-200)}.burger{position:relative;display:block;cursor:pointer;order:-1;width:1.75rem;border:nofne;outline:0;visibility:visible;z-index:11;height:50px}.burger-line{position:absolute;top:50%;left:0;width:100%;height:2px;background-color:var(--color-white);transition:.3s ease-in-out}.burger-line::after,.burger-line::before,.overlay{width:100%;height:100%;transition:.3s ease-in-out}.burger-line::after,.burger-line::before{content:"";position:absolute;background-color:var(--color-white)}.burger-line::before{top:-8px}.burger-line::after{bottom:-8px}@media only screen and (min-width:55rem){.menu{position:relative;top:0;left:0;width:auto;height:auto;margin-left:auto;background:0 0;box-shadow:none}.menu-inner{display:flex;flex-direction:row;column-gap:1.75rem;margin:0 5rem 0 auto}.menu-link{text-transform:capitalize}.menu-block{margin-left:2rem}.burger{display:none;visibility:hidden}}.overlay{position:fixed;top:0;left:0;z-index:9;opacity:0;visibility:hidden;background-color:rgba(0,0,0,.6)}.overlay.is-active{display:block;opacity:1;visibility:visible}.search-cancel,.search-toggle{display:block;position:relative;cursor:pointer;line-height:inherit;border:1px solid grey;border-radius:5px;color:#000;float:right;left:0;font-size:40px;padding:2px 23px 2px 30px;outline:0;background-color:#635f5f;height:30px;width:30px}.search-cancel:hover,.search-toggle:hover{border:1px solid #009688;background-color:#fff}.search-block{display:hidden;background-color:var(--color-white);box-shadow:0 2px 5px rgba(0,0,0,.1);position:fixed;top:0;right:-100%;width:100%;height:100%;z-index:10;overflow:hidden;background-color:var(--color-white);transition:.45s ease-in-out}.menu.is-active .search-bar{display:block}.search-block.is-active{top:0;right:0;z-index:22}.search-form{display:flex;align-items:center;-moz-column-gap:0.75rem;column-gap:.75rem;padding:.75rem 1rem;z-index:22}.search-input{display:block;font-size:1rem;font-weight:400;line-height:1.5;width:100%;height:auto;padding:.65rem 1.25rem;border:none;outline:0;border-radius:.25rem;color:var(--color-black);background-color:var(--color-light);z-index:22}.card,div.card{display:inline-block}#search-results,.card{background-color:#fff}.search-input::-webkit-search-cancel-button,.search-input::-webkit-search-decoration{display:none;visibility:hidden}span{float:right;right:0}div.cards{margin:50px auto;max-width:1060px;text-align:center;max-height:1060px}div.card{background:#fff;margin:8px;perspective:1000;position:relative;text-align:left;transition:.3s ease-in;width:360px;z-index:1;max-height:600px;height:fit-content}div.card img{height:246px;width:360px}div.card .card__image-holder{height:0;padding-bottom:72%}div.card div.card-title{background:#fff;padding:6px 15px 10px;position:relative;z-index:0}div.card div.card-title a.toggle-info{border-radius:32px;height:32px;padding:0;position:absolute;right:15px;top:10px;width:32px}div.card div.card-title a.toggle-info span{background:#fff;display:block;height:2px;position:absolute;top:16px;transition:.15s ease-out;width:12px}div.card div.card-title a.toggle-info span.left{right:14px;transform:rotate(45deg)}div.card div.card-title a.toggle-info span.right{left:14px;transform:rotate(-45deg)}div.card div.card-title h2{font-size:24px;font-weight:700;letter-spacing:-.05em;margin:0;padding:0}div.card div.card-title h2 small{display:block;font-size:18px;font-weight:600;letter-spacing:-.025em}div.card div.card-description{padding:0 15px 10px;position:relative;font-size:14px}div.card div.card-actions{box-shadow:0 2px 0 0 rgba(0,0,0,.075);padding:10px 15px 20px;text-align:center}div.card div.card-flap{background:#d9d9d9;position:absolute;width:100%;transform-origin:top;transform:rotateX(-90deg)}div.card div.flap1{transition:.3s ease-out .3s;z-index:-1}div.card div.flap2,div.card.show div.flap1{transition:.3s ease-out}div.card div.flap2{z-index:-2}div.cards.showing div.card{cursor:pointer;opacity:.6;transform:scale(.88)}.no-touch div.cards.showing div.card:hover{opacity:.94;transform:scale(.92)}div.card.show{opacity:1!important;transform:scale(1)!important}div.card.show div.card-title a.toggle-info{background:#f66!important}div.card.show div.card-title a.toggle-info span{top:15px}div.card.show div.card-title a.toggle-info span.left{right:10px}div.card.show div.card-title a.toggle-info span.right{left:10px}div.card.show div.card-flap{background:#fff;transform:rotateX(0)}div.card.show div.flap2{transition:.3s ease-out .2s}a{color:#ddc5c5}.card{width:300px;height:400px;margin:1rem;box-shadow:var(--shadow-medium)}@media only screen and (min-width:1200px){.card{width:calc(33.33% - 2rem);height:400px;margin:1rem}}#search-results{position:absolute;top:100%;left:0;right:0;border:1px solid #ccc;max-height:200px;overflow-y:auto}#search-results a{display:block;padding:5px 10px;color:#333}
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
