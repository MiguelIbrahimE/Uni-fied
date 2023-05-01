<?php
include('simple_html_dom.php');

$url = 'https://www.ticketingboxoffice.com/';
$html = file_get_contents($url);

$html = str_get_html($html);

$events_array = array();

foreach ($html->find('.FeatTitle, .HoverHere') as $event) {
    $event_data = array();

    if ($event->hasClass('FeatTitle')) {
        // This is a featured event, so we extract the title from this element
        $event_data['title'] = $event->plaintext;
    } else {
        // This is a regular event, so we extract the title from the child element with class "eventFTitle"
        $event_data['title'] = $event->find('.eventFTitle', 0)->plaintext;
    }

    // Extract date and time information
    $date = $event->find('.FDay, .FMonth', 0)->plaintext . ' ' . $event->find('.FMonth', 1)->plaintext . ' ' . $event->find('.FMonth', 2)->plaintext;
    $event_data['date'] = preg_replace('/\s+/', ' ', $date); // remove multiple spaces
    $event_data['start_time'] = $event->find('.EvDTime', 0)->plaintext;
    $event_data['end_time'] = $event->find('.EvDTime', 1)->plaintext;

    // Extract location information
    $event_data['location'] = $event->find('.FMonth2', 0)->plaintext;
    $event_data['venue'] = $event->find('.FMonth2', 1)->plaintext;

    // Extract image and description
    $event_data['image'] = $event->find('.imgFeaturewidthh100', 0)->getAttribute('src');
    $event_data['description'] = $event->find('.eventDdesc, .EvDTime', 0)->plaintext;

    // Add event data to array
    $events_array[] = $event_data;
}

print_r($events_array);
?>
