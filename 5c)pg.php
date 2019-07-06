<?php
$servername = "localhost";
$username = "root";
$password = "1242";
$db_name = "codechef";
$conn = mysqli_connect($servername, $username, $password,$db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM todo";
$dat=null;
$nam=null;
$des=null;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $nam = $row["event_name"];
        if (isset($_POST[$nam]))
        {
            echo $nam;
        }
    }
}
?>