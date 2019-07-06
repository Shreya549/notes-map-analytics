<?php
$servername = "localhost";
$username = "root";
$password = "1242";
$db_name = "codechef";
$conn = mysqli_connect($servername, $username, $password,$db_name);
$m = null;
$p=null;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$dat = $_GET["date"];
$dat="'".$dat."'";
$n = $_GET["name"];
$name = "'".$n."'";
$d= $_GET["descrip"];
$descrip = "'".$d."'";
$sql = "INSERT INTO todo (date_of_event,event_name,description_event) 
VALUES ($dat,$name,$descrip)";
if ($conn->query($sql) === TRUE) {
header("location:javascript://history.go(-1)");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>