<!DOCTYPE html>
<html lang="en">

<head>
    <title> BookStore | Cart Page </title>
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
      <li <?php if ($_SERVER['PHP_SELF'] == "/booksindex.php") echo 'class="active"'; ?>><a href="booksindex.php">Book list</a></li>
      <li <?php if ($_SERVER['PHP_SELF'] == "/author.php") echo 'class="active"'; ?>><a href="author.php">Author</a></li>
      <li <?php if ($_SERVER['PHP_SELF'] == "/Home.php") echo 'class="active"'; ?>><a href="Home.php">Home</a></li>
      <li <?php if ($_SERVER['PHP_SELF'] == "/profilepage.php") echo 'class="active"'; ?>><a href="profilepage.php">Profile</a></li>
      <li style="float: right;">
        <br>
      <li style="float: left;">
        <a href="index.php">Log Out</a>
      </li>
    </ul>
  </div>
  <h1>Cart page </h1>
</div>


<div id="content">
        <style>
          body {
          background-image: url('booksimage.jpg');
            }
          </style>
            <div id="profilePage">
                <img id="userProfilePicture" src="profilePicture.svg" alt="user avatar" />
            </div>
                <div id="body">
                    <div id="left">
                        <h3> Books in Carts</h3>
                        <?php
                            $dbhost = "sql304.infinityfree.com";
                            $dbuser = "if0_34581835";
                            $dbpass = "aMOqQuKNwSCuH";
                            $dbname = "if0_34581835_Bookstore";

                            $conn = mysql_connect($dbhost, $dbuser, $dbpass, $dbname);


                            if(! $conn ) {
                                die('Could not connect: ' . mysql_error());
                            }

                            $sql = "select * from carts where user_id = 3";
                            mysql_select_db('if0_34581835_Bookstore');
                            $retval = mysql_query( $sql, $conn );

                            if(! $retval ) {
                                die('Could not get data: ' . mysql_error());
                            }

                            while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
                                echo "User id :{$row['user_id']}<br> ".
                                "Book id: {$row['Book_id']} <br> ".
                                "Book Name : {$row['Book_Name']} <br> ".
                                "Email : {$row['Email']} <br> ".
                                "Price : {$row['price']} <br> ".
                                "<a href='booksindex.php?userid=" . $row["user_id"] . "'>View Profile</a> <br>".
                                "--------------------------------<br>";
                            }

                            echo "Fetched data successfully\n";

                            mysql_close($conn);
                        ?>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>