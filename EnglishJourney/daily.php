<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Routing | Vocabluary | EnglishJounery </title>

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
            <h2>Daily Routine</h2>
            <h3>Let’s think about your day</h3>
        </header>

        <div class="row justify-content-center mb-5">
            <div class="con col-md-4 bg-light p-4 rounded shadow-sm border">
                <ul class="list-unstyled fs-5">
                    <li> What do you do when you wake up?</li>
                    <li> What do you do before school?</li>
                    <li> What do you do after school?</li>
                </ul>
            </div>
        </div>

        <section class="mb-5 text-center">
            <h3 class="mb-4">Today, we will learn words for <strong>Daily Routine</strong>.</h3>
            <p class="text-muted mb-3">(Click on a word to hear it)</p>
            
            <div class="btn">
                <button  onclick="speakWord('Wake up')">Wake Up</button>
                <button  onclick="speakWord('Get up')">Get Up</button>
                <button  onclick="speakWord('Brush')">Brush</button>
                <button  onclick="speakWord('Wash face')">Wash Face</button>
                <button  onclick="speakWord('Take a bath')">Take a bath</button>
                <button  onclick="speakWord('Get dressed')">Get dressed</button>
                <button  onclick="speakWord('Eat breakfast')">Eat breakfast</button>
                <button  onclick="speakWord('Go to school')">Go to school</button>
                <button  onclick="speakWord('Study')">Study</button>
                <button  onclick="speakWord('Play')">Play</button>
                <button  onclick="speakWord('Do homework')">Do homework</button>
                <button  onclick="speakWord('Go to bed')">Go to bed</button>
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
                    <span class="fs-5"> I <b>wake up</b> at 6 a.m.</span>
                </div>

                <div class="sen2 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b>brush</b> my teeth every morning.</span>
                </div>

                <div class="sen3 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b>go</b> to school by bus.</span>
                </div>

                <div class="sen4 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b>study</b> English.</span>
                </div>

                <div class="sen5 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b>play</b> with my friends.</span>
                </div>

                <div class="sen6 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b>do homework</b> in the evening.</span>
                </div>

                <div class="sen7 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b>go to bed</b> at 10 p.m.</span>
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

   
  
             <script src="bootstrap.bundle.js"></script>

    </body>
</html>