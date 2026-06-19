<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocabulary | EnglishJourney</title>

    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="Grammer.css">
    <link rel="icon" href="Img/logo.png">

    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
           <?php
            include "header.php";
            include "navbar.php";
            ?>

        <div class="row justify-content-center px-3">
            <div class="col-12 col-xl-5">

                  <header class=" head text-center mb-5 mt-3">
                     <h2>Vocabulary Section</h2>
                     <h3>Let’s learn some new words with pronounciation</h3>
                  </header>

                <section id="section1" class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-4 mt-5">
                    
                    <a href="daily.php" class="flex-md-fill">
                        <div class="c">
                            <span class="btn-text">Daily Routine</span>
                            <img src="Img/Daily1.png" alt="Daily" class="vocab-img">
                        </div>
                    </a>

                    <a href="officeuse.php" class="flex-md-fill">
                        <div class="c">
                            <span class="btn-text">In the Office</span>
                            <img src="Img/Office.jpg" alt="Office" class="vocab-img">
                        </div>
                    </a>

                    <a href="classroom.php" class="flex-md-fill">
                        <div class="c">
                            <span class="btn-text">In Classroom</span>
                            <img src="Img/Classroom.jpg" alt="Classroom" class="vocab-img">
                        </div>
                    </a>

                    <a href="homeuse.php" class="flex-md-fill">
                        <div class="c">
                            <span class="btn-text">At Home</span>
                            <img src="Img/Home.jpg" alt="Home" class="vocab-img">
                        </div>
                    </a>

                    <a href="road.php" class="flex-md-fill">
                       <div class="c">
                            <span class="btn-text">On the Road</span>
                            <img src="Img/ABC.jpg" alt="Home" class="vocab-img">
                        </div>
                    </a>

                </section>

                <section id="section2" class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-4 mt-5">
                   
                    
                </section>

            </div>
        </div>

       
                <?php include "footer.php"; ?>
            
        </div>
 </div>

    <script src="bootstrap.bundle.js"></script>
</body>
</html>