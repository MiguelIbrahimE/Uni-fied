<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurants - UULebanon </title>
    <link rel="icon" href="../logo-no-background.png">
    <link rel="stylesheet" href="../CSS/restaurants.css">
    <script src="https://kit.fontawesome.com/82f797382f.js" crossorigin="anonymous"></script>
    
    <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body>
    <!-- Header or navigation bar for the website. -->
   <!-- Start of HTML and NavBar-->
   <header class="header" id="header">
    <nav class="navbar container">
       <a href="../index.html" class="brand"><img src="../logo-no-background.png"style="width:46px"></a>
       <div class="burger" id="burger">
          <span class="burger-line"></span>
          <span class="burger-line"></span>
          <span class="burger-line"></span>
       </div>
       <span class="overlay"></span>
       <div class="menu" id="menu">
          <ul class="menu-inner">
             <li class="menu-item"><a class="menu-link" href="../index.php">Home</a></li>
             <li class="menu-item"><a class="menu-link" href="../Tourism.php">Tourism</a></li>
             <li class="menu-item"><a class="menu-link" href="./Lebanon.php">Map of Lebanon</a></li>
             <li class="menu-item"><a class="menu-link" href="./Transportation.php">Transportation</a></li>
             <li class="menu-item"><a class="menu-link" href="./SignUp.php">Sign Up/ Log In</a></li>
          </ul>
       </div>
       <span><i class="bx bx-search search-toggle"></i></span>
       <div class="search-block">
          <form class="search-form">
             <span><i class="bx bx-arrow-back search-cancel"></i></span>
             <input type="search" name="search" class="search-input" placeholder="Search here...">
          </form>
          <div id="search-results"></div>
       </div>
       
    </nav>
 </header>


  <script src="../JS/SearchBar.js"></script>
<br>
<br><br>
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
                       <a href="https://tasteandflavors.com/bahsa-by-al-mandaloun-group/" target="_blank">Al-Mandaloun
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
                    <span class="fa fa-star-half checked"></span>
                    
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
                    <span class="fa fa-star-half checked"></span>
                    
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
                    <span class="fa fa-star-half checked"></span>
                   </figcaption>
                 </figure>
               </article>
            </li>

          </ol>
        </div>
        <br>
      <br>
      <br>
      
                    
        <script>
          function wait(){
            alert("You need to be logged in to review");
          }
        </script>
          
      </section>
      
</body>

</html>
<!--END OF PAGE AND HTML-->