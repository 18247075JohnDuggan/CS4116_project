<!DOCTYPE html>
<html lang="en">

<head>
    <title> BookStore | Second Half</title>
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
    <img id="ROY.jpg" src="ROY.jpg" alt="Book Image" style ="width:100px;height:120px;" />
 </div>
 <H1>Second half summary</H1>
    <p1>No. 1 bestselling memoir of Roy Keane, former captain of Manchester United and Ireland - co-written with Man Booker Prize-winner Roddy Doyle. Now updated with a new chapter, including Roy leaving Aston Villa and the Republic of Ireland's qualification for Euro 2016. In a stunning collaboration with Booker Prize-winning author Roddy Doyle, Roy Keane gives a brutally honest account of his last days as a player, the highs and lows of his managerial career, and his life as an outspoken ITV pundit. 'Roy Keane's book is a masterpiece . . . It may well be the finest, most incisive deconstruction of football management that the game has ever produced' Mail on Sunday 'A genuine pleasure . . . His thoughts on his players are humane, interesting, candid and never less than believable' The Times 'The best things are the small things: regretting joining Ipswich when he discovered the training kit was blue; refusing to sign Robbie Savage because his answerphone message was rubbish; being appalled that his side had listened to an Abba song before playing football' Evening Standard 'The book is brilliantly constructed, rattling along at breakneck speed . . . full of self-deprecation . . . a ruthless self-examination' Daily Telegraph
    </p1>

    <section>
        <button type="submit" class="btn btn-primary"> Buy </button>
    </section>
</body>
</html>