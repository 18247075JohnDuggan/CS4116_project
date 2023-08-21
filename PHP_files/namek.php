<!DOCTYPE html>
<html lang="en">

<head>
    <title> BookStore | Nameless Knight </title>
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
    <img id="namek.jpg" src="namek.jpg" alt="Book Image" style ="width:100px;height:120px;" />
 </div>
 <H1>Nameless Knight summary</H1>
    <p1>In the enchanting world of Elysium, where magic and mythical creatures thrive, there exists a legendary figure known as "The Nameless Knight." The land is divided into four kingdoms, each possessing a powerful elemental crystal that grants unimaginable powers to its ruler. The balance among these crystals keeps Elysium in harmony, but when an evil force seeks to claim all the crystals and plunge the world into darkness, a hero must rise to protect the realm.

Enter our protagonist, a young and orphaned squire named Alden, who dreams of becoming a knight and finding his true identity. Raised in the humble village of Serendale, Alden possesses an uncanny connection to magic that he struggles to understand. When the kingdom of Serendale falls under attack by dark forces seeking the elemental crystal hidden within, Alden's village is razed to the ground. With nothing left but a burning desire for vengeance, he embarks on a perilous quest to stop the dark forces and restore peace to Elysium.

As Alden ventures through the treacherous landscapes and faces mythical creatures, he encounters a diverse group of companions: Elara, a wise and powerful sorceress; Finn, a skilled elven archer with a tragic past; and Barin, a witty and resourceful dwarf. Together, they form an unlikely alliance, each harboring secrets that could make or break their mission.

As they journey across the realms, Alden learns about the prophecies surrounding The Nameless Knight, a legendary figure destined to wield the combined powers of all elemental crystals and defeat the darkness. Gradually, he realizes that he might be the very embodiment of this prophecy, but self-doubt and fears of his unknown past threaten to consume him.

Battling through dark forests, haunted ruins, and ancient temples, Alden and his companions face insurmountable challenges, including encounters with ruthless enemies and bitter betrayals. The line between friends and foes blurs, and Alden must confront his deepest fears and discover his true purpose as The Nameless Knight.

In the climactic showdown, the group faces the dark force's malevolent leader, a sorcerer consumed by power and vengeance. Alden must embrace his destiny and draw upon the strength of his companions and the elemental crystals to vanquish the darkness once and for all.

"The Nameless Knight" is a tale of self-discovery, courage, and the enduring power of friendship, set against a backdrop of magic and mythical wonders. Alden's journey from a nameless squire to a legendary hero will captivate readers and transport them to a world where anything is possible, and where the power of one's heart and mind can triumph over the darkest of evils.
    </p1>
    <section>
        <button type="submit" class="btn btn-primary"> Buy </button>
    </section>
</body>
</html>