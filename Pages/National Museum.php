

<!DOCTYPE html>
<!--Let's GET WAMPY!!-->
<html lang="en">

<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIM - UULebanon</title>
    <link rel="icon" href="../logo-no-background.png">
   <link rel="stylesheet" href="../CSS/Moreinfo.css">
    <script src="https://kit.fontawesome.com/82f797382f.js" crossorigin="anonymous"></script>
</head>
<?php 
require "../config/cfg.php";
$db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);


?>
<body>
<?php 
    require_once "../navbar/navbar.php";
    loadNavBar();
    ?>
    
    <script src="../JS/SearchBar.min.js"></script> 
    <br>
    <br>
    <br>
    <br>
    <div style="position:absolute;left:50%;top:50%;transform: translate(-50%, -50%);">
        

         <div style="width:100%;">
            <h1 style="text-align: center;">About:</h1>
            <p style="text-align: center;">Created by nature millions of years ago, minerals are works of art with breathtaking aesthetics, incredible geometric shapes and fabulous color palette.</p>
            <div style="width:auto;height:50%">

                <div style="padding-right: 10px;">
                 <img src="../images/mim1.jpg" style="width: 50%;float:left">
               </div>
               <div>
                
                 <img src="../images/mim2.jpg" style="width: 50%;float:right">
               </div>
               <div style="width:35%;height:30%">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.382226852332!2d35.5119313152105!3d33.87980858065314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f1705ab8bd363%3A0xb28421716fea4f82!2sMIM%20Mineral%20Museum!5e0!3m2!1sen!2slb!4v1681837582978!5m2!1sen!2slb" width='100%' height="100%" style="border:0;" float="left" display="inline-block" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
         </div>
         
    </div>

</body>

</html> 
