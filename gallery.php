<!DOCTYPE html>
<?php
    session_start();
    if (!isset($_SESSION["username"])){
        header("location:index.php");
    }
    $jsonData = file_get_contents('gallery.json');

    $images = json_decode($jsonData, true);

    if ($images === null) {
        die('Error decoding JSON file');
    }
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/gastyles.css" />
    <title>Gallery</title>
  </head>
  <body>
    <div class="container2">
      <span id="nav-bar-comp">
        <a href="main.php">Home</a>
        <a href="cv.php">CV</a>
        <a href="gallery.php">Gallery</a>
        <a href="ContactInfo.php">Contact Me</a>
      </span>
      <span id="right">
      <?php
        if (isset($_SESSION["username"])) {
            echo '<span id ="right">Welcome, ' . $_SESSION["firstname"] ;
            echo '<br><a href="be/logout.php" id = "logout">Logout</a></span>';
        }
      ?>
      </span>
    </div>

    <div class="gallery">

    <?php if (!empty($images)): ?>
      <?php foreach ($images as $image): ?>
        <a href="#<?php echo $image['id']; ?>" class="link">
          <div class="container">
            <img src="<?php echo $image['src']; ?>" alt="<?php echo $image['alt']; ?>" class="my-img" />
          </div>
        </a>

        <div class="lightbox" id="<?php echo $image['id']; ?>">
          <a href="#" class="close-button">&times;</a>
          <img src="<?php echo $image['src']; ?>" alt="<?php echo $image['alt']; ?>" />
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <p>No images found.</p>
    <?php endif; ?>
    
    </div>

  </body>
</html>
