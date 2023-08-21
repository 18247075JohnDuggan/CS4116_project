<!DOCTYPE html>
<html lang="en">

<head>
    <title> BookStore | Dalo Page</title>
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
    <img id="thedalo.jpg" src="thedalo.jpg" alt="Book Image" style ="width:100px;height:120px;" />
 </div>
 <H1>Dalo summary</H1>
    <p1>Anthony Daly was the most successful captain in the history of Clare hurling, leading the county to two All-Irelands and three Munster titles. Regarded as an inspirational figure by his fellow players, Daly’s innate leadership and character prompted the Clare players, just three years after he had finished his playing career, to pursue him as manager at the age of just 34. During his three years in charge, he took Clare to the cusp of two All-Ireland finals, agonisingly losing the 2005 and 2006 semi-finals to the eventual winners, Cork and Kilkenny.

It was that kind of ambition and drive to succeed which attracted Dublin hurling to Daly. Taking over the county in 2009, he led Dublin, in 2011, to their first National League title in 72 years and, in 2013, their first Leinster title in 52 years, before he retired as manager in September 2014.

Dalo takes us from the early days growing up in Clarecastle through the early part of his career with Clare, the golden years and the extension into management, punctuated with intense and revealing stories from the dressing-room. Interlaced with drama, tragedy, his love of other pursuits, and his immense wit, Anthony Daly’s autobiography offers a compelling insight into a unique personality in modern Irish sport..
    </p1>
    <section>
        <button type="submit" class="btn btn-primary"> Buy </button>
    </section>
</body>
</html>