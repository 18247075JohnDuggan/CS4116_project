<!DOCTYPE html>
<html lang="en">

<head>
    <title> BookStore | Alexander</title>
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
    <img id="Alexander.webp" src="Alexander.webp" alt="Book Image" style ="width:100px;height:120px;" />
 </div>
 <H1>Alexander summary</H1>
    <p1>The celebrated Macedonian king has been one of the most enduring figures in history. He was a general of such skill and renown that for two thousand years other great leaders studied his strategy and tactics, from Hannibal to Napoleon, with countless more in between. He flashed across the sky of history like a comet, glowing brightly and burning out quickly: crowned at age nineteen, dead by thirty-two. He established the greatest empire of the ancient world; Greek coins and statues are found as far east as Afghanistan. Our interest in him has never faded.

Alexander was born into the royal family of Macedonia, the kingdom that would soon rule over Greece. Tutored as a boy by Aristotle, Alexander had an inquisitive mind that would serve him well when he faced formidable obstacles during his military campaigns. Shortly after taking command of the army, he launched an invasion of the Persian empire, and continued his conquests as far south as the deserts of Egypt and as far east as the mountains of present-day Pakistan and the plains of India. Alexander spent nearly all his adult life away from his homeland, and he and his men helped spread the Greek language throughout western Asia, where it would become the lingua franca of the ancient world. Within a short time after Alexander’s death in Baghdad, his empire began to fracture. Best known among his successors are the Ptolemies of Egypt, whose empire lasted until Cleopatra.
    </p1>
    <section>
        <button type="submit" class="btn btn-primary"> Buy </button>
    </section>
</body>
</html>