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
            <h2>Add a Question</h2>
            <form action="add.php" method="post"></form>
            <p>
                <label>Question Number</label>
                <input type="number" name="question_number" id="">
            </p>
            <p>
                <label>Question Text</label>
                <input type="text" name="question_text" id="">
            </p>
            <p>
                <label>Choice #1: </label>
                <input type="text" name="choice1" id="">
            </p>
            <p>
                <label>Choice #2: </label>
                <input type="text" name="choice2" id="">
            </p>
            <p>
                <label>Choice #3: </label>
                <input type="text" name="choice3" id="">
            </p>
            <p>
                <label>Choice #4: </label>
                <input type="text" name="choice4" id="">
            </p>
            <p>
                <label>Choice #5: </label>
                <input type="text" name="choice5" id="">
            </p>
            <p>
                <label>Correct Choice Number: </label>
                <input type="number" name="correct_choice" id="">
            </p>
            <p>
                <input type="submit" name="submit" id="" value="Submit">
            </p>
        </div>
    </main>

    <footer>
        <div class="container">
            Copyright &copy; 2020,Quizzy
        </div>
    </footer>
</body>
</html>