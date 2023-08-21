<!DOCTYPE html>
<html lang="en">

<head>
  <title> Book-Store | Sign Up</title>
  <link rel ="stylesheet" href = "login.css" >
  <link rel ="stylesheet" href = "content.css" >
  <link rel ="stylesheet" href = "menu.css" >
  <link rel ='stylesheet' href="login.css"/>
    <link rel="stylesheet" type="text/css" href="Style/content.css" />
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
      <div class="navbar">
        <div class="navbar-inner">
          <a class="brand" href="index.php" style="border-right: none">BookStore </a>
          <a class="brand" href="Home.php" style="border-right: none">Home</a>
        </div>
      </div>
    </div>

    <div id="content">
      <div id="signUpPage">
        <h1>Create An Account</h1>
        <form method="POST">
          <div class="signup-box">
            <div class="left-box">
              <h1> Basic Details</h1>
              <input type="text" name="users_id" placeholder="Users id" required>
              <input type="email" name="email" placeholder="Email" required>
              <input type="password" name="password" placeholder="Create Password" required>
              <input type="password" name="confirmPassword" placeholder="Confirm Password" required>
              <div class="checkbox">
                <input type="checkbox" id="terms" required>
                <label for="terms"> I accept the terms and conditions.</label>
              </div>
            </div>
          </div>
          <button class="btn-primary" name="submit" type="submit"> Create! <span> &#x27f6; </span></button>
        </form>
        <p class="login">Already have an account? <a href="Loginpage.php">Login Now</a></p>
      </div>

    </div>
  </div>
  <?php
 $dbhost = "sql304.infinityfree.com";
 $dbuser = "if0_34581835";
 $dbpass = "aMOqQuKNwSCuH";
 $dbname = "if0_34581835_Bookstore";
 $connection = mysqli_connect($hostName, $email, $password, $databaseName);

  if (mysqli_connect_errno()) {
    die('Could not connect: ' . mysqli_connect_error());
  }

  if (isset($_POST['submit'])) {

    //information for user
    $users_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['confirmPassword']);

    //check if the email exists in the users database
    $query = "SELECT * FROM customers WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
      // The email already exists in the database
      echo "An account with this email already exists";
      exit();
    }

    // Check if passwords match
    if ($password != $confirmPassword) {
      echo "Error: Passwords do not match";
      exit();
    }

    // Check password length
    if (strlen($password) < 8) {
      echo "Error: Password must be at least 8 characters long";
      exit();
    }

    // Start transaction
    mysqli_begin_transaction($conn);

    // Insert into users table
    $query1 = "INSERT INTO customers (user_id, Name, Book_Name, Email, password) VALUES ('$user_id', '$Name', '$Book_name', '$Email', '$password')";
    if (!mysqli_query($conn, $query1)) {
      echo "Error: " . $query1 . "<br>" . mysqli_error($conn);
      mysqli_rollback($conn);
      exit();
    }

    $queryId = "SELECT * FROM customers WHERE email = '$email'";
    $resultId = mysqli_query($conn, $queryId);
    $row = mysqli_fetch_assoc($resultId);
    $user_id = $row['user_id'];


    // Commit transaction
    mysqli_commit($conn);

    echo "New record created successfully";

    header("Location: LoginPage.php");
  }
  ?>
</body>

</html>