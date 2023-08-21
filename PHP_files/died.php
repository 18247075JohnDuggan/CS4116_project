<!DOCTYPE html>
<html lang="en">

<head>
    <title> BookStore | never died </title>
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
    <img id="died.jpg" src="died.jpg" alt="Book Image" style ="width:100px;height:120px;" />
 </div>
 <H1>He Never Died summary</H1>
    <p1>In the mystical realm of Eloria, a young man named Marcus discovers that he possesses a unique and enigmatic power - the ability to resurrect himself after death. Immune to the consequences of mortality, he finds himself burdened by his endless existence and detached from the joys and sorrows of ordinary life. Marcus becomes known as "The Unfading" and becomes both feared and revered among the denizens of Eloria.

As the centuries pass, Marcus's immortality isolates him from the world, making him a mysterious figure in the annals of history. However, his solitude is disrupted when a powerful dark force emerges in Eloria, threatening to plunge the realm into chaos. A malevolent sorceress, seeking to harness Marcus's extraordinary power for her wicked ambitions, leads this sinister uprising.

To confront the growing darkness, Marcus is reluctantly drawn out of seclusion and forms an unlikely alliance with a group of diverse companions - each with their own distinct magical abilities. Together, they embark on an epic quest to decipher the ancient prophecies that foretold Marcus's existence and purpose. Along their perilous journey, they encounter mythical creatures, haunted forests, and treacherous landscapes, testing their unity and resilience.

As they delve deeper into the mysteries of Eloria's past, Marcus begins to uncover secrets that challenge his understanding of his immortal nature and his role in shaping the fate of the realm. In a climactic battle against the malevolent sorceress and her dark forces, Marcus must confront his deepest fears and embrace the full potential of his unique gift.

"He Never Died" is a riveting fantasy novel that explores the themes of identity, purpose, and the consequences of immortality. Filled with breathtaking landscapes, magical wonders, and unforgettable characters, this tale weaves an intricate tapestry of adventure, love, and sacrifice that will keep readers captivated until the final page. Ultimately, it raises thought-provoking questions about the nature of life, death, and the timeless struggle between light and darkness.
    </p1>
    <section>
        <button type="submit" class="btn btn-primary"> Buy </button>
    </section>
</body>
</html>