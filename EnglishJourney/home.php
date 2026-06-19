<!DOCTYPE html>
<html>
    <head>

    <title>English Journey</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | EnglishJourney</title>
     <link rel="stylesheet" href="bootstrap.css">
     <link rel="stylesheet" href="EJ.css">

    <link rel="icon" href="Img/logo.png">
    </head>

    <body class="bodyH" >
         
           <div class="container-fluid">
               <div class="row">
               <?php
                    include "header.php";
                    include "navbar.php";
                    
                 ?>

                
                 
               <div class="col-12 " id="basicSearchResult">
                 <div class="row">
                 
                          <!-- Carousel -->

                           <div class="col-12 d-none d-lg-block mb-3 carousel mt-5">
                        <div class="row">

                            <div id="carouselExampleIndicators" class="offset-2 col-8 carousel slide" data-bs-ride="true">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <video id="video1" class="d-block w-100" controls>
                                                   <source src="Img/rendered_video.mp4" type="video/mp4">

                                        </video>

                                       
                                        <div class="carousel-caption d-none d-md-block poster-caption">
                                            
                                            
                                            
                                        </div>
                                        
                                    </div>
                                    <div class="carousel-item">
                                        <img src="Img/carousel-img1.png" class="d-block img-thumbnail poster-img-1" />
                                        <div class="carousel-caption d-none d-md-block poster-caption-1">
                                            
                                           
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="Img/carousel-img2.jpg" class="d-block img-thumbnail poster-img-1" />
                                        <div class="carousel-caption d-none d-md-block poster-caption-1">
                                            
                                           
                                        </div>
                                    </div>
                                    
                                    <div class="carousel-item">
                                        <img src="Img/carousel-img3.jpg" class="d-block img-thumbnail poster-img-1" />
                                        <div class="carousel-caption d-none d-md-block poster-caption-1">
                                           
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="Img/carousel-img4.png" class="d-block img-thumbnail poster-img-1" />
                                        <div class="carousel-caption d-none d-md-block poster-caption-1">
                                          
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="Img/carousel-img7.png" class="d-block img-thumbnail poster-img-1" />
                                        <div class="carousel-caption d-none d-md-block poster-caption-1">
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="Img/carousel-img6.png" class="d-block img-thumbnail poster-img-1" />
                                        <div class="carousel-caption d-none d-md-block poster-caption-1">
                                        </div>
                                    </div>
                                    
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                        </div>
                    </div>
                    </div>
                    <!-- Carousel -->
                 <br><br>
                   
                 
                 <!--card-->
                 
                    <div class="cardlist" >
                        <div class="innerCards">
                        <div class="card" style="width: 18rem;">
                           <img src="Img/grammer.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                  <h5 class="card-title">Grammar</h5>
                                       <p class="card-text">If you want to learn English Grammar !!! Click Here !!!.</p>
                                          <a href="Grammer.php" class="btn btn-primary">Go to Grammar</a>
                                </div>
                        </div>
                        
                       <div class="card" style="width: 18rem;">
                             <img src="Img/vocabulary.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                    <h5 class="card-title">Vocabluary</h5>
                                        <p class="card-text">If you want to learn new words !!! Click Here !!!.</p>
                                            <a href="vocab.php" class="btn btn-primary">Go to Vocabluary<a>
                                </div>
                         </div>
                         <div class="card" style="width: 18rem;">
                             <img src="Img/nouns.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                    <h5 class="card-title">Nouns</h5>
                                        <p class="card-text">If you want to learn nouns !!! Click Here !!!.</p>
                                            <a href="wordClass.php" class="btn btn-primary">Go to wordClass</a>
                                </div>
                         </div>
                         <div class="card" style="width: 18rem;">
                             <img src="Img/verbs.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                    <h5 class="card-title">Verbs</h5>
                                        <p class="card-text">If you want to learn verbs !!! Click Here !!!.</p>
                                            <a href="wordClass.php" class="btn btn-primary">Go to WordClass</a>
                                </div>
                         </div>
                         
                             <div class="card" style="width: 18rem;">
                            
                            <img src="Img/Game.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Game & Quizes</h5>
                                    <p class="card-text">Learn English Grammar with fun Games & Quizes.</p>
                                        <a href="game.php" class="btn btn-primary">Go to Game section</a>
                            
                            
                        
                             </div>

                         </div>
                         
                           
                         <div class="card" style="width: 18rem;">
                           <img src="Img/grammer.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                  <h5 class="card-title">Grammar</h5>
                                       <p class="card-text">If you want to learn English Grammar !!! Click Here !!!.</p>
                                          <a href="Grammer.php" class="btn btn-primary">Go to Grammar</a>
                                </div>
                        </div>
                        
                       <div class="card" style="width: 18rem;">
                             <img src="Img/vocabulary.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                    <h5 class="card-title">Vocabluary</h5>
                                        <p class="card-text">If you want to learn new words !!! Click Here</p>
                                            <a href="vocab.php" class="btn btn-primary">Go to Vocabluary</a>
                                </div>
                         </div>
                         <div class="card" style="width: 18rem;">
                             <img src="Img/nouns.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                        <p class="card-text">If you want to learn nouns !!! Click Here !!!.</p>
                                            <a href="wordClass.php" class="btn btn-primary">Go to wordClass</a>
                                </div>
                         </div>
                         <div class="card" style="width: 18rem;">
                             <img src="Img/verbs.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                        <p class="card-text">If you want to learn verbs !!! Click Here !!!.</p>
                                            <a href="wordClass.php" class="btn btn-primary">Go to wordClass</a>
                                </div>
                         </div>
                         <div class="card" style="width: 18rem;">
                             <img src="Img/pronouns.jpg" class="card-img-top" alt="...">
                              <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Learn English Grammar with fun Games & Quizes.</p>
                                            <a href="game.php" class="btn btn-primary">Go to Game Section</a>
                                </div>
                         </div>
                        </div>
                        
                      
                 </div>
                  
                 
            </div>
            <br><br>
             
        <br>
        <br>    
        

                      <?php
                      include "footer.php";
   
                          ?>
  



               </div>

           </div>
           

         
       
      <script src="bootstrap.bundle.js"></script>
      <script src="script.js"></script>
    </body>

</html>