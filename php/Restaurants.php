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
    <title>Document</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3pSc_1ExvgVyNfiQzLSAb6se0jVWlTVs&libraries=places"></script>
    <link rel="stylesheet" src="../CSS/restaurants.css">
    <link rel="icon" href="../Lebanese_Flag.ico">
    <link rel="stylesheet" href="../CSS/restaurants.css">
    <script src="https://kit.fontawesome.com/82f797382f.js" crossorigin="anonymous"></script>
    <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<body>
<?php 
    require_once "../navbar/navbar.php";
    loadNavBar();
    ?>

  <script src="../JS/app.js"></script>  
  <script src="../JS/SearchBar.js"></script>  
    
    
        <section class="author-archive">
          <!-- HTML -->
            <div class="container">
            <!--Defining set elements-->
              <input type="radio" id="All" name="categories" value="All" checked>
              <input type="radio" id="Lebanese" name="categories" value="Lebanese">
              <input type="radio" id="French" name="categories" value="French">
              <input type="radio" id="Italian" name="categories" value="Italian">
              <input type="radio" id="Japanese" name="categories" value="Japanese">
              <input type="radio" id="Indian" name="categories" value="Indian">
              <input type="radio" id="Others" name="categories" value="Others">
          <!-- Enabling filtering and how to define them and display them-->
              <ol class="filters">
                <li>
                  <label for="All">All</label>
                </li>
                <li>
                  <label for="Lebanese">Lebanese</label>
                </li>
                <li>
                  <label for="French">French</label>
                </li>
                <li>
                  <label for="Italian">Italian</label>
                </li>
                <li>
                  <label for="Japanese">Japanese</label>
                </li>
                <li>
                  <label for="Indian">Indian</label>
                </li>
                <li>
                  <label for="Others">Others</label>
                </li>
              </ol>
          <!-- DIV CARDS!!-->
              <ol class="posts">
                <li class="post" data-category="Indian">
                  <article>
                    <figure>
                      <a hre  f="" target="_blank">
                        <img src="../Restaurants/Al_Hindi.jpeg" alt="">
    
                      </a>
                      <figcaption>
                        <ol class="post-categories">
                          <li>
                            <a href="">Indian</a>
                          </li>
                         
                        </ol>
                        <a href="https://www.beirut.com/l/490"target="_blank"><h2 class="post-title">Al Hindi
                        
                          
    
                        </h2>
                        </a>
                        <div id="reviews"></div>

                        
                      </figcaption>
                    </figure>
                  </article>
               
                </li>
                <li class="post" data-category="Lebanese">
                  <!--1024x740!-->
                   <article>
                     <figure>
                       <a hre  f="" target="_blank">
                         <img src="../Restaurants/Mandaloun-Batroun.PNG" alt="">
                       </a>
                       <figcaption>
                         <ol class="post-categories">
                           <li>
                             <a href="">Lebanese</a>
                           </li>
                          
                         </ol>
                         <h2 class="post-title">
                           <a href="https://tasteandflavors.com/bahsa-by-al-mandaloun-group/" target="_blank">Al Mandaloun-Byblos
                           </a>
                         </h2>
                         <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star"></span>
                        
                       </figcaption>
                     </figure>
                   </article>
                </li>
                <li class="post" data-category="Italian">
                  <article>
                    <figure>
                      <a hre  f="" target="_blank">
                        <img src="../Restaurants/AT.jpg" alt="">
    
                      </a>
                      <figcaption>
                        <ol class="post-categories">
                          <li>
                            <a href="https://appetitotrattoria.com/">Italian</a>
                          </li>
                         
                        </ol>
                        <h2 class="post-title">Appetito Trattoria
                          </a>
                        </h2>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        
                      </figcaption>
                    </figure>
                  </article>
                </li>
                <li class="post" data-category="Lebanese">
                  <article>
                    <figure>
                      <a hre  f="" target="_blank">
                        <img src="../Restaurants/Babel.jpg" alt="">
    
                      </a>
                      <figcaption>
                        <ol class="post-categories">
                          <li>
                            <a href="">Lebanese</a>
                          </li>
                         
                        </ol>
                        <a href="https://www.babelrestaurant.com/" target="_blank"><h2 class="post-title">Babel
                          </a>
                        </h2>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        
                      </figcaption>
                    </figure>
                  </article>
                </li>
                <li class="post" data-category="Others">
                  <!--1024x740!-->
                  <article>
                    <figure>
                      <a hre  f="https://www.instagram.com/escobar.lb/?hl=en" target="_blank">
                        <img src="../Restaurants/esco-bar.jpg" alt="">
    
                      </a>
                      <figcaption>
                        <ol class="post-categories">
                          <li>
                            <a href="https://www.instagram.com/escobar.lb/?hl=en">Others</a>
                          </li>
                         
                        </ol>
                        <h2 class="post-title">Escobar Coctel Y Cocina
                          </a>
                        </h2>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        
                      </figcaption>
                    </figure>
                  </article>
                </li>
                <li class="post" data-category="Others">
                  <!--1024x740!-->
                   <article>
                     <figure>
                       <a hre  f="" target="_blank">
                         <img src="../Restaurants/Village.jpg" alt="">
                       </a>
                       <figcaption>
                         <ol class="post-categories">
                           <li>
                             <a href="">Others</a>
                           </li>
                          
                         </ol>
                         <h2 class="post-title">
                           <a href="https://www.instagram.com/thevillagedbayeh/?hl=en" target="_blank">The village
                           </a>
                         </h2>
                         <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star"></span>
                        
                       </figcaption>
                     </figure>
                   </article>
                 </li>
                 <li class="post" data-category="Others">
                  <!--1024x740!-->
                   <article>
                     <figure>
                       <a hre  f="" target="_blank">
                         <img src="../Restaurants/Little_china.jpg" alt="">
                       </a>
                       <figcaption>
                         <ol class="post-categories">
                           <li>
                             <a href="">Others</a>
                           </li>
                          
                         </ol>
                         <h2 class="post-title">
                           <a href="https://www.instagram.com/littlechinaofficial/?hl=en" target="_blank">Little China
                           </a>
                         </h2>
                         <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        
                       </figcaption>
                     </figure>
                   </article>
                 </li>
               
                <li class="post" data-category="Lebanese">
                  <article>
                    <figure>
                      <a hre  f="" target="_blank">
                        <img src="../Restaurants/Leilas.jpg" alt="">
                      </a>
                      <figcaption>
                        <ol class="post-categories">
                          <li>
                            <a href="">Lebanese</a>
                          </li>
                        </ol>
                        <h2 class="post-title">
                          <a href="https://www.instagram.com/leilaminlebnen/?hl=en" target="_blank">Leila
                          </a>
                        </h2>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-half-empty checked"></span>
                        
                      </figcaption>
                    </figure>
                  </article>
                </li>
                
                <li class="post" data-category="Japanese">
                  <!--1024x740!-->
                   <article>
                     <figure>
                       <a hre  f="https://www.instagram.com/thevillagedbayeh/?hl=en" target="_blank">
                         <img src="../Restaurants/Osaka.jpg" alt="">
                       </a>
                       <figcaption>
                         <ol class="post-categories">
                           <li>
                             <a href="">Japanese</a>
                           </li>
                          
                         </ol>
                         <h2 class="post-title">
                           <a href="https://www.instagram.com/nasmabeyrouth/?hl=en" target="_blank">Osaka Sushi Lounge
                           </a>
                         </h2>
                         <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-half-empty checked"></span>
                        
                       </figcaption>
                     </figure>
                   </article>
                 </li>
                 
                <li class="post" data-category="Others">
                  <!--1024x740!-->
                   <article>
                     <figure>
                       <a hre  f="https://www.roadsterdiner.com/" target="_blank">
                         <img src="../Restaurants/Roadsters.jpg" alt="">
                       </a>
                       <figcaption>
                         <ol class="post-categories">
                           <li>
                             <a href="">Others</a>
                           </li>
                          
                         </ol>
                         <h2 class="post-title">
                           <a href="https://www.roadsterdiner.com/" target="_blank">Roadsters
                           </a>
                         </h2>
                         <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-half-empty checked"></span>
                       </figcaption>
                     </figure>
                   </article>
                </li>
    
              </ol>
            </div>
            <br>
          <br>
          <br>
          <br>
          <br>
          <br>
                        
            <script>
             
            </script>
              
          </section>
</body>
</html>