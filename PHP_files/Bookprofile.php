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
    <a class="brand" href="#">Book-Store</a>
    <form action="/search.php" method="GET" class="navbar-form pull-right" style="margin:2em">
      <input type="text" name="query" class="search-query" placeholder="Search...">
    </form>
    <ul class="nav">
      <li color='blue' <?php if ($_SERVER['PHP_SELF'] == "/cart.php") echo 'class="active"'; ?>><a href="cart.php">cart</a></li>
      <li <?php if ($_SERVER['PHP_SELF'] == "/author.php") echo 'class="active"'; ?>><a href="author.php">author</a></li>
      <li <?php if ($_SERVER['PHP_SELF'] == "/Login.php") echo 'class="active"'; ?>><a href="Login.php">Profile Page</a></li>
      <li <?php if ($_SERVER['PHP_SELF'] == "/booksindex.php") echo 'class="active"'; ?>><a href="booksindex.php">Books index</a></li>
      <li style="float: right;">
        <a href="LoginPage.php">Log Out</a>
      </li>
      <li <?php if ($_SERVER['PHP_SELF'] == "/profilepage.php" && empty($_SERVER['QUERY_STRING'])) echo 'class="active"'; ?> style="float: right">
        <?php
        session_start();
        if (isset($_SESSION['user_id']) && !isset($_SESSION['company_id'])) {
          echo '<a href="profilepage.php">You</a>';
        } elseif (isset($_SESSION['company_id']) && !isset($_SESSION['user_id'])) {
          echo '<a href="Farms.php">You</a>';
        } else {
          session_unset();
          echo '<a href="LoginPage.php">You</a>';
        }
        ?>
      </li>
    </ul>
  </div>
</div>

<div id="content">
          <style>
          body {
          background-image: url('booksimage.jpg');
            }
          </style>
          <li <?php if ($_SERVER['PHP_SELF'] == "/lotr1.php") echo 'class="active"'; ?>><a href="Lotr1.php"> Lord of the Rings - Fellowship of the ring </a></li>

</body>
</html>