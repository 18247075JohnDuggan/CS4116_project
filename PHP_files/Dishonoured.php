<!DOCTYPE html>
<html lang="en">

<head>
    <title> BookStore | Dishonoured Page</title>
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
    <img id="dishonoured.jpg" src="dishonoured.jpg" alt="Book Image" style ="width:100px;height:120px;" />
 </div>
 <H1>Dishonoured summary</H1>
    <p1>In "Dishonored," players assume the role of Corvo Attano, a skilled bodyguard and assassin serving the Empress of Dunwall. The game is set in a steampunk-inspired city plagued by a deadly rat-borne plague, and political intrigue is rife throughout the story.

At the beginning of the game, Corvo is framed for the assassination of the Empress and the kidnapping of her daughter, Emily. He is subsequently imprisoned and tortured. However, he manages to escape with the help of a group of loyalists who believe in his innocence and want to see the Empress's real killers brought to justice.

Players embark on a quest for vengeance and redemption, seeking to clear Corvo's name and protect Emily, who is next in line for the throne. Throughout the game, players are given various choices and approaches to complete their objectives, such as using stealth to avoid detection or employing brutal combat to take down enemies.

As the story progresses, Corvo unravels a web of conspiracies and learns that the real culprits behind the Empress's assassination are members of a powerful and corrupt group called the Loyalists, who sought to seize control of the city.

The narrative unfolds through a mix of gameplay and interactions with characters, each decision potentially affecting the game's outcome and shaping the city's future.

"Dishonored" offers players a rich and immersive experience with its intriguing storyline, atmospheric setting, and a variety of gameplay mechanics that reward both stealthy and aggressive approaches. It received critical acclaim for its inventive level design, player freedom, and engaging gameplay, becoming a standout title in the action-adventure genre.
    </p1>
    <section>
        <button type="submit" class="btn btn-primary"> Buy </button>
    </section>
</body>
</html>