//set vars
$user = $_POST['user'];
$pass = md5($_POST['pass']);

if ($user&&$pass) 
{
//connect to db
$connect = mysql_connect("$server","$username","$password") or die("not connecting");
mysql_select_db("users") or die("no db :'(");
$query = mysql_query("SELECT * FROM $tablename WHERE username='$user'");

$numrows = mysql_num_rows($query);


if ($numrows!=0)
{
//while loop
  while ($row = mysql_fetch_assoc($query))
  {
    $dbusername = $row['username'];
    $dbpassword = $row['password'];
  }
  else
      die("incorrect username/password!");
}
else
  echo "user does not exist!";
} 
else
    die("please enter a username and password!");
