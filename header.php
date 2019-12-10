<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <!-- link to css -->
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">
  <title>Home</title>
</head>

<body>
  <header>
    <nav>
      <a href="index.php" class="logo">
        <img src="img/logo-x2.png" alt="Logo" />
      </a>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Zonvakantie</a></li>
        <li><a href="#">Vliegtickets</a></li>
        <li><a href="#">Stedentrip</a></li>
      </ul>
    </nav>
    <div class="login-logout">
      <form action="includes/login.inc.php" method="POST">
        <input class="sy-input" type="text" name="mailuid" placeholder="Username/E-mail..." />
        <input class="input sy-input" type="password" name="pwd" placeholder="password..." />
        <button class="button" type="submit" name="login-submit">Login</button>
      </form>
      <a class="button signup-bt" href="signup.php">Signup</a>
      <form action="includes/logout.inc.php" method="POST">
        <button class="button" type="submit" name="logout-submit">Logout</button>
      </form>
    </div>
  </header>