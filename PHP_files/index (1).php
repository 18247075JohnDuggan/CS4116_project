<!DOCTYPE html>
<html lang="en">
  <head>
    <title> BookStore </title>
    <link rel ="stylesheet" href = "login.css" >
    <link rel ="stylesheet" href = "content.css" >
    <link rel ="stylesheet" href = "menu.css" >
    <link rel="stylesheet" type="text/css" href="Style/menu.css" />
    <link rel="stylesheet" type="text/css" href="Style/content.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=K2D:wght@100&display=swap"
      rel="stylesheet"
    />
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
  </head>

  <body>
    <div id="main">
      <script src="https://code.jquery.com/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>

      <div id="menu">
        <?php include navbarindex.php; ?>
        <div class="navbar">
          <div class="navbar-inner">
            <a class="brand" href="index.php" style="border-right: none">BookStore </a>
            <a class="brand" href="Home.php" style="border-right: none">Home</a>
          </div>
        </div>
      </div>

      <div id="content" style="text-align:center; color: white; line-height: 2em;">
                <h2 style="color: black;">Welcome!</h2>
                <p style="font-size: 16px; color: black;">
                  "BookStore" is a user-friendly web application designed to provide book enthusiasts with an immersive and convenient platform to explore their literary interests. Within this app, users can effortlessly browse, discover, and engage with a wide array of books from various genres and authors. With an intuitive interface, users can easily search for specific titles, authors, or topics, and then delve into comprehensive book profiles enriched with cover images, summaries, author biographies, and reader reviews.

BookStore offers a seamless experience, allowing users to create personalized accounts to keep track of their favorite books, compile wishlists, and manage their reading history. The app also provides a dynamic recommendation system, suggesting books based on users' preferences and past interactions.

Whether users are searching for the latest bestsellers, timeless classics, or hidden literary gems, BookStore caters to all tastes and preferences. By seamlessly blending the joys of physical bookstores with the convenience of online browsing, BookStore is the ideal destination for those who seek to explore the literary world from the comfort of their screens.
                </p>
                </br>
        </div>
    </div>
  </body>
</html>