<?php include 'database.php'; ?>


<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infosec Quizzer</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>InfoSec Quizzer</h1>
        </div>
    </header>

    <main>
        <div class="container">
            <h2>Test your Infosec Skills</h2>
            <p>This is a multiple choice quiz to test your InfoSec skills</p>
            <ul>
                <li><strong>Number of Questions:</strong>5</li>
                <li><strong>Type:</strong>Multiple Choice</li>
                <li><strong>Estimate Time:</strong>4 Minutes</li>
            </ul>
            <a href="question.php?n=1" class="start">Start Quiz</a>
        </div>
    </main>

    <footer>
        <div class="container">
            Copyright &copy; 2020,Quizzy
        </div>
    </footer>
</body>
</html>