<!DOCTYPE html>
<html lang="en">

<head>
    <title> BookStore | Index Page</title>
    <link rel ="stylesheet" href = "login.css" >
    <link rel ="stylesheet" href = "content.css" >
    <link rel ="stylesheet" href = "menu.css" >
    <link rel="stylesheet" type="text/css" href="Style/content.css" />
    <link rel="stylesheet" type="text/css" href="Style/profilePage.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=K2D:wght@100&display=swap" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
</head>

<body>

<div class="navbar">
<div style="background-color:#3696ac;">
  <link rel="stylesheet" type="text/css" href="Style/menu.css" />
  <div class="navbar-inner">
    <a class="brand" href="index.php">Book-Store</a>
    <form action="/search.php" method="GET" class="navbar-form pull-right" style="margin:2em">
      <input type="text" name="query" class="search-query" placeholder="Search...">
    </form>
    <ul class="nav">
      <li color='blue' <?php if ($_SERVER['PHP_SELF'] == "/Login.php") echo 'class="active"'; ?>><a href="Login.php">Login</a></li>
      <li <?php if ($_SERVER['PHP_SELF'] == "/author.php") echo 'class="active"'; ?>><a href="author.php">Author</a></li>
      <li <?php if ($_SERVER['PHP_SELF'] == "/Home.php") echo 'class="active"'; ?>><a href="Home.php">Home</a></li>
      <br>
      <li style="float: left;">
        <a href="index.php">Log Out</a>
      </li>
    </ul>
  </div>
   <h1> Book List </h1>
</div>

<div id="content">
          <style>
          body {
          background-image: url('booksimage.jpg');
            }
          </style>
          <li <?php if ($_SERVER['PHP_SELF'] == "/lotr1.php") echo 'class="active"'; ?>><a href="Lotr1.php"> Lord of the Rings - Fellowship of the ring </a></li>
          <li <?php if ($_SERVER['PHP_SELF'] == "/lotr2.php") echo 'class="active"'; ?>><a href="lotr2.php"> Lord of the Rings - The Two Towers </a></li>
          <li <?php if ($_SERVER['PHP_SELF'] == "/lotr3.php") echo 'class="active"'; ?>><a href="Lotr3.php"> Lord of the Rings - Return of the King </a></li>
          <li <?php if ($_SERVER['PHP_SELF'] == "/hobbit.php") echo 'class="active"'; ?>><a href="hobbit.php"> The Hobbit </a></li>
          <li <?php if ($_SERVER['PHP_SELF'] == "/Alexander.php") echo 'class="active"'; ?>><a href="Alexander.php"> Alexander the Great </a></li>
          <li <?php if ($_SERVER['PHP_SELF'] == "/GOT.php") echo 'class="active"'; ?>><a href="GOT.php"> Game of Thrones </a></li>
          <li <?php if ($_SERVER['PHP_SELF'] == "/2ndhalf.php") echo 'class="active"'; ?>><a href="2ndhalf.php"> The Second Half </a></li>
          <li <?php if ($_SERVER['PHP_SELF'] == "/inmate.php") echo 'class="active"'; ?>><a href="inmate.php"> The Inmate </a></li>
          <li <?php if ($_SERVER['PHP_SELF'] == "/suregeon.php") echo 'class="active"'; ?>><a href="surgeon.php"> The Surgeon </a></li>
          <li <?php if ($_SERVER['PHP_SELF'] == "/crew.php") echo 'class="active"'; ?>><a href="crew.php"> The Crew </a></li>
          <li <?php if ($_SERVER['PHP_SELF'] == "/Gryan.php") echo 'class="active"'; ?>><a href="Gryan.php"> TOP GAME | DOMINATION IN THE JIU JITSU WORLD </a></li>
          <li <?php if ($_SERVER['PHP_SELF'] == "/dalo.php") echo 'class="active"'; ?>><a href="dalo.php"> Dalo </a></li>
          <li <?php if ($_SERVER['PHP_SELF'] == "/Dishonoured.php") echo 'class="active"'; ?>><a href="Dishonoured.php"> Dishonoured </a></li>
          <li <?php if ($_SERVER['PHP_SELF'] == "/Khan.php") echo 'class="active"'; ?>><a href="Khan.php"> Genghis Khan </a></li>
          <li <?php if ($_SERVER['PHP_SELF'] == "/goat.php") echo 'class="active"'; ?>><a href="goat.php"> The Greatest: My own story </a></li>
          <li <?php if ($_SERVER['PHP_SELF'] == "/king.php") echo 'class="active"'; ?>><a href="king.php"> The King Under The Mountain </a></li>
          <li <?php if ($_SERVER['PHP_SELF'] == "/namek.php") echo 'class="active"'; ?>><a href="namek.php"> The Nameless Knight </a></li>
          <li <?php if ($_SERVER['PHP_SELF'] == "/died.php") echo 'class="active"'; ?>><a href="died.php"> He Never Died </a></li>
          <li <?php if ($_SERVER['PHP_SELF'] == "/spiderman.php") echo 'class="active"'; ?>><a href="spiderman.php"> Spiderman </a></li>
        
</body>
</html>