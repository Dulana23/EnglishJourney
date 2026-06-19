<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vocabluary</title>

<link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="classroom.css">
<link rel="icon" href="Img/logo.png">

</head>

<body>

<?php 
        include "header.php";
        include "navbar.php"; 
    ?>

    <div class="container py-4">
        
        <header class=" head text-center mb-5">
            <h2>At Home</h2>
            <h3>Let’s think how you spend the day <strong>at home.</strong> </h3>
        </header>

        <div class="row justify-content-center mb-5">
            <div class="con col-md-4 bg-light p-4 rounded shadow-sm border">
                <ul class="list-unstyled fs-5">
                    <li>  What do you do when at home ?</li>
                    <li> What do you do before comming at home?</li>
                    <li> What do you do after comming at home?</li>
                </ul>
            </div>
        </div>

        <section class="mb-5 text-center">
            <h3 class="mb-4">Today, we will learn words which are used <strong>at home</strong>.</h3>
            <p class="text-muted mb-3">(Click on a word to hear it)</p>
            
            <div class="btn">
                <button  onclick="speakWord('Wake Up')">Wake Up</button>
                <button  onclick="speakWord('Brush Teeth')">Brush Teeth</button>
                <button  onclick="speakWord('Wash Face')">Wash Face</button>
                <button  onclick="speakWord('Eat Breakfast')">Eat Breakfast</button>
                <button  onclick="speakWord('Help Parents')">Help Parents</button>
                <button  onclick="speakWord('Clean Room')">Clean Room</button>
                <button  onclick="speakWord('Do Homework')">Do Homework</button>
                <button  onclick="speakWord('Watch Tv')">Watch Tv</button>
                <button  onclick="speakWord('Play')">Play</button>
                <button  onclick="speakWord('Read Book')">Read Book</button>
                <button  onclick="speakWord('Eat Dinner')">Eat Dinner</button>
                <button  onclick="speakWord('Sleep')">Sleep</button>
            </div>
        </section>

        <div class="row mb-5">
            <div class="col-lg-6 mx-auto text-center border-top pt-4">
                <h3 class="fw-bold">Let's do an activity</h3>
                <div class="alert alert-info">
                    Listen carefully • Repeat each word 2 times • Try to say it without looking
                </div>

                <h3 class="text-center mb-4">Now let’s make some sentences...</h3>
            <p class="text-center text-muted small mb-4">Hover or tap to hear the sentence</p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <div class="list-group shadow-sm">
                
                <div class="sen1 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b>wake up</b> early at home.</span>
                </div>

                <div class="sen2 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b>brush</b> my teeth.</span>
                </div>

                <div class="sen3 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b> wash</b> my dace.</span>
                </div>

                <div class="sen4 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b> eat</b> breakfast with my family.</span>
                </div>

                <div class="sen5 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b> help</b> my parents at home.</span>
                </div>

                <div class="sen6 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b> clean</b> my room.</span>
                </div>

                <div class="sen7 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b> do</b>  my homework.</span>
                </div>

                <div class="sen8 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b> watch</b> TV on the evening.</span>
                </div>

                <div class="sen9 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b> play</b> with my toys.</span>
                </div>

                <div class="sen10 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b> read </b> a book.</span>
                </div>

            </div>
        </div>
    </div>
    
  
          
  
   
            
       
</div>
  
<div class="col-12">
  <?php include "footer.php"; ?>
</div>
    <script>
        function speakText(element) {
            window.speechSynthesis.cancel();
            let text = element.innerText;
            let utterance = new SpeechSynthesisUtterance(text);
            utterance.lang = 'en-US'; 
            utterance.rate = 0.9;     
            window.speechSynthesis.speak(utterance);
        }

        function speakWord(word){
            window.speechSynthesis.cancel(); 
            let speech = new SpeechSynthesisUtterance(word);
            speech.lang = "en-US";
            speech.rate = 0.9;
            window.speechSynthesis.speak(speech);
        }
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap.bundle.js"></script>

</body>
</html>