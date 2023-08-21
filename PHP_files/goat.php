<!DOCTYPE html>
<html lang="en">

<head>
    <title> BookStore | GOAT </title>
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
    <img id="goat.jpg" src="goat.jpg" alt="Book Image" style ="width:100px;height:120px;" />
 </div>
 <H1>The goat summary</H1>
    <p1> In his own words, the heavyweight champion of the world pulls no punches as he chronicles the battles he faced in and out of the ring in this fascinating memoir edited by Nobel Prize-winning novelist, Toni Morrison. Growing up in the South, surrounded by racial bigotry and discrimination, Ali fought not just for a living, but also for respect and rewards far more precious than money or glory. He was named Sportsman of the Century by Sports Illustrated and the BBC. Ali redefined what it meant to be an athlete by giving hope to millions around the world and inspiring us all to fight for what is important to us. This is a multifaceted portrait of Muhammad Ali only he could render: sports legend; unapologetic anti-war advocate; outrageous showman and gracious goodwill ambassador; fighter, lover, poet, and provocateur; an irresistible force to be reckoned with. Who better to tell the tale than the man who went the distance living it?
    </p1>
    <section>
        <button type="submit" class="btn btn-primary"> Buy </button>
    </section>
</body>
</html>