<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logged IN</title>
</head>

<body>
    <p>Logged IN</p>
    <?php echo $_SESSION['name'];
    echo "<br>";
    echo $_SESSION['age'];
    ?>


    <label>Logout:</label><a href="session.php">
        <p>GET out</p>
        <?php session_destroy(); ?>

</body>

</html>