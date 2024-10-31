<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobri ColorBlindX - Color Blindness Educational Tool</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Sobri ColorBlindX</h1>
        <p>Tool to Educate and Test for Color Blindness</p>
    </header>

    <main>
        <section id="test-section">
            <h2>Color Blindness Test</h2>
            <p>Select the number you see in the image below:</p>
            <img id="test-image" src="https://example.com/color-test-image.jpg" alt="Color blindness test image">
            <div id="options">
                <button onclick="checkAnswer(5)">5</button>
                <button onclick="checkAnswer(8)">8</button>
                <button onclick="checkAnswer(12)">12</button>
                <button onclick="checkAnswer(0)">No Number</button>
            </div>
            <p id="result"></p>
        </section>

        <section id="simulation-section">
            <h2>Color Blindness Simulation</h2>
            <label for="color-simulation">Choose a type of color blindness:</label>
            <select id="color-simulation" onchange="applySimulation()">
                <option value="normal">Normal Vision</option>
                <option value="deutan">Deuteranopia (Green-Blind)</option>
                <option value="protan">Protanopia (Red-Blind)</option>
                <option value="tritan">Tritanopia (Blue-Blind)</option>
            </select>
            <img id="sample-image" src="https://example.com/sample-image.jpg" alt="Sample for color simulation">
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Sobri ColorBlindX. All rights reserved. Author: dr. Muhammad Sobri Maulana</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
