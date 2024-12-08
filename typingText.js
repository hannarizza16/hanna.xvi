const texts = ["Fresh Graduate","Aspirant Web Developer", "Aspirant Mobile App Developer"];
let currentTextIndex = 0;
let currentCharIndex = 0;
const typingSpeed = 100;
const erasingSpeed = 50;
const delayedBetweenTexts = 2000;

function typeText() {
    const typingText = document.getElementById("typing-text");
    const currentText = texts[currentTextIndex];

    if (currentCharIndex < currentText.length){
        typingText.textContent += currentText.charAt(currentCharIndex);
        currentCharIndex++;
        setTimeout(typeText, typingSpeed);
    } else {
        setTimeout(eraseText, delayedBetweenTexts);
    }
}
function eraseText(){
    const typingText = document.getElementById("typing-text");
    if (currentCharIndex > 0){
        typingText.textContent = typingText.textContent.slice(0, currentCharIndex - 1);
        currentCharIndex--;
        setTimeout(eraseText, erasingSpeed);
    } else {
        currentTextIndex = (currentTextIndex + 1) % texts.length;
        currentCharIndex = 0;  // Reset index for the next text
        setTimeout(typeText, typingSpeed);

        }
    }

    document.addEventListener("DOMContentLoaded",() => {
        setTimeout(typeText,delayedBetweenTexts);

    });