<?php
require "../config/cfg.php";

try {
    // create a new PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // execute the query to retrieve restaurant names
    $query = "SELECT name FROM restaurants";
    $stmt = $pdo->query($query);
    
    // display the restaurant names in cards
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<div class='card'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>" . $row['name'] . "</h5>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "No restaurants found.";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
