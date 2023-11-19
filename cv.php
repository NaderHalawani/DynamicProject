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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CV</title>
    <link rel="stylesheet" href="style/cvstyle.css" type="text/css" />
  </head>
  <body>
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
    <div class="resume-box">
      <div class="left-section">
        <div class="profile">
          <img src="images/image1.jpg" class="profile-img" />
          <div class="blue-box"></div>
        </div>
        <h2 class="name">
          Nader
          <br />
          <span>Halawani</span>
        </h2>
        <p class="paragraph">Software Developer</p>

        <div class="info">
          <p class="heading">Info</p>
          <p class="p1">
            <span class="span1"><img src="images/location.png" /></span>
            Address
            <span>
              <br />
              Beirut Lebanon
            </span>
          </p>
          <p class="p1">
            <span class="span1"><img src="images/call.png" /></span>
            Phone
            <span>
              <br />
              +961 81 216 978
            </span>
          </p>
          <p class="p1">
            <span class="span1"><img src="images/email.png" /></span>
            Email
            <span>
              <br />
              naderhalawani@outlook
            </span>
          </p>
          <p class="p1">
            <span class="span1"><img src="images/website.png" /></span>
            Github
            <span>
              <br />
              NaderHalawani
            </span>
          </p>
        </div>

        <div class="info">
          <p class="heading">Social</p>
          <p class="p1">
            <span class="span1"><img src="images/instagram.png" /></span>
            Instagram
            <span>
              <br />
              naderhalawanii
            </span>
          </p>
          <p class="p1">
            <span class="span1"><img src="images/linkedin.png" /></span>
            Linkedin
            <span>
              <br />
              Nader Halawani
            </span>
          </p>
          <p class="p1">
            <span class="span1"><img src="images/threads.png" /></span>
            Threads
            <span>
              <br />
              naderhalawanii
            </span>
          </p>
          <p class="p1">
            <span class="span1"><img src="images/Facebook.png" /></span>
            Facebook
            <span>
              <br />
              Nader Halawani
            </span>
          </p>
        </div>
      </div>

      <div class="right-section">
        <div class="right-heading">
          <img src="images/user.png" />
          <p class="p2">Profile</p>
        </div>
        <p class="p3">
          I am a passionate Senior Computer Science student always seeking to
          learn and enhance my skills in the field, either through self-learning
          or university.
        </p>
        <div class="clearfix"></div>
        <br />
        <br />
        <div class="right-heading">
          <img src="images/work.png" />
          <p class="p2">Work Experience</p>
        </div>
        <div class="clearfix"></div>
        <div class="lr-box">
          <div class="left">
            <p class="p4">Aug 2023 - Present</p>
            <p class="p5">Remote</p>
          </div>
          <div class="right">
            <p class="p4">Full-Stack .NET Web Developer Internship</p>
            <p class="p5" style="margin-bottom: 5px">
              Integrated Digital Systems (IDS)
            </p>
            <p class="p5">
              At IDS, I created a Room Reservation System using .Net, Angular,
              and MSSQL, demonstrating my expertise in software development and
              database management.
            </p>
          </div>
          <div class="clearfix"></div>
        </div>
        <br />
        <div class="right-heading">
          <img src="images/book.png" />
          <p class="p2">Education</p>
        </div>
        <div class="clearfix"></div>
        <div class="lr-box">
          <div class="left">
            <p class="p4">2021-2024</p>
            <p class="p5">Beirut, Lebanon</p>
          </div>
          <div class="right">
            <p class="p4">Bachelors in Computer Science</p>
            <p class="p5">Lebanese American University (LAU)</p>
          </div>
          <div class="clearfix"></div>
        </div>

        <div class="lr-box">
          <div class="left">
            <p class="p4">2021</p>
            <p class="p5">Lebanon</p>
          </div>
          <div class="right">
            <p class="p4">Lebanese Baccalaureate (Life Science)</p>
            <p class="p5">International Horizon School</p>
          </div>
          <div class="clearfix"></div>
        </div>

        <br />
        <div class="right-heading">
          <img src="images/skills.png" />
          <p class="p2">Skills and Expertise</p>
        </div>
        <div class="clearfix"></div>

        <div class="s-box">
          <p class="p6">Python</p>
          <div id="progress"></div>
          <p class="p6">Java</p>
          <div id="progress1"></div>
        </div>

        <div class="s-box">
          <p class="p6">C++</p>
          <div id="progress2"></div>
          <p class="p6">C</p>
          <div id="progress3"></div>
        </div>

        <div class="s-box" style="padding-top: 0px">
          <p class="p6">Html</p>
          <div id="progress4"></div>

          <p class="p6">CSS</p>
          <div id="progress5"></div>
        </div>

        <div class="s-box" style="padding-top: 0px">
          <p class="p6">.NET (C#)</p>
          <div id="progress6"></div>

          <p class="p6">SQL</p>
          <div id="progress7"></div>
        </div>

        <div class="clearfix"></div>
        <br />
        <br />
        <div class="right-heading">
          <img src="images/project.png" />
          <p class="p2">Activities</p>
        </div>
        <div class="clearfix"></div>

        <div class="lr-box">
          <div class="left">
            <p class="p4">2023</p>
            <p class="p5">Beirut, Lebanon</p>
          </div>
          <div class="right">
            <p class="p4">
              Ranked 19th out of 60+ teams in the Lebanese Collegiate
              Programming Contest (LCPC)
            </p>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="lr-box">
          <div class="left">
            <p class="p4">2021-Present</p>
            <p class="p5">Beirut, Lebanon</p>
          </div>
          <div class="right">
            <p class="p4">Member of the Computer Science Club at LAU</p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </body>
</html>
