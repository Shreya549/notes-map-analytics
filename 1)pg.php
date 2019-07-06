
<?php
$servername = "localhost";
$username = "root";
$password = "1242";
$db_name = "login";
$conn = mysqli_connect($servername, $username, $password,$db_name);
$m = null;
$p=null;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$email = $_POST["user"];
$pass = $_POST["pass"];
$i = $_POST["userid"];
$nam=null;
$sql = "SELECT * FROM loginid WHERE userid = $i";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $m = $row["email"];
        $p = $row["pass"];
        $nam = $row["name"];
    }
}
else
{
    header("Location: firstpage.html");}
if (($m==$email) && ($p==$pass)){
    session_start();
    $userid=$nam;
    $_SESSION['name']=$userid;
    header ("Location: 2)pg.html");
}
else{
    header("Location: firstpage.html");
}
?>