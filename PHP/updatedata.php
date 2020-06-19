<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn) {
    echo "Connected";
    echo "<br><br>";
} else {
    echo "<br>";
}

$sql = "SELECT * FROM id10tdb";


$res = mysqli_query($conn, $sql);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update PHP</title>
</head>

<body>
    <table border="1" ;>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($res)) {
            echo "<tr><form action=update.php method=post>";
            echo "<td><input type=text name=id value='" . $row['id'] . "'></td>";
            echo "<td><input type=text name=name value='" . $row['name'] . "'></td>";
            echo "<td><input type=text name=email value='" . $row['email'] . "'></td>";
            echo "<td><input type=text name=phone value='" . $row['phone'] . "'></td>";
            echo "<td><input type=submit value=Edit></a></td>";
            echo "<td><a href='update.php'><input type=submit value=Delete></a></td>";
            echo "</form></tr>";
        }

        ?>

</body>

</html>