

<!DOCTYPE html>
<!--Let's GET WAMPY!!-->
<html lang="en">

<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anjar - UULebanon</title>
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
    
    <script src="../JS/SearchBar.js"></script>
    <br>
    <br>
    <br>
    <br>
    <div style="position:absolute;left:50%;top:50%;transform: translate(-50%, -50%);">
        

         <div style="width:100%;">
            <h1 style="text-align: center;">About:</h1>
            <p style="text-align: center;">"Founded during the Umayyad period under Caliph Walid Ibn Abd Al-Malak (705-715), the city of Anjar bears outstanding witness to the Umayyad civilization. Anjar is an example of an inland commercial centre, at the crossroads of two important routes: one leading from Beirut to Damascus and the other crossing the Bekaa and leading from Homs to Tiberiade." ~<a href="https://whc.unesco.org/en/list/293/"style="text-decoration:none">UNESCO</a></p>
            <div style="width:auto;height:50%">

                <div style="padding-right: 10px;">
                 <img src="../Heritage/Anjar.jpg" style="width: 50%;float:left">
               </div>
               <div>
                
                 <img src="../Heritage/Anjar2.jpg" style="width: 50%;float:right">
               </div>
               <div style="width:30%;height:25%">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3318.0844551935083!2d35.93139905120686!3d33.73263218059935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1518cd3e96cabccb%3A0xcf629f22f09b166e!2sUmayyad%20City%20Ruins!5e0!3m2!1sen!2slb!4v1677145361125!5m2!1sen!2slb" width='100%' height="100%" style="border:0;" float="left" display="inline-block" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
         </div>
         
    </div>

</body>

</html> 
