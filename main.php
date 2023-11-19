<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/style2.css" />

    <title>Document</title>
  </head>
  <body id="hero">
    <div id="bg">
      <div class="container2">
        <span id="nav-bar-comp">
          <a href="main.php">Home</a>
          <a href="cv.php">CV</a>
          <a href="gallery.php">Gallery</a>
          <a href="ContactInfo.php">Contact Me</a>
        </span>
        <?php
        if (isset($_SESSION["username"])) {
            echo '<span id ="right">Welcome, ' . $_SESSION["firstname"] ;
            echo '<br><a href="be/logout.php" id = "logout">Logout</a></span>';
        }
        ?>
      </div>
      <div class="hero container">
        <div>
          <h1>
            Hi there, I'm
            <span></span>
          </h1>
          <h1>
            Nader Halawani
            <span></span>
          </h1>
        </div>
      </div>
    </div>
  </body>
</html>
