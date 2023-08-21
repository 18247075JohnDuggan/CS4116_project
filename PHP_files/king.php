<!DOCTYPE html>
<html lang="en">

<head>
    <title> BookStore | The King</title>
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
    <img id="king.jpg" src="king.jpg" alt="Book Image" style ="width:100px;height:120px;" />
 </div>
 <H1>The King Under The Mountain summary</H1>
    <p1>"The King Under The Mountain" is an epic fantasy novel that transports readers to a realm of magical wonders and ancient prophecies. In a land where mythical creatures roam and kingdoms vie for power, the fate of the world rests on the shoulders of a reluctant hero.

In the heart of the kingdom lies a dormant volcano, believed to be the resting place of the legendary King Under the Mountain, a ruler of unparalleled power who vanished centuries ago. As whispers of his return spread across the land, the once unified kingdoms find themselves on the brink of war, each seeking to wield the king's power for their own ambitions.

Enter our protagonist, a young and unassuming blacksmith named Ethan. Unaware of his true lineage, Ethan's life is turned upside down when he discovers a mysterious amulet left behind by his long-lost parents. The amulet holds a connection to the King Under the Mountain and grants its wielder the ability to control ancient elemental forces.

As the truth of his heritage unfolds, Ethan is thrust into a perilous journey, guided by a wise and enigmatic sage named Elara. Along the way, he forms an unlikely alliance with a band of diverse and endearing companions, each possessing their own unique abilities and troubled pasts.

Their quest takes them through enchanted forests, treacherous mountains, and forgotten ruins as they confront dark forces determined to seize the amulet's power. On their path, they encounter majestic dragons, cunning shape-shifters, and malevolent sorcerers, each determined to either aid or hinder their quest.

As the world teeters on the edge of chaos, Ethan must embrace his destiny as the true heir to the King Under the Mountain's legacy. With courage, sacrifice, and the strength of friendship, he will face the ultimate test of character and harness the dormant power within him to restore balance to the realms.

"The King Under The Mountain" is a captivating tale of self-discovery, heroic deeds, and the enduring power of hope and unity. It weaves together themes of destiny, family, and the enduring fight between light and darkness, leaving readers eagerly turning each page until the climactic battle between good and evil in this breathtaking fantasy adventure.
    </p1>
    <section>
        <button type="submit" class="btn btn-primary"> Buy </button>
    </section>
</body>
</html>