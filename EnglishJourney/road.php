<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classroom Use | Vocabluary | EnglishJoureny</title>

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
            <h2>On the Road </h2>
            <h3>Let’s think how you spend the day <strong>on the road.</strong> </h3>
        </header>

        <div class="row justify-content-center mb-5">
            <div class="con col-md-4 bg-light p-4 rounded shadow-sm border">
                <ul class="list-unstyled fs-5">
                    <li>  What do you do when you on the road?</li>
                    <li>Lets practice?</li>
                    
                </ul>
            </div>
        </div>

        <section class="mb-5 text-center">
            <h3 class="mb-4">Today, we will learn words which are used <strong>in the Classroom</strong>.</h3>
            <p class="text-muted mb-3">(Click on a word to hear it)</p>
            
            <div class="btn">
                <button onclick="speakWord('Road')">Road</button>
                <button onclick="speakWord('Street')">Street</button>
                <button onclick="speakWord('Lane')">Lane</button>
                <button onclick="speakWord('Highway')">Highway</button>
                <button onclick="speakWord('Bridge')">Bridge</button>
                <button onclick="speakWord('passenger')">Passenger</button>
                <button onclick="speakWord('Pedestrain')">Pedestrain</button>
                <button onclick="speakWord('Traffic light')">Traffic light</button>
                <button onclick="speakWord('Motorcycle')">Motercycle</button>
                <button onclick="speakWord('traffic')">Traffic</button>
                <button onclick="speakWord('Lane')">Lane</button>
                <button onclick="speakWord('Zebra crossing')">Zebra Crossing</button>
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
                    <span class="fs-5">This is a main <b> &nbsp; road</b></span>
                </div>

                <div class="sen2 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> It is a second cross<b> street</b></span>
                </div>

                <div class="sen3 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5">please don't use this<b> lane</span>
                </div>

                <div class="sen4 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> we went on <b> highway</b></span>
                </div>

                <div class="sen5 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5">where is the  <b> bridge </b></span>
                </div>

                <div class="sen6 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"><b>Passengers</b> are waiting for a bus</span>
                </div>

                <div class="sen7 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5">please use the <b>pedestrain</b> to cross the road.</span>
                </div>

                <div class="sen8 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b>raise </b> my hand.</span>
                </div>

                <div class="sen9 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b>open</b> my book.</span>
                </div>

                <div class="sen10 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b>use</b> a pen to write.</span>
                </div>

            </div>
        </div>
    </div>
    
  
          
  
   
            
       
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

                     <?php
                    
                    include "footer.php";
             ?>

        
  
          <script src="bootstrap.bundle.js"></script>
    </body>
</html>