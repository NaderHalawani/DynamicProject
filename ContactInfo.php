<!DOCTYPE html>

<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:index.php");
    }
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Contact Information</title>
    <link rel="stylesheet" href="style/cistyle.css" />
  </head>
  <body>
    <div id="cont">
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
      <div id="contact-info">
        <h1>My Contact Details</h1>
        <ul>
          <li>
            <a href="https://www.facebook.com/profile.php?id=100003332898422">
              Facebook
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/naderhalawanii/">Instagram</a>
          </li>
          <li>
            <a href="https://www.linkedin.com/in/nader-halawani-a1a324258/">
              LinkedIn
            </a>
          </li>
          <li>Phone Number: +961 81 216 978</li>
        </ul>
        <hr />
      </div>
    </div>
  </body>
</html>
