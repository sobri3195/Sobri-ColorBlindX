function checkAnswer(selectedNumber) {
    const correctNumber = 12;
    const resultElement = document.getElementById('result');
    if (selectedNumber === correctNumber) {
        resultElement.textContent = 'Correct! You may not have color blindness.';
    } else {
        resultElement.textContent = 'Incorrect. You may have color blindness.';
    }
}

function applySimulation() {
    const simulationType = document.getElementById('color-simulation').value;
    const sampleImage = document.getElementById('sample-image');
    switch (simulationType) {
        case 'deutan':
            sampleImage.style.filter = 'sepia(0.6) hue-rotate(90deg) saturate(0.6)';
            break;
        case 'protan':
            sampleImage.style.filter = 'sepia(0.5) hue-rotate(-30deg) saturate(0.6)';
            break;
        case 'tritan':
            sampleImage.style.filter = 'sepia(0.3) hue-rotate(120deg) saturate(0.5)';
            break;
        default:
            sampleImage.style.filter = 'none';
            break;
    }
}
