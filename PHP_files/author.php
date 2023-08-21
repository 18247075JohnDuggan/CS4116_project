<!DOCTYPE html>
<html lang="en">

<head>
    <title> BookStore | Author Page</title>
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
      <li color='blue' <?php if ($_SERVER['PHP_SELF'] == "/cart.php") echo 'class="active"'; ?>><a href="cart.php">Cart</a></li>
      <li <?php if ($_SERVER['PHP_SELF'] == "/Home.php") echo 'class="active"'; ?>><a href="Home.php">Home</a></li>
      <li <?php if ($_SERVER['PHP_SELF'] == "/Login.php") echo 'class="active"'; ?>><a href="Login.php">Profile Page</a></li>
      <br>
      <li style="float: left;">
        <a href="index.php">Log Out</a>
      </li>
    </ul>
  </div>
  <h1>Author page </h1>
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
                        <h3>User's Books</h3>
                        <?php
                            $dbhost = "sql304.infinityfree.com";
                            $dbuser = "if0_34581835";
                            $dbpass = "aMOqQuKNwSCuH";
                            $dbname = "if0_34581835_Bookstore";

                            $conn = mysql_connect($dbhost, $dbuser, $dbpass, $dbname);


                            if(! $conn ) {
                                die('Could not connect: ' . mysql_error());
                            }

                            $sql = "select * from authors";
                            mysql_select_db('if0_34581835_Bookstore');
                            $retval = mysql_query( $sql, $conn );

                            if(! $retval ) {
                                die('Could not get data: ' . mysql_error());
                            }

                            while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
                                echo "Author :{$row['Author']}<br> ".
                                "Author ID: {$row['Author_id']} <br> ".
                                "Book Name: {$row['Book_Name']} <br> ".
                                "Book ID: {$row['Book_id']} <br> ".
                                "Genre : {$row['Genre']} <br> ".
                                "--------------------------------<br>";
                            }

                            echo "Fetched data successfully\n";

                            mysql_close($conn);
                        ?>

                        <!-- if user admin or owner of page allow adding of positions -->
                        <?php
                        session_start();
                        if ($_SESSION['admin'] == true || $userId == $_SESSION['user_id']) {
                            echo '<h3> Add Book</h3>
                            <form method="post">
                                <input type="text" name="Book_Name" placeholder="Book Name" required>
                                <input type="text" name="Genre" placeholder="Genre" required>
                                <input type="text" name="Author" placeholder="Author" required>
                                <button type="submit" class="btn btn-primary" name="addbook">Add +</button>
                            </form>';
                        }

                        if (isset($_POST['addbook'])) {
                            $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
                            $Book_Name = mysqli_real_escape_string($connection, $_POST['Book_Name']);
                            $Genre = mysqli_real_escape_string($connection, $_POST['Genre']);
                            $Author = mysqli_real_escape_string($connection, $_POST['Author']);


                            $sql =
                            "INSERT INTO authors (Author, Author_id, Book_Name, Book_id, Genre)
                             VALUES ('$Author', $Author_id, '$Book_Name',
                            '$Book_id', '$Genre')";
                            $result = mysqli_query($conn, $sql);

                            if ($result) {
                                echo "Data inserted successfully!";
                            } else {
                                echo "Error: " . mysqli_error($connection) . " (" . mysqli_errno($connection) . ")";
                            }
                            mysqli_close($connection);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>