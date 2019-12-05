<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- link to css -->
    <link rel="stylesheet" href="/css/main-style.css" />
    <title>Home</title>
  </head>

  <body>
    <header>
      <nav>
        <a href="index.php">
          <img src="/img/logo-x1.png" alt="Logo" />
        </a>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">Zonvakantie</a></li>
          <li><a href="#">Vliegtickets</a></li>
          <li><a href="#">Stedentrip</a></li>
        </ul>
        <div>
          <form action="includes/login.inc.php" method="POST">
            <input
              type="text"
              name="mailuid"
              placeholder="Username/E-mail..."
            />
            <input type="password" name="pwd" placeholder="password..." />
            <button type="submit" name="login-submit">Login</button>
          </form>
          <a href="signup.php">Signup</a>
          <form action="includes/logout.inc.php" method="POST">
            <button type="submit" name="logout-submit">Logout</button>
          </form>
        </div>
      </nav>
    </header>
  </body>
</html>
