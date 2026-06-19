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
            <h2>In Classroom </h2>
            <h3>Let’s think how you spend the day <strong>in the classroom .</strong> </h3>
        </header>

        <div class="row justify-content-center mb-5">
            <div class="con col-md-4 bg-light p-4 rounded shadow-sm border">
                <ul class="list-unstyled fs-5">
                    <li>  What do you do when in the Classroom ?</li>
                    <li> What do you do before comming to the classroom?</li>
                    <li> What do you do after comming to the classroom?</li>
                </ul>
            </div>
        </div>

        <section class="mb-5 text-center">
            <h3 class="mb-4">Today, we will learn words which are used <strong>in the Classroom</strong>.</h3>
            <p class="text-muted mb-3">(Click on a word to hear it)</p>
            
            <div class="btn">
                <button  onclick="speakWord('Enter')">Enter</button>
                <button  onclick="speakWord('Sit')">Sit</button>
                <button  onclick="speakWord('Listen')">Listen</button>
                <button  onclick="speakWord('Read')">Read</button>
                <button  onclick="speakWord('Write')">Write</button>
                <button  onclick="speakWord('Ask')">Ask</button>
                <button  onclick="speakWord('Answer')">Answer</button>
                <button  onclick="speakWord('Raise hand')">Raise hand</button>
                <button  onclick="speakWord('Open Book')">Open Book</button>
                <button  onclick="speakWord('Use Pen')">Use Pen</button>
                <button  onclick="speakWord('Learn')">Learn</button>
                <button  onclick="speakWord('follow rules')">follow rules</button>
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
                    <span class="fs-5"> I <b>enter</b> the classroom quitely.</span>
                </div>

                <div class="sen2 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b> sit</b> on my chair.</span>
                </div>

                <div class="sen3 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b> read</b> my book.</span>
                </div>

                <div class="sen4 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b> write</b> in my notebook.</span>
                </div>

                <div class="sen5 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b> ask</b> a question..</span>
                </div>

                <div class="sen6 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b> answer</b> the teacher.</span>
                </div>

                <div class="sen7 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b> raise</b> my hand.</span>
                </div>

                <div class="sen8 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b> open</b> my book.</span>
                </div>

                <div class="sen9 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b> use</b> a pen to write</span>
                </div>

                <div class="sen10 col-11 col-md-auto" 
                     onmouseover="speakText(this)" style="cursor: pointer;">
                    <span class="fs-5"> I <b> follow </b> classwoom rules.</span>
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