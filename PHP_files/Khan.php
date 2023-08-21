<!DOCTYPE html>
<html lang="en">

<head>
    <title> BookStore | Genghis Khan</title>
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
    <img id="khan.jpg" src="khan.jpg" alt="Book Image" style ="width:100px;height:120px;" />
 </div>
 <H1>Genghis Khan summary</H1>
    <p1>Genghis Khan - creator of the greatest empire the world has ever seen - is one of history's immortals. In Central Asia, they still use his name to frighten children. In China, he is honoured as the founder of a dynasty. In Mongolia he is the father of the nation. In the USA, Time magazine, voted Genghis Khan 'the most important person of the last millennium'. But how much do we really know about this man? How is it that an unlettered, unsophisticated warrior-nomad came to have such a profound effect on world politics that his influence can still be felt some 800 years later?
How he united the deeply divided Mongol peoples and went on to rule an empire that stretched from China in the east to Poland in the west (one substantially larger than Rome's at its zenith) is an epic tale of martial genius and breathtaking cruelty. John Man's towering achievement in this book, enriched by his experiences in China and Mongolia today, is to bring this little-known story vividly and viscerally to life.
    </p1>
    <section>
        <button type="submit" class="btn btn-primary"> Buy </button>
    </section>
</body>
</html>