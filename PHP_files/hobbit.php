<!DOCTYPE html>
<html lang="en">

<head>
    <title> BookStore | The Hobbit</title>
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
    <img id="thehobbit.jpg" src="thehobbit.jpg" alt="Book Image" style ="width:100px;height:120px;" />
 </div>
 <H1>The Hobbit summary</H1>
    <p1>"The Hobbit" is a fantasy novel written by J.R.R. Tolkien and published in 1937. The story follows the adventures of a hobbit named Bilbo Baggins. Bilbo is a contented and unambitious hobbit who lives a peaceful life in his cozy home in the Shire. One day, his life takes an unexpected turn when the wizard Gandalf and a group of thirteen dwarves led by Thorin Oakenshield arrive at his doorstep.

They invite Bilbo to join them on an epic quest to reclaim the Lonely Mountain and its treasure, which was stolen by the dragon Smaug. Initially reluctant, Bilbo is persuaded to become the group's "burglar" and embarks on this perilous journey to the east.

Throughout the journey, Bilbo faces numerous challenges and encounters various creatures and beings, such as trolls, goblins, giant spiders, and the enigmatic Gollum, who possesses a powerful and precious ring. As Bilbo's character grows, he proves to be resourceful, brave, and cunning, making important contributions to the group's survival.
    </p1>

    <section>
        <button type="submit" class="btn btn-primary"> Buy </button>
    </section>
</body>
</html>