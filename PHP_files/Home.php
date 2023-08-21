<!DOCTYPE html>
<html lang="en">

<head>
    <title> BookStore | Home Page </title>
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
<div class ="navbar">
<div style="background-color:#3696ac;">
 <link rel="stylesheet" type="text/css" href="Style/menu.css" />
  <div class="navbar-inner">
    <a class="brand" href="index.php">BookStore</a>
    <form action="/search.php" method="GET" class="navbar-form pull-right" style="margin:2em">
      <input type="text" name="query" class="search-query" placeholder="Search...">
    </form>
    <ul class="nav">
      <li color='blue' <?php if ($_SERVER['PHP_SELF'] == "/Login.php") echo 'class="active"'; ?>><a href="Login.php">Login</a></li>
      <li <?php if ($_SERVER['PHP_SELF'] == "/author.php") echo 'class="active"'; ?>><a href="author.php">Author</a></li>
      <li <?php if ($_SERVER['PHP_SELF'] == "/booksindex.php") echo 'class="active"'; ?>><a href="booksindex.php">Books index</a></li>
      <br>
      <li style="float: left;">
        <a href="index.php">Log Out</a>
      </li>
    </ul>
  </div>
  <h1> Book's </h1>
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
                        <h3> Books</h3>
                        <?php
                            $dbhost = "sql304.infinityfree.com";
                            $dbuser = "if0_34581835";
                            $dbpass = "aMOqQuKNwSCuH";
                            $dbname = "if0_34581835_Bookstore";

                            $conn = mysql_connect($dbhost, $dbuser, $dbpass, $dbname);


                            if(! $conn ) {
                                die('Could not connect: ' . mysql_error());
                            }

                            $sql = "select * from books";
                            mysql_select_db('if0_34581835_Bookstore');
                            $retval = mysql_query( $sql, $conn );

                            if(! $retval ) {
                                die('Could not get data: ' . mysql_error());
                            }

                            while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
                                echo "Book id :{$row['Book_id']}<br> ".
                                "Book Name: {$row['Book_Name']} <br> ".
                                "Genre : {$row['Genre']} <br> ".
                                "Author : {$row['Author']} <br> ".
                                "Genre id : {$row['Genre_id']} <br> ".
                                "Price : {$row['price']} <br> ".
                                "<a href='booksindex.php?userid=" . $row["user_id"] . "'>View Profile</a> <br>".
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
                                <input type="text" name="Book_id" placeholder="Book ID" required>
                                <input type="text" name="Book_Name" placeholder="Book Name" required>
                                <input type="text" name="Genre" placeholder="Genre" required>
                                <input type="text" name="Author" placeholder="Author" required>
                                <input type="text" name="Genre_id" placeholder="Genre_id" required>
                                <input type="text" name="price" placeholder="price" required>
                                <button type="submit" class="btn btn-primary" name="addbook">Add +</button>
                            </form>';
                        }

                        if (isset($_POST['addbook'])) {
                            $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
                            $Book_id = mysqli_real_escape_string($connection, $_POST['Book_id']);
                            $Book_Name = mysqli_real_escape_string($connection, $_POST['Book_Name']);
                            $Genre = mysqli_real_escape_string($connection, $_POST['Genre']);
                            $Author = mysqli_real_escape_string($connection, $_POST['Author']);
                            $Genre_id = mysqli_real_escape_string($connection, $_POST['Genre_id']);
                            $price = mysqli_real_escape_string($connection, $_POST['price']);


                            $sql =
                            "INSERT INTO books (Book_id, Book_Name, Genre, Author, Genre_id, price)
                             VALUES ('$Book_id', '$Book_Name', '$Genre', '$Author', '$Genre_id', '$price')";
                            $result = mysqli_query($connection, $sql);

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