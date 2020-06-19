
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";
$conn = new mysqli($servername, $username, $password, $dbname);




$sql1 = "DELETE FROM id10tdb WHERE id=12";


if (mysqli_query($conn, $sql1)) {
    header("refresh:1;url=updatedata.php");
} else {
    echo "Not Updated";
}
?>
