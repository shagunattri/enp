
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";
$conn = new mysqli($servername, $username, $password, $dbname);



//$sql = "UPDATE id10tdb SET Name='$_POST[name]',Email='$_POST[email]',Phone='$_POST[phone]' WHERE ID='$_POST[id]'";

$sql1 = "DELETE FROM id10tdb WHERE id=11";


if (mysqli_query($conn, $sql1)) {
    header("refresh:1;url=updatedata.php");
} else {
    echo "Not Updated";
}
?>
