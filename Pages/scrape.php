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

header('Content-Type: application/json');
echo json_encode($events_array);
//ctl00_MainContent_HpEvents_rptEvents_ctl00_ItemFeatured
?>
