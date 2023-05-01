<?php
include('simple_html_dom.php');

$url = 'https://www.ticketingboxoffice.com/';
$html = file_get_contents($url);



$html = file_get_html($url);
$events = $html->find('.event-list .event');
$events_array = array();

foreach ($events as $event) {
    $event_data = array();
    $event_data['title'] = $event->find('.event-title', 0)->plaintext;
    $event_data['date'] = $event->find('.event-date', 0)->plaintext;
    $event_data['location'] = $event->find('.event-location', 0)->plaintext;
    $event_data['image'] = $event->find('.event-image img', 0)->src;
    $event_data['Fday'] = $event->find('.Fday', 0)->plaintext;
    $event_data['FMonth'] = $event->find('.FMonth', 0)->plaintext;
    $event_data['FMonth2'] = $event->find('.FMonth2', 0)->plaintext;
    $event_data['eventFTitle'] = $event->find('.eventFTitle', 0)->plaintext;
    $event_data['eventFTiitle2Lines'] = $event->find('.eventFTiitle2Lines', 0)->plaintext;
    $event_data['Ellipsis-lg-2'] = $event->find('.Ellipsis-lg-2', 0)->plaintext;
    $event_data['eventDdesc'] = $event->find('.eventDdesc', 0)->plaintext;
    $event_data['Ellipsis-lg-3'] = $event->find('.Ellipsis-lg-3', 0)->plaintext;

    $events_array[] = $event_data;
}
header('Content-Type: application/json');
echo json_encode($events_array);

?>