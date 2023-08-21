<!DOCTYPE html>
<html lang="en">

<head>
    <title> BookStore | The crew</title>
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
    <img id="crew.jpg" src="crew.jpg" alt="Book Image" style ="width:100px;height:120px;" />
 </div>
 <H1>The Crew summary</H1>
    <p1>"The Crew" is a captivating fantasy novel set in the enchanting realm of Ondora, a world brimming with magic, mythical creatures, and ancient secrets. The story revolves around a diverse group of misfit adventurers who find themselves unexpectedly bound together on an extraordinary quest.

The tale begins with an orphaned teenager named Aiden, a skilled thief with a tragic past. Aiden's life takes a dramatic turn when he stumbles upon a mysterious map hidden inside an ancient book. The map promises the location of a long-lost treasure that holds the power to reshape the fate of Ondora.

Intrigued by the prospect of a better life and the chance to uncover his true identity, Aiden sets out to find the treasure. Along the way, he crosses paths with intriguing characters who share a unique skill or magical ability. Among them are:

Lyra: A fiercely independent and powerful mage with a secretive past, Lyra seeks redemption for a dark deed that haunts her.

Kael: A charming and skilled swordsman who hides a cursed secret that threatens to consume him.

Faye: A nature-loving druid with a deep connection to the mystical creatures of Ondora.

Thalia: A talented alchemist with a sharp wit and a fascination for the unknown.

Nael: A reclusive and enigmatic seer who possesses visions of the future.

Bound by fate and a shared destiny, these individuals form an unlikely alliance, calling themselves "The Crew." As they venture deeper into the heart of Ondora, they encounter dangerous foes, dark enchantments, and powerful adversaries who seek the treasure for their nefarious purposes.

As the journey progresses, each member of the Crew must confront their inner demons, forge unbreakable bonds of trust and friendship, and embrace the true extent of their magical abilities. Along the way, they discover that the treasure they seek holds a more significant significance than they could have ever imagined—it possesses the power to restore balance to Ondora or plunge it into eternal darkness.

The Crew's quest becomes a battle of not only external forces but also their internal struggles and personal growth. Together, they learn the value of teamwork, resilience, and sacrifice as they navigate the unpredictable world of Ondora.

"The Crew" is a thrilling and emotional adventure that explores themes of friendship, redemption, and the resilience of the human spirit in the face of adversity. Readers will be captivated by the vivid world-building, unique characters, and the gripping twists and turns that will keep them on the edge of their seats until the final page.
    </p1>
    <section>
        <button type="submit" class="btn btn-primary"> Buy </button>
    </section>
</body>
</html>