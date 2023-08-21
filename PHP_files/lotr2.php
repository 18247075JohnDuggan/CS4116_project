<!DOCTYPE html>
<html lang="en">

<head>
    <title> BookStore | Lord of the rings the two towers</title>
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
    <a class="brand" href="#">Book-Store</a>
    <form action="/search.php" method="GET" class="navbar-form pull-right" style="margin:2em">
      <input type="text" name="query" class="search-query" placeholder="Search...">
    </form>
    <ul class="nav">
      <li color='blue' <?php if ($_SERVER['PHP_SELF'] == "/Login.php") echo 'class="active"'; ?>><a href="Login.php">Login</a></li>
      <li <?php if ($_SERVER['PHP_SELF'] == "/author.php") echo 'class="active"'; ?>><a href="author.php">Author</a></li>
      <li <?php if ($_SERVER['PHP_SELF'] == "/Home.php") echo 'class="active"'; ?>><a href="Home.php">Home</a></li>
      <li <?php if ($_SERVER['PHP_SELF'] == "/booksindex.php") echo 'class="active"'; ?>><a href="booksindex.php">Books index</a></li>
      <br>
      <li style="float: left;">
        <a href="index.php">Log Out</a>
      </li>
    </ul>
  </div>
 <h1>Book Profile</h1>
</div>

<div id="content">
 <style>
    body {
        background-image: url('booksimage.jpg');
        
            }
 </style>
 <div id="profilePage">
    <img id="twotowersprofile.jpg" src="twotowersprofile.jpg" alt="Book Image" style ="width:100px;height:120px;" />
 </div>
 <H1>Lord of the Rings - Fellowship of the ring summary</H1>
    <p1>The Lord of the Rings: The Two Towers" is the second book in J.R.R. Tolkien's epic fantasy trilogy "The Lord of the Rings." It continues the story after the events of the first book, "The Fellowship of the Ring.

 the scattered members of the Fellowship continue their separate journeys. Frodo Baggins and his loyal friend Samwise Gamgee continue their quest to destroy the One Ring in the volcanic fires of Mount Doom in Mordor. They are joined by the mysterious and conflicted creature, Gollum, who once possessed the Ring.

Meanwhile, the remaining members of the Fellowship, including Aragorn (also known as Strider), Legolas the Elf, and Gimli the Dwarf, pursue the captured Merry and Pippin, who have been taken by the Orcs after the breaking of the Fellowship. They are drawn to the kingdom of Rohan, where they encounter King Théoden, whose mind has been poisoned by his manipulative advisor, Wormtongue, and the dark wizard Saruman.
    </p1>

    <section>
        <button type="submit" class="btn btn-primary"> Buy </button>
    </section>
</body>
</html>