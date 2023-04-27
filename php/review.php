<?php
$user_name = $_SESSION['user_name'];
// Connect to the database
$db = new mysqli('localhost', 'root', '', 'users');
// Check for errors
if ($db->connect_errno) {
    die('Failed to connect to database: ' . $db->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  require_once "../config/cfg.php";
  $name = $_POST["name"];
  $rating = $_POST["rating"];
  // Check if the rating value is valid
  if (!is_numeric($rating) || $rating < 1 || $rating > 5) {
    $response = array("status" => "error", "message" => "Invalid rating value. Please enter a value between 1 and 5.");
    echo json_encode($response);
    exit;
  }
  try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("SELECT Rating, NUMBER_OF_RATINGS FROM restaurants WHERE NAME = ?");
    $stmt->execute([$name]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
      // Get the user ID from the database
      $user_query = "SELECT ID FROM users WHERE name = '$user_name'";
      $user_result = $db->query($user_query);
      $user_row = $user_result->fetch_assoc();
      $user_id = $user_row['ID'];

      // Check if the user has already rated this restaurant
      $check_query = "SELECT * FROM rated_restaurants WHERE NAME = ? AND USER_ID = ?";
      $stmt_check = $db->prepare($check_query);
      $stmt_check->bind_param("si", $name, $user_id);
      $stmt_check->execute();
$check_result = $stmt_check->get_result();$check_result = $db->query($check_query);
      if ($check_result->num_rows > 0) {
        $response = array("status" => "error", "message" => "You have already rated this restaurant.");
        echo "<script>alert('You have already rated this restaurant.');</script>";
        echo json_encode($response);
      } else {
        $current_rating = $result["Rating"];
        $current_number_of_ratings = $result["NUMBER_OF_RATINGS"];
        $new_rating = round(($current_rating * $current_number_of_ratings + $rating) / ($current_number_of_ratings + 1), 1);
        $stmt = $pdo->prepare("UPDATE restaurants SET Rating = ?, NUMBER_OF_RATINGS = ? WHERE NAME = ?");
        $stmt->execute([$new_rating, $current_number_of_ratings + 1, $name]);
        
        $insert_query = "INSERT INTO rated_restaurants (NAME, RATING, USER_ID) VALUES (?, ?, ?)";
        $stmt_insert = $db->prepare($insert_query);
        $stmt_insert->bind_param("sii", $name, $rating, $user_id);
        if (!$stmt_insert->execute()) {
            die('Failed to insert rating: ' . $db->error);
        } else {
          $response = array("status" => "success", "message" => "Review added successfully.");
          echo "<script>alert('Review added successfully.');</script>";
          echo json_encode($response);
        }
      }
      
      // Close the database connection
      $db->close();
    } else {
      $response = array("status" => "error", "message" => "Restaurant not found.");
      echo json_encode($response);
    }
  } catch(PDOException $e) {
    $response = array("status" => "error", "message" => "Database error: " . $e->getMessage());
    echo json_encode($response);
  }
  $pdo = null;
}
?>
