<?php
@include './config.php';
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
session_start();


if(isset($_POST['submit'])){
   $current_time = date('Y-m-d H:i:s');
   $current_time2 = date('Y-m-d H:i:s');
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   
   $select = "SELECT * FROM users WHERE email = '$email' && PASSWORD = '$pass'";
   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exists!';
   } else {
      if($pass != $cpass){
         $error[] = 'password not matched!';
      } else {
         $insert = "INSERT INTO users(name, email, PASSWORD, user_type, CREATION_DATE, MODIFICATION_DATE) 
         VALUES('$name', '$email', '$pass', '$user_type', '$current_time', '$current_time2')";
         mysqli_query($conn, $insert);

         // get user ID
         $user_select = "SELECT ID FROM users WHERE email = '$email' && PASSWORD = '$pass'";
         $user_result = mysqli_query($conn, $user_select);
         $user_row = mysqli_fetch_assoc($user_result);
         $user_id = $user_row['ID'];

         // initialize visited sites
         $sites_select = "SELECT NAME FROM touristic_sites";
         $sites_result = mysqli_query($conn, $sites_select);
         while($site_row = mysqli_fetch_assoc($sites_result)){
            $site_name = $site_row['NAME'];
            $site_insert = "INSERT INTO visited_sites(USER_ID, site_name, VISITED) 
            VALUES('$user_id', '$site_name', 0)";
            mysqli_query($conn, $site_insert);
         }

         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<div class="form-container">
   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
         <option value="user"></option>
         <option value="admin"></option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>
</div>
</body>
</html>
<!--
   Documentation:
   This code is a PHP script that handles user registration form submission. It does the following:

    Includes the config.php file, which contains the database connection information.
    Checks if the $conn variable is not set, which means the database connection failed, and displays an error message.
    Starts a PHP session.
    Checks if the user submitted the registration form by checking if the submit button was pressed.
    Gets the current time using the date() function and assigns it to $current_time and $current_time2 variables.
    Escapes special characters in the name and email input fields using the mysqli_real_escape_string() function and assigns them to the $name and $email variables, respectively.
    Encrypts the password using the md5() function and assigns it to the $pass variable.
    Checks if the password and confirm password fields match. If not, it adds an error message to the $error array.
    Checks if a user with the same email and password already exists in the database. If so, it adds an error message to the $error array.
    If there are no errors, it inserts the user's information into the users table in the database using the INSERT INTO SQL statement.
    Gets the ID of the newly inserted user using the SELECT SQL statement.
    Initializes the visited_sites table with the user's ID and site names from the touristic_sites table using the INSERT INTO SQL statement and a while loop.
    Redirects the user to the login page using the header() function.

The HTML code below the PHP script displays a registration form with the input fields for name, email, password, confirm password, and user type. If there are any errors, it displays them using the $error array. The form's action is blank, which means the form is submitted to the same page.--->