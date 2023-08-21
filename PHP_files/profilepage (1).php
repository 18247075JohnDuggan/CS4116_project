<!DOCTYPE html>
<html lang="en">

<head>
    <title> BookStore | Profile Page</title>
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
     <div id="log-php">
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <?php
        require_once 'userData.php';
        $hostName = "sql304.infinityfree.com";
        $userName = "if0_34581835";
        $password = "aMOqQuKNwSCuH";
        $databaseName = "if0_34581835_Bookstore";
        $connection = mysqli_connect($hostName, $userName, $password, $databaseName);
        if (isset($_GET['Email'])) {
            $Email = $_GET['Email'];
            $userDetails = getUserDetails($connection, $Email);
            $_POST['userDetails'] = $userDetails;
        } else {
            session_start();
            $Email = $_SESSION['Email'];
            $userDetails = getUserDetails($connection, $Email);
            $_POST['userDetails'] = $userDetails;
        }
        //check if user is banned
        $sql = "SELECT * FROM banned WHERE user_id = $userId";

        $result = mysqli_query($connection, $sql);
        $banned = mysqli_num_rows($result) > 0;
        mysqli_close($connection);
        ?>
    </div>


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
      <li <?php if ($_SERVER['PHP_SELF'] == "/cart.php") echo 'class="active"'; ?>><a href="cart.php">Cart</a></li>
      <br>
      <li style="float: left;">
        <a href="index.php">Log Out</a>
      </li>
    </ul>
  </div>
  <h1>Profile page </h1>
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
            <div id="main">
                <script src="https://code.jquery.com/jquery.js"></script>
                <script src="js/bootstrap.min.js"></script>
            <div id="menu">
            <?php include 'navBar.php'; ?>
            </div>

            <div id="search-bar">
                <div id="search">
                <form action="" method="get">
                    <input type="text" name="query" placeholder="Search">
                    <button class="btn btn-primary" type="submit">Go</button>
                </form>
                </div>
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
                            session_start();
                            if ($_SESSION['admin'] == true || $userId == $_SESSION['user_id']) {
                                echo '<h3> Add Books To Profile</h3>
                                <form method="post">
                                    <input type="text" name="user_id" placeholder="User ID" required>
                                    <input type="text" name="Name" placeholder="Name" required>
                                    <input type="text" name="Book_Name" placeholder="Book Name" required>
                                    <input type="text" name="Email" placeholder="Email" required>
                                    <input type="text" name="password" placeholder="password" required>
                                    <button type="submit" class="btn btn-primary" name="addprofile">Add +</button>
                                </form>';
                            }

                            if (isset($_POST['addprofile'])) {
                                $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
                                $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
                                $Name = mysqli_real_escape_string($conn, $_POST['Name']);
                                $Book_Name = mysqli_real_escape_string($conn, $_POST['Book_Name']);
                                $Email = mysqli_real_escape_string($conn, $_POST['Email']);
                                $password = mysqli_real_escape_string($conn, $_POST['password']);


                                $sql =
                                "INSERT INTO customers (user_id, Name, Book_Name, Email, password)
                                VALUES ('$user_id', '$Name', '$Book_Name','$Email', '$password')";
                                $result = mysqli_query($conn, $sql);

                                if ($result) {
                                    echo "Data inserted successfully!";
                                } else {
                                    echo "Error: " . mysqli_error($conn) . " (" . mysqli_errno($conn) . ")";
                                }
                                mysqli_close($conn);
                            }
                        ?>
                        <br>
                        <?php
                            $dbhost = "sql304.infinityfree.com";
                            $dbuser = "if0_34581835";
                            $dbpass = "aMOqQuKNwSCuH";
                            $dbname = "if0_34581835_Bookstore";
   
                            $conn = mysql_connect($dbhost, $dbuser, $dbpass, $dbname);
                            
                            if (isset($_GET['userid'])) {
                            $userId = $_GET['userid'];
                            $userDetails = getUserDetails($connection, $userId);
                            $_POST['userDetails'] = $userDetails;
                            } else {
                            session_start();
                            $userId = $_SESSION['user_id'];
                            $userDetails = getUserDetails($connection, $userId);
                            $_POST['userDetails'] = $userDetails;
                                }

                            
                            // Check if a search query was submitted
                            if (isset($_GET["query"])) {
                            $search_query = $_GET["query"];
                            
                            // else show all
                            $query = "SELECT * FROM customers where Name = 'Liam Clune'";
                            }
                            $result = mysqli_query($conn, $query);
                            
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "user_id: " . $row["User id"] . "<br>";
                                echo "Name: " . $row["Name"] . "<br>";
                                echo "Book_Name: " . $row["Book Name"] . "<br>";
                                echo "Email: " . $row["Email"] . "<br>";
                                echo "<a>View Profile</a> <br>";
                                echo "<br><br>";
                            }
                            if(! $conn ) {
                                die('Could not connect: ' . mysql_error());
                            }
   
                            $sql = "SELECT * FROM customers where Name = 'Liam Clune'";
                            mysql_select_db('if0_34581835_Bookstore');
                            $retval = mysql_query( $sql, $conn );
   
                            if(! $retval ) {
                                die('Could not get data: ' . mysql_error());
                            }
   
                            while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
                                echo 
                                "<a href='booksindex.php?book_id=" . $row["book_id"] . "'>View Profile</a> <br>".
                                "User id :{$row['user_id']}<br> ".
                                "Name: {$row['Name']} <br> ".
                                "Book Name: {$row['Book_Name']} <br> ".
                            
                                "--------------------------------<br>";
                            }
   
                            echo "Fetched data successfully\n";
   
                            mysql_close($conn);
                        ?>

                        <?php
                        session_start();
                        if ($_SESSION['admin'] == true || $userId == $_SESSION['user_id']) {
                            echo '<h3> Add To Cart</h3>
                            <form method="post">
                                <input type="text" name="user_id" placeholder="User ID" required>
                                <input type="text" name="Book_id" placeholder="Book ID" required>
                                <input type="text" name="Book_Name" placeholder="Book Name" required>
                                <input type="text" name="Email" placeholder="Email" required>
                                <input type="text" name="price" placeholder="price" required>
                                <button type="submit" class="btn btn-primary" name="addcart">Add +</button>
                            </form>';
                        }

                        if (isset($_POST['addcart'])) {
                            $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
                            $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
                            $Book_id = mysqli_real_escape_string($conn, $_POST['Book_id']);
                            $Book_Name = mysqli_real_escape_string($conn, $_POST['Book_Name']);
                            $Email = mysqli_real_escape_string($conn, $_POST['Email']);
                            $price = mysqli_real_escape_string($conn, $_POST['price']);


                            $sql =
                            "INSERT INTO carts (user_id, Book_id, Book_Name, Email, price)
                             VALUES ('$user_id', '$Book_id', '$Book_Name','$Email', '$price')";
                            $result = mysqli_query($conn, $sql);

                            if ($result) {
                                echo "Data inserted successfully!";
                            } else {
                                echo "Error: " . mysqli_error($conn) . " (" . mysqli_errno($conn) . ")";
                            }
                            mysqli_close($conn);
                        }
                        ?>
                    </div>   
                </div>               
            </div>
        </div>
</body>

</html>