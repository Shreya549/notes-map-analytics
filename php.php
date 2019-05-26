<?php
$servername = "localhost";
$username = "root";
$password = "1242";
$db_name = "login";
$conn = mysqli_connect($servername, $username, $password,$db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$mail = $_POST["user"];
$pass = $_POST["pass"];
$sql = "SELECT * FROM loginid WHERE pass='cc1234' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["pass"]."<br>";
    }
}
else
{
    echo "No files found";}
?>
