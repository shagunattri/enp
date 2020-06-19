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
            <div class="current">Question 1 of 5</div>
            <p class="question">
                From the options below, which of them is not a threat to information security?
            </p>
            <form action="process.php" method="post">
                <ul class="choices">
                    <li><input type="radio" value="1" name="choice">Disaster</li>
                    <li><input type="radio" value="1" name="choice">Eavesdropping</li> 
                    <li><input type="radio" value="1" name="choice">Information leakage</li>
                    <li><input type="radio" value="1" name="choice">Unchanged default password</li>
                </ul>
                <input type="submit" value="Submit"> 
            </form>
        </div>
    </main>

    <footer>
        <div class="container">
            Copyright &copy; 2020,Quizzy
        </div>
    </footer>
</body>
</html>