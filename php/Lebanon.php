<?php
  
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map View of Lebanon</title>
    <link rel="icon" href="../Lebanese_Flag.ico">
    <link rel="stylesheet"href="../CSS/Lebanon.css">
    <script src="https://kit.fontawesome.com/82f797382f.js" crossorigin="anonymous"></script>

    </head>
    <?php 
    require_once "../navbar/navbar.php";
    loadNavBar();
    ?>

  <script src="../JS/app.js"></script>  
  <script src="../JS/SearchBar.js"></script>  
  
        <br>
    <!--https://www.google.com.qa/maps/d/-->
    
    <iframe src="https://www.google.com.qa/maps/d/u/0/embed?mid=1Ly1TatB7RWT20NFJRevhY_2Mjb_2iGI&ehbc=2E312F" width="100%" height="780px"></iframe>
</body>
</html>