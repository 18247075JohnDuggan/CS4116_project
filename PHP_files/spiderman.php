<!DOCTYPE html>
<html lang="en">

<head>
    <title> BookStore | Spider-man</title>
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
    <img id="spiderman-pic.jpg" src="spiderman-pic.jpg" alt="Book Image" style ="width:100px;height:120px;" />
 </div>
 <H1>Spider-Man summary</H1>
    <p1>Spider-Man takes readers on an exhilarating journey through the life of Peter Parker, a.k.a. Spider-Man, as he faces his greatest challenges yet. Set in the heart of New York City, the book explores the complexities of heroism, identity, and the sacrifices that come with wielding great power.

In this gripping tale, Peter's dual life as a college student and a crime-fighting superhero becomes even more demanding. As Spider-Man, he finds himself confronted by a new, enigmatic adversary known as the Weaver, whose ability to control and manipulate reality threatens to unravel the very fabric of the city. As the Weaver's schemes escalate, Spider-Man's strength, wit, and resourcefulness are put to the ultimate test.

Amidst the chaos, Peter grapples with personal challenges, including maintaining his relationships with his loved ones while guarding his secret identity. His romance with Mary Jane Watson faces strain as the pressures of his superhero responsibilities weigh heavily on their bond. Meanwhile, Peter's friendship with Harry Osborn is tested when Harry becomes entangled with the criminal underworld in unexpected ways.

As Spider-Man battles the Weaver's ever-growing influence, he allies himself with a diverse cast of heroes, including some familiar faces from the Marvel universe. Together, they must uncover the Weaver's true motivations and put an end to the chaos before reality itself is torn apart.

Spider-Man is a thrilling exploration of Peter Parker's internal and external struggles, showcasing his unwavering determination to protect the city he loves. Filled with heart-pounding action, emotional depth, and unexpected twists, this book offers a fresh perspective on the beloved web-slinger while honoring his iconic legacy.
    </p1>
    <section>
        <button type="submit" class="btn btn-primary"> Buy </button>
    </section>
</body>
</html>