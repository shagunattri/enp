<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn) {
    echo "Connection Successful";
} else {
    echo "error";
    echo "<br>";
}


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $phone = $_POST['phone'];


    $Query = "SELECT * FROM id10tdb WHERE name='" . $name . "'";
    $Esec = mysqli_query($conn, $Query);

    if (mysqli_num_rows($Esec) > 0) {
        echo "Name already exists";
    } else {
        $Query1 = "INSERT INTO id10tdb(name,email,phone) VALUES('$name', '$mail','$phone')";
    }
}
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



    <table border="1" style="border-collapse:collapse;height:auto;width:50%;padding:12px" ;>
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Add</td>
            <td>Edit</td>
            <td>Delete</td>
            <td><input type="submit" value="Update" name="submit"></td>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($res)) { ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                </td><?php echo $row['phone']; ?></td>
            </tr>
        <?php } ?>
    </table>











</body>

</html>