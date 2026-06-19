<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game | Simple Past Tense | EnglishJourney</title>

    <link rel="icon" href="Img/logo.png">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="quiz.css" rel="stylesheet">

</head>
<body>
  

<div class="container-fluid">
     
    <div class="quiz-container">
        <div class="sticky-top-custom">
            <h2 class="text-center text-white  mb-3">Simple Past Tense Quiz</h2>
            <div class="progress">
                <div id="progressBar" class="progress-bar progress-bar-striped progress-bar-animated bg-success" 
                     role="progressbar" style="width: 0%">0%</div>
            </div>
            <p class="text-center text-white small">Tap the correct word to fill the blank!</p>
        </div>

        <div id="quiz-content" class="mt-4">
            <div class="question-card" id="q1">
                <p class="question-text">[Q1] I <span class="quiz-slot" data-ans="went">_____</span> to school every day.</p>
                <div class="options-grid">
                    <div class="btn-option" onclick="check(this, 'go', 'q1')">go</div>
                    <div class="btn-option" onclick="check(this, 'went', 'q1')">went</div>
                    <div class="btn-option" onclick="check(this, 'gone', 'q1')">gone</div>
                </div>
            </div>

            <div class="question-card" id="q2">
                <p class="question-text">[Q2] We <span class="quiz-slot" data-ans="studied">_____</span> English in the morning.</p>
                <div class="options-grid">
                    <div class="btn-option" onclick="check(this, 'study', 'q2')">study</div>
                    <div class="btn-option" onclick="check(this, 'studied', 'q2')">studied</div>
                    <div class="btn-option" onclick="check(this, 'studying', 'q2')">studying</div>
                </div>
            </div>

            <div class="question-card" id="q3">
                <p class="question-text">[Q3] I <span class="quiz-slot" data-ans="played">_____</span> football after school.</p>
                <div class="options-grid">
                    <div class="btn-option" onclick="check(this, 'play', 'q3')">play</div>
                    <div class="btn-option" onclick="check(this, 'plays', 'q3')">plays</div>
                    <div class="btn-option" onclick="check(this, 'played', 'q3')">played</div>
                </div>
            </div>

            <div class="question-card" id="q4">
                <p class="question-text">[Q4] They <span class="quiz-slot" data-ans="watched">_____</span> TV in the evening.</p>
                <div class="options-grid">
                    <div class="btn-option" onclick="check(this, 'watching', 'q4')">watching</div>
                    <div class="btn-option" onclick="check(this, 'watches', 'q4')">watches</div>
                    <div class="btn-option" onclick="check(this, 'watched', 'q4')">watched</div>
                </div>
            </div>

            <div class="question-card" id="q5">
                <p class="question-text">[Q5] My mother <span class="quiz-slot" data-ans="cooked">_____</span> dinner at night.</p>
                <div class="options-grid">
                    <div class="btn-option" onclick="check(this, 'cook', 'q5')">cook</div>
                    <div class="btn-option" onclick="check(this, 'cooks', 'q5')">cooks</div>
                    <div class="btn-option" onclick="check(this, 'cooked', 'q5')">cooked</div>
                </div>
            </div>

            <div class="question-card" id="q6">
                <p class="question-text">[Q6] I <span class="quiz-slot" data-ans="got">_____</span> up early every day.</p>
                <div class="options-grid">
                    <div class="btn-option" onclick="check(this, 'gets', 'q6')">gets</div>
                    <div class="btn-option" onclick="check(this, 'got', 'q6')">got</div>
                    <div class="btn-option" onclick="check(this, 'getting', 'q6')">getting</div>
                </div>
            </div>

            <div class="question-card" id="q7">
                <p class="question-text">[Q7] She <span class="quiz-slot" data-ans="brushed">_____</span> her teeth every morning.</p>
                <div class="options-grid">
                    <div class="btn-option" onclick="check(this, 'brushes', 'q7')">brushes</div>
                    <div class="btn-option" onclick="check(this, 'brush', 'q7')">brush</div>
                    <div class="btn-option" onclick="check(this, 'brushed', 'q7')">brushed</div>
                </div>
            </div>

            <div class="question-card" id="q8">
                <p class="question-text">[Q8] We <span class="quiz-slot" data-ans="listened">_____</span> to music on weekends.</p>
                <div class="options-grid">
                    <div class="btn-option" onclick="check(this, 'listens', 'q8')">listens</div>
                    <div class="btn-option" onclick="check(this, 'listening', 'q8')">listening</div>
                    <div class="btn-option" onclick="check(this, 'listened', 'q8')">listened</div>
                </div>
            </div>

            <div class="question-card" id="q9">
                <p class="question-text">[Q9] The sun <span class="quiz-slot" data-ans="rose">_____</span> in the east.</p>
                <div class="options-grid">
                    <div class="btn-option" onclick="check(this, 'rises', 'q9')">rises</div>
                    <div class="btn-option" onclick="check(this, 'rise', 'q9')">rise</div>
                    <div class="btn-option" onclick="check(this, 'rose', 'q9')">rose</div>
                </div>
            </div>

            <div class="question-card" id="q10">
                <p class="question-text">[Q10] He <span class="quiz-slot" data-ans="did">_____</span> his homework after school.</p>
                <div class="options-grid">
                    <div class="btn-option" onclick="check(this, 'does', 'q10')">does</div>
                    <div class="btn-option" onclick="check(this, 'do', 'q10')">do</div>
                    <div class="btn-option" onclick="check(this, 'did', 'q10')">did</div>
                </div>
            </div>

            <div class="question-card" id="q11">
                <p class="question-text">[Q11] My father <span class="quiz-slot" data-ans="went">_____</span> to work by bus.</p>
                <div class="options-grid">
                    <div class="btn-option" onclick="check(this, 'goes', 'q11')">goes</div>
                    <div class="btn-option" onclick="check(this, 'went', 'q11')">went</div>
                    <div class="btn-option" onclick="check(this, 'gone', 'q11')">gone</div>
                </div>
            </div>

            <div class="question-card" id="q12">
                <p class="question-text">[Q12] I <span class="quiz-slot" data-ans="ate">_____</span> breakfast in the morning.</p>
                <div class="options-grid">
                    <div class="btn-option" onclick="check(this, 'eats', 'q12')">eats</div>
                    <div class="btn-option" onclick="check(this, 'eat', 'q12')">eat</div>
                    <div class="btn-option" onclick="check(this, 'ate', 'q12')">ate</div>
                </div>
            </div>
        </div>
    </div>
</div>

<audio id="correctSound" src="Img/true.mp3"></audio>
<audio id="wrongSound" src="Img/wrongAnswer.mp3"></audio>
<audio id="victorySound" src="Img/success.mp3"></audio>

<script src="exp.js"></script>

</body>
</html>