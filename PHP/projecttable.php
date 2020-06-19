<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn) {
    echo "Connected";
} else {
    echo "<br>";
}


$sql = "SELECT * FROM demo";
$res = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>

<body>
    <table border="1" ;>
        <tr>
            <thead>First Name</thead><br><br>
            <thead>Last Name</thead><br><br>
            <thead>Add</thead><br><br>
            <thead>Edit</thead><br><br>
            <thead>Delete</thead><br><br>
        </tr>
        <tr>
            <td></td><br>
            <td></td><br>
            <td></td><br>
            <td></td><br>
            <td></td><br>
            <td></td><br>
        </tr>
    </table>

</body>

</html>