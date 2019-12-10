<?php
require "header.php";
?>

<main>
  <section class="center">
    <br>
    <h1>Signup</h1><br>
    <form action="includes/signup.inc.php" method="POST">
      <input type="text" name="uid" placeholder="Username" />
      <input type="email" name="mail" placeholder="E-mail" />
      <input type="password" name="pwd" placeholder="Password" />
      <input type="password" name="pwd-repeat" placeholder="Repeat password" />
      <button type="submit" name="signup-submit">Signup</button>
    </form>
  </section>
</main>

<?php
require "footer.php";
?>