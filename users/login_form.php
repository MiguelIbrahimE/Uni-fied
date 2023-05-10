<?php

@include './config.php';

ini_set('session.gc_maxlifetime', 3600); // Set session lifetime to 1 hour
ini_set('session.cookie_lifetime', 3600); // Set cookie lifetime to 1 hour
session_start();


if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];
   $select = " SELECT * FROM users WHERE email = '$email' && PASSWORD = '$pass' ";
   $result = mysqli_query($conn, $select);
   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $key = "my-secret-key";
         $method = "AES-256-CBC";
         $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method));

         // Encrypt the data using AES encryption and the generated iv
         $ciphertext = openssl_encrypt($plaintext, $method, $key, 0, $iv);

         // Generate a hash of the encrypted data
         $hash = hash('sha256', $ciphertext);
         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         $plaintext=$email;
         $key = "Oblivion";
         $method = "AES-256-CBC";
         $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method));

         // Encrypt the data using AES encryption and the generated iv
         $ciphertext = openssl_encrypt($plaintext, $method, $key, 0, $iv);

         // Generate a hash of the encrypted data
         $hash = hash('sha256', $ciphertext);
         $_SESSION['user_name'] = $hash;
         header('location:../php/Tourism.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="./css/style.css">
</head>
<body>
   
<div class="form-container">
   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>
</div>
</body>
</html>
<!--
   Documentation:
   This code is a PHP script that handles user authentication on a login form. Here's what the code does:

    The script includes the configuration file for the database connection using @include function.

    The ini_set functions set the session lifetime and cookie lifetime to 1 hour.

    The session_start function starts a new or resumes an existing session.

    When the user submits the login form by clicking the submit button, the if statement checks if the submit button is set in the $_POST superglobal array.

    The mysqli_real_escape_string function escapes special characters in the name and email fields of the $_POST array to prevent SQL injection attacks.

    The md5 function hashes the password entered by the user.

    The SELECT statement checks if there is a user with the given email and password in the database. If the user exists, the script retrieves the user_type field from the database.

    If the user_type is admin, the script generates a secret key, encrypts the admin_name using AES encryption and the generated iv, and generates a hash of the encrypted data. Then, it sets the admin_name session variable and redirects the user to the admin_page.php.

    If the user_type is user, the script encrypts the email using AES encryption and the generated iv, generates a hash of the encrypted data, and sets the user_name session variable. Then, it redirects the user to the Tourism.php page.

    If the email and password entered by the user do not match any user in the database, an error message is displayed.

    The HTML code creates a login form that asks the user to enter their email and password. If there is an error message, it is displayed next to the email field. If the user does not have an account, they can register by clicking on the link.

Overall, the code checks if the user exists in the database and if so, sets session variables based on the user's role and redirects them to the appropriate page. If the user does not exist or the email and password do not match, an error message is displayed.
   --->