<?php
require "../config/cfg.php";

$db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$names = "Tyre";
$visited = false  ;
$email = "miguel@gmail.com";


$stmt = $db->prepare("INSERT INTO visited_sites (NAME, VISITED, EMAIL) VALUES (:names, :visited,:email)");
$stmt->bindValue(':name', $names);
$stmt->bindValue(':visited', $visited);
$stmt->bindValue(':email', $email);

if ($stmt->execute()) {
    echo "Data inserted successfully.";
} else {
    echo "Error inserting data.";
}
?>