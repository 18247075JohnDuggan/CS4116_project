<!DOCTYPE html>
<head>
    <title>Book-Store | Search Results</title>
    <link rel ="stylesheet" href = "login.css" >
    <link rel ="stylesheet" href = "content.css" >
    <link rel ="stylesheet" href = "menu.css" >
    <link rel="stylesheet" href="login.css" />
    <link rel="stylesheet" type="text/css" href="Style/content.css" />
    <link rel="stylesheet" type="text/css" href="Style/profilePage.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=K2D:wght@100&display=swap" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
</head>

<body>
    <div id="main">
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <div id="menu">
            <?php include 'navBar.php'; ?>
        </div>

        <div>
            <div id="search">
                <form action="" method="get">
                    <input type="text" name="query" placeholder="Search">
                    <button class="btn btn-primary" type="submit">Go</button>
                </form>
            </div>
        </div>

        <div id="content">
        <style>
             body {
                background-image: url('booksimage.jpg');
                }
        </style>
            <div id="Search Results">
            <h2> Results </h2>
            <?php
                $dbhost = "sql304.infinityfree.com";
                $dbuser = "if0_34581835";
                $dbpass = "aMOqQuKNwSCuH";
                $dbname = "if0_34581835_Bookstore";

                $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

                // Check if a search query was submitted
                if (isset($_GET["query"])) {
                    $search_query = $_GET["query"];

                // request based on search query
                $query = "SELECT * 
                FROM books 
                WHERE Book_id LIKE '%$search_query%' 
                OR Book_Name LIKE '%$search_query%' 
                OR Author LIKE '%$search_query%' 
                OR Genre LIKE '%$search_query%' 
                OR Genre_id LIKE '%$search_query%'
                OR Price LIKE '%$search_query%'";
                } else {
                    echo "Error";
                }

                $result = mysqli_query($conn, $query);
                if (mysqli_num_rows($result) == 0) {
                    echo "There are no books matching your query :(";
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "Book id: " . $row["Book_id"] . "<br>";
                        echo "Book Name: " . $row["Book_Name"] . "<br>";
                        echo "Author: " . $row["Author"] . "<br>";
                        echo "Genre: " . $row["Genre"] . "<br>";
                        echo "Genre id: " . $row["Genre_id"] . "<br>";
                        echo "price: " . $row["price"] . "<br>";
                        echo "<a href='booksindex.php?userid=" . $row["user_id"] . "'>View Profile</a> <br>";
                        echo "<br><br>";
                    }
                }

                // Close the database connection
                mysqli_close($conn);
            ?>
            </div>
    </div>
</body>

</html>
