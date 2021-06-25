<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>

    <?php
    $username = "";
      if (isset($_COOKIE["username"])) {
        $username = $_COOKIE["username"];
      }
      $username = strtoupper($username);
      echo "<h2>WELCOME $username</h2>";
      echo "<br>";
      echo "<h3>User Details</h3>";
      $user = json_decode($_COOKIE["user"]);

      foreach($user as $key => $value)
      {
        if ($key != "username" and $key != "password") {
          $key = ucwords($key);
          echo "<p>$key: $value</p>";
        }
      }
    ?>

  </body>
</html>