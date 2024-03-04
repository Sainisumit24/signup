<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "sign";

$conn = new mysqli($servername, $username, $password, $db_name,3306);
if ($conn) {
    echo "";
} else {
    die("connection error" . mysqli_connect_error());
}
?>
