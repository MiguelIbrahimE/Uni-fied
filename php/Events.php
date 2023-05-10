<? 
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  if(!isset($_SESSION["user_name"])){
    header("Location: ../index.php");
    exit();
  }
  $usrnm = $_SESSION["user_name"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Scraping Results</title>
    <style src="../CSS/Events.css"></style>
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
	</style>
</head>
<body>
    <?
    require "../navbar/navbar.php";
        loadNavBar();
        
    ?>
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

foreach ($html->find('div#ctl00_MainContent_HpEvents_rptEvents_ctl00_ItemFeatured') as $event) { // Changed the variable name to $event to be more descriptive
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
