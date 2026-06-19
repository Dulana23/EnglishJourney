<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="Ej.css" />
  
</head>

<body>

   
    

 <nav class="navbar  fixed-top">
           
       
           <div class="container-fluid">
                     <a class="navbar-brand" href="#"></a>
                      <button class="navbar-toggler bg-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                      </button>
              

                   

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background-color: #E3E5E4;">
                    <div class="offcanvas-header">
                        <h3 class="offcanvas-title" id="offcanvasNavbarLabel">EnglishJourney</h3>
                        <div><img src="Img/logo.png" alt="logo" class="logo" style="width: 100px; height: 100px;"></div>
                          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                  <div class="offcanvas-body">
                      <ul class="navbar-nav text-center justify-content-end flex-grow-1 pe-3">
                         <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: red; font-weight: bold; border-radius: 10px;">Grammar</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="Grammer.php">Age 10 - 12</a></li>
                                <li><a class="dropdown-item" href="#">Age 12 - 14</a></li>
                                <li><a class="dropdown-item" href="#">Age 14 - 16</a></li>
                                <li><a class="dropdown-item" href="#">Age 16 - 18</a></li>
                              </ul>
                          </li>
                               <br/>
                           <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #0cc02c; font-weight: bold; border-radius: 10px;"> Vocabulary </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="vocab.php">Age 10 - 12</a></li>
                                <li><a class="dropdown-item" href="#">Age 12 - 14</a></li>
                                <li><a class="dropdown-item" href="#">Age 14 - 16</a></li>
                                <li><a class="dropdown-item" href="#">Age 16 - 18</a></li>
                              </ul>
                            </li>
                               <br/>
                               <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #14a3f2; font-weight: bold; border-radius: 10px;"> Word Class </a>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="wordClass.php">Age 10 - 12</a></li>
                                      <li><a class="dropdown-item" href="#">Above Age 12</a></li>
                                  
                                    </ul>
                                </li>
                               <br/>
                               <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #f49a41; font-weight: bold; border-radius: 10px;"> Games & Quizes </a>
                                   <ul class="dropdown-menu">
                                     <li><a class="dropdown-item" href="game.php">Age 10 - 12</a></li>
                                     <li><a class="dropdown-item" href="#">Age 12 - 14</a></li>
                                     <li><a class="dropdown-item" href="#">Age 14 - 16</a></li>
                                     <li><a class="dropdown-item" href="#">Age 16 - 18</a></li>
                                   </ul>
                                </li>
                               <br/>
                              <li class="nav-item dropdown">
                              
                             <a class="nav-link dropdown-toggle" role="button" href="https://translate.google.com/?sl=en&tl=si&op=translate" target="_blank" class="google-translate-btn" style="background-color: #ffdf00; font-weight: bold; border-radius: 10px;">Go to Google Translator</a>
                                  
                              </li>
                               <br>
                          
                               <br/>
                          
                      </ul>
          
          
                             <br/>
                             
                       

          
          <br/>
          
                     
            
           

           

                <span class="text-lg-start text-success"><b>Hi UserName</b></span> |
                <span class="text-lg-start fw-bold text-danger signout" onclick="signout();">Signout</span> |

                
                <a href="index.php" class="text-decoration-none fw-bold">Sign In or Register</a> 
                

            
            
            
                
          
                  </div>
             </div>
           </div>
          </nav>

          
    
    <script src="script.js"></script>
</body>
    



</html>