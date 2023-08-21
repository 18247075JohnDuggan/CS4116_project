<!DOCTYPE html>
<html lang="en">

<head>
  <title> BookStore | Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel ="stylesheet" href = "login.css" >
  <link rel ="stylesheet" href = "content.css" >
  <link rel ="stylesheet" href = "menu.css" >
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
          <a class="brand" href="index.php" style="border-right: none;">BookStore</a>
        </div>
      </div>
    </div>

    <div id="content">
      <div id="loginPage">

        <div class="container-fluid">
          <div class="row justify-content-center align-items-center">
            <div id="login-box">
              <h2>Welcome!</h2>
                <form method="post">
                <h1>Login</h1>
                <div>
                    <label for="Email"> Email:</label>
                    <input type="Email" name="Email" id="Email">
                </div>
                <div>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password">
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="login"><a href="profilepage.php"> login </a></button>
                <a id="link" href="SignUp.php">New? Create an account now!</a>
                </br>            
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>