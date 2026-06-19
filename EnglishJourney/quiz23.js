let draggedText = "";

document.querySelectorAll(".item").forEach(item => {
  item.addEventListener("dragstart", function(e) {
    draggedText = this.textContent.trim();
    e.dataTransfer.setData("text/plain", draggedText);
    e.dataTransfer.effectAllowed = "move";
  });
});

document.querySelectorAll(".quiz1").forEach(blank => {

  blank.addEventListener("dragover", function(e) {
    e.preventDefault(); // allow drop
  });

  blank.addEventListener("drop", function(e) {
    e.preventDefault();

    const correctAnswer = this.dataset.answer;
    const questionBox = this.closest(".a, .b");
    const resultBox = questionBox.querySelector(".result");

    this.textContent = draggedText;

    if (draggedText === correctAnswer) {
      resultBox.textContent = "✅ Correct";
      resultBox.style.color = "green";
    } else {
      resultBox.textContent = "❌ Wrong, try again";
      resultBox.style.color = "red";
      this.textContent = "_____";
    }
  });
});
