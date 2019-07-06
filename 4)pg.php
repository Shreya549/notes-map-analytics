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
        <title>YOURSPACE</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> </script>
        <style>
        #sideNav a {
              position: absolute; 
            transition: 0.3s; 
            padding: 40px; 
            text-decoration: none;
            font-size: 20px;
            color: white;
            border-radius: 0 5px 5px 0; 
            }

#sideNav a:hover {
  left: 0;
  cursor: pointer;
}

#board {
  top: 140px;
  background-color: #212533;
  left: -130px;
  width: 160px;
}

#tech {
  top: 260px;
  background-color: #212533; 
  left: -150px;
  width: 180px;
}

#manag {
  top: 380px;
  background-color: #212533;
  left: -180px;
  width: 210px;
}

#desig {
  top: 500px;
  background-color: #212533;
  left: -130px;
  width: 160px;
}

        </style>
  
    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id = "nav">
        <img src="vitlogo_white.png" class="logo">
        <a class="navbar-brand" href="#">MEMBERS</a>
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
    <div id = sideNav>
      <a href="" id = board>BOARD</a>
      <a href="6)pg.php" id = tech>TECHNICAL</a>
      <a href="" id = manag>MANAGEMENT</a>
      <a href="" id = desig>DESIGN</a>
    </div>  
