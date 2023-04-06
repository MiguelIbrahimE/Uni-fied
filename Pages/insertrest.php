<?php
require "../config/cfg.php";

$db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$name = "Roadsters";
$description = ""  ;
$firstIntroduced = "1980-01-01";
$editedDate = "1980-01-01";
$lastUpdated = "1980-01-01";

$stmt = $db->prepare("INSERT INTO restaurants (NAME, DESCRIPTION, FIRST_INTRODUCED, EDITED_DATE, LAST_UPDATED) VALUES (:name, :description, :firstIntroduced, :editedDate, :lastUpdated)");
$stmt->bindValue(':name', $name);
$stmt->bindValue(':description', $description);
$stmt->bindValue(':firstIntroduced', $firstIntroduced);
$stmt->bindValue(':editedDate', $editedDate);
$stmt->bindValue(':lastUpdated', $lastUpdated);

if ($stmt->execute()) {
    echo "Data inserted successfully.";
} else {
    echo "Error inserting data.";
}
?>