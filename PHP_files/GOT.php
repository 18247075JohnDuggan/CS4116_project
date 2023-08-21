<!DOCTYPE html>
<html lang="en">

<head>
    <title> BookStore | Lord of the rings the return of the king </title>
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
    <img id="GOT.jpg" src="GOT.jpg" alt="Book Image" style ="width:100px;height:120px;" />
 </div>
 <H1>Game of Thrones summary</H1>
    <p1>The central plot revolves around the death of Jon Arryn, the Hand of the King, which sparks political intrigue and conflict among the houses. Eddard "Ned" Stark, Lord of Winterfell, is appointed as the new Hand of the King by his old friend, King Robert Baratheon. As he delves into Jon Arryn's death, Ned uncovers dark secrets that could threaten the stability of the realm.

Meanwhile, across the Narrow Sea in Essos, the exiled Targaryen princess, Daenerys Targaryen, is married off to Khal Drogo, the powerful leader of the nomadic Dothraki. Daenerys gradually evolves from a timid girl to a strong and determined leader.

As the story unfolds, the political landscape becomes increasingly complex, filled with betrayals, alliances, and battles. The characters' struggles for power and survival are complicated further by the arrival of supernatural beings such as the White Walkers beyond the Wall in the North.
    </p1>

<section>
        <button type="submit" class="btn btn-primary"> Buy </button>
</section>
</body>
</html>