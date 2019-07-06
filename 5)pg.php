<head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link rel="stylesheet" type="text/css" media="screen" href="bootstrap.css">
                <link rel="stylesheet" type="text/css" media="screen" href="bootstrap.grid.css">
                <link rel="stylesheet" type="text/css" media="screen" href="first_page_css.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" 
                integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" 
                crossorigin="anonymous">
                <title>YOUR EVENTS</title>
                
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id = "nav">
                    <img src="vitlogo_white.png" class="logo">
                    <a class="navbar-brand" href="#">UPCOMING EVENTS</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                          <a class="nav-link" href="#">Your Info</a>
                        </li>
                      </ul>
                    </div>
</nav>
<form action="5c)pg.php">
  <select name="sort">
    <option value="date">Date</option>
    <option value="alpha">Alphabetical Order</option>
  </select>
  <br><br>
    <button type="submit" class="btn btn-primary">Sort</button>
</form>
<table align =center border=1 cellpadding=10>
    <thead>
        <td width = 3%> </td>
        <td width = 15%> Date </td>
        <td width = 20%%> Event Name </td>
        <td width = 50%> Description </td>
</thead>
        <tbody>
<?php
$servername = "localhost";
$username = "root";
$password = "1242";
$db_name = "codechef";
$conn = mysqli_connect($servername, $username, $password,$db_name);
$dat = null;
$nam = null;
$des = null;
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM todo";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $dat = $row["date_of_event"];
        $nam = $row["event_name"];
        $des = $row["description_event"];
        echo "<tr>";
        echo '<form method="post"><td><input type="checkbox" value='.$nam.' name = '.$nam.'></td></form>';
        echo '<td>'.$dat.'</td>' ;
        echo '<td>'.$nam.'</td>' ;
        echo '<td>'.$des.'</td>' ;
        echo '</tr>';
    }
}
?>
</tbody>
</table>
<br>
<div class="controls" class="container">
    <form method="post" action = "5b)pg.php">
    <button type="submit" class="btn btn-primary">Remove</button>
    </form>
    <br>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class=container>
    <form method=get action="5a)pg.php">
    <div class="form-group">
                <label for=date>Date</label>
                <input type="date" class="form-control"  id="InputDate" name ="date" placeholder="Date">
            </div>
            <div class="form-group">
              <label for="name">Event Name</label>
              <input type="text" class="form-control" name="name" id="InputName" placeholder="Event Name">
            </div>
            <div class="form-group">
                <label for="InputDescription">Description</label>
                <textarea rows= 5 type="description" class="form-control" name="descrip" id="InputDescription" aria-describedby="passHelp">
                </textarea>
            </div>
            <button type = "submit" class="btn btn-primary">Add</button>
</div>
    </form>
</div>
</body>