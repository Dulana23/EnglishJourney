<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office Use | Vocabluary | EnglishJounery</title>

        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="classroom.css">

        <link rel="icon" href="Img/logo.png">
        
    </head>
    <body>
    <?php
                 include "header.php";
                 include "navbar.php";
            ?>
            <br>
        
            <div class="container py-4">
        
        <header class=" head text-center mb-5">
            <h2>Office Usage</h2>
            <h3>Let’s think how you spend the day in the office</h3>
        </header>

        <div class="row justify-content-center mb-5">
            <div class="con col-md-4 bg-light p-4 rounded shadow-sm border">
                <ul class="list-unstyled fs-5">
                    <li>  What do you do when in the office?</li>
                    <li> What do you do before comming to the office?</li>
                    <li> What do you do after comming to the office?</li>
                </ul>
            </div>
        </div>

        <section class="mb-5 text-center">
            <h3 class="mb-4">Today, we will learn words which are used <strong>in the Office</strong>.</h3>
            <p class="text-muted mb-3">(Click on a word to hear it)</p>
            
            <div class="btn">
                <button  onclick="speakWord('Pack Bag')">Pack Bag</button>
                <button  onclick="speakWord('Wear Shoes')">Wear Shoes</button>
                <button  onclick="speakWord('Travel')">Travel</button>
                <button  onclick="speakWord('Meet')">Meet</button>
                <button  onclick="speakWord('Help')">Help</button>
                <button  onclick="speakWord('Use computer')">Use computer</button>
                <button  onclick="speakWord('Write report')">Write report</button>
                <button  onclick="speakWord('focus')">focus</button>
                <button  onclick="speakWord('Begin Task')">Begin Task</button>
                <button  onclick="speakWord('Talk to Staff')">Talk to Staff</button>
                <button  onclick="speakWord('Check Mails')">Check Mails</button>
                <button  onclick="speakWord('Work Quietly')">Work Quietly</button>
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
                    <span class="fs-5"> I <b>pack my bag</b> in the morning.</span>
                </div>

                <div class="sen2 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b>wear shoes</b> before going to the office.</span>
                </div>

                <div class="sen3 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b>travel</b> to the office by bus.</span>
                </div>

                <div class="sen4 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b>meet</b> my manager in the office.</span>
                </div>

                <div class="sen5 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b>help</b> to my coworkers..</span>
                </div>

                <div class="sen6 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b> use the computer</b> for my work.</span>
                </div>

                <div class="sen7 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b>focus</b> on my tasks.</span>
                </div>

                <div class="sen8 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b>begin</b> my task on time.</span>
                </div>

                <div class="sen9 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b>focus</b> to the staff poiteky..</span>
                </div>

                <div class="sen10 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b>check my mails</b> in the morning.</span>
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
                let speech = new SpeechSynthesisUtterance(word);
                speech.lang="en-US";
                speech.rate=0.9;
                speechSynthesis.speak(speech);
            }
        </script>

  
    <script src="bootstrap.bundle.js"></script>
    </body>
</html>