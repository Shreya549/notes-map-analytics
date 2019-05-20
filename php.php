<?php
$servername = "localhost";
$username = "root";
$password = "1242";
$db_name = "login";

$conn = mysqli_connect($servername, $username, $password,$db_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
 echo " Successfully linked";
}

?>