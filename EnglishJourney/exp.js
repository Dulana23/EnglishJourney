let solved = new Set();
    const total = 12;

    function check(btn, choice, qId) {
        if (solved.has(qId)) return; 

        const card = document.getElementById(qId);
        const slot = card.querySelector('.quiz-slot');
        const correctAns = slot.getAttribute('data-ans');
        
        const soundC = document.getElementById('correctSound');
        const soundW = document.getElementById('wrongSound');

        if (choice === correctAns) {
            // Correct Answer
            slot.textContent = choice;
            slot.classList.add('correct-text');
            card.classList.remove('card-wrong');
            card.classList.add('card-correct');
            
            soundC.currentTime = 0;
            soundC.play();
            
            solved.add(qId);
            updateProgress();
        } else {
            // Wrong Answer
            card.classList.add('card-wrong');
            soundW.currentTime = 0;
            soundW.play();
            
            // Remove red effect after a moment
            setTimeout(() => {
                card.classList.remove('card-wrong');
            }, 500);
        }
    }

    function updateProgress() {
        const percent = Math.round((solved.size / total) * 100);
        const bar = document.getElementById('progressBar');
        
        bar.style.width = percent + "%";
        bar.textContent = percent + "%";
        
        if (percent === 100) {
            const vic = document.getElementById('victorySound');
            vic.play();
            bar.innerHTML = "🎉 COMPLETE! EXCELLENT WORK! 🎉";
            bar.classList.add('bg-warning'); // Golden color finish
        }
    }
