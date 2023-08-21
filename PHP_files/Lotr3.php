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
    <img id="lotr3.jpg" src="lotr3.jpg" alt="Book Image" style ="width:100px;height:120px;" />
 </div>
 <H1>Lord of the Rings - Return of the king summary</H1>
    <p1>The Lord of the Rings: The Return of the King" is the third and final installment of J.R.R. Tolkien's epic fantasy trilogy. The story picks up where "The Two Towers" left off, with the forces of good preparing for a final confrontation against the dark lord Sauron and his army in the land of Mordor.

As the story unfolds, the armies of Gondor and Rohan face tremendous odds as they defend the city of Minas Tirith from Sauron's forces. Frodo and Sam face numerous trials and dangers on their way to Mount Doom, with the fate of Middle-earth hanging in the balance. The film showcases epic battles, personal sacrifices, and moments of triumph and tragedy as the forces of good confront the full might of evil.

In the end, through courage, determination, and selflessness, the characters succeed in their quests. Frodo and Sam reach Mount Doom, where Frodo succumbs to the Ring's corrupting influence but ultimately destroys it, thereby defeating Sauron and his forces. Aragorn is crowned as the King of Gondor, bringing hope and renewal to the land. The story concludes with the hobbits returning to their beloved Shire, where they face their own battles and challenges, showing that the effects of the great war have far-reaching consequences.
    </p1>
</body>
<section>
     <button type="submit" class="btn btn-primary"> Buy </button>
</section>
</html>