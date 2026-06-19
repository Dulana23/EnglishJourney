<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grammar | EnglishJourney</title>

    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="grammer.css">
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
                <h2>Grammar Section</h2>
                <h3>Let’s learn Grammar</h3>
           </header>
                
                <section id="section1" class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-4 mt-5">
                    
                    <a href="PresentTense.php" class="flex-md-fill">
                        <div class="c">
                            <span class="btn-text">Present Tense</span>
                            <img src="Img/Daily1.png" alt="Daily" class="vocab-img">
                        </div>
                    </a>

                    <a href="pastTense.php" class="flex-md-fill">
                        <div class="c">
                            <span class="btn-text">Past Tense</span>
                            <img src="Img/Office.jpg" alt="Office" class="vocab-img">
                        </div>
                    </a>

                    <a href="futuretense.php" class="flex-md-fill">
                        <div class="c">
                            <span class="btn-text">Future Tense</span>
                            <img src="Img/Classroom.jpg" alt="Classroom" class="vocab-img">
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