<?php
require_once "cfg.php";

if(isset($_POST["site_name"]) && isset($_POST["visited"])) {
  $site_name = $_POST["site_name"];
  $visited = $_POST["visited"];

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Retrieve user ID from database using email address
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }
    $stmt = $pdo->prepare("SELECT ID FROM users WHERE email = :email");
    $stmt->bindParam(":email", $_SESSION["user_name"]);
    $stmt->execute();
    $user_id = $stmt->fetchColumn();

    // Update the visited status of the site for the user
    $stmt = $pdo->prepare("UPDATE visited_sites SET visited = :visited WHERE user_id = :user_id AND site_name = :site_name");
    $stmt->bindValue(":visited", $visited, PDO::PARAM_INT);
    $stmt->bindValue(":user_id", $user_id, PDO::PARAM_INT);
    $stmt->bindValue(":site_name", $site_name, PDO::PARAM_STR);

    $stmt->execute();
    
    echo "Visited status updated successfully.";

  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

  $pdo = null;
}
?>
