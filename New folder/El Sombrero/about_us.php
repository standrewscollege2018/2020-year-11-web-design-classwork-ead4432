<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>El Sombrero About Us</title>
    <link rel="stylesheet" href="el_sombrero.css">
  </head>
  <body>
    <?php
      if(isset($_GET['groovy'])) {
        echo '<marquee behavior="scroll" scrollamount="10 direction="up">';
      }
     ?>
      <div class="body">
        <div class="left-column">
           <marquee behavior="scroll" scrollamount="30" direction="up" >
                 <img src="leader.jpg" alt="our leader">
                 <img src="leader.jpg" alt="our leader">
                 <img src="leader.jpg" alt="our leader">
                 <a href="hehe.php"> <img src="leader.jpg" alt="our leader"></a>
                 <img src="leader.jpg" alt="our leader">
                 <img src="leader.jpg" alt="our leader">
                 <img src="leader.jpg" alt="our leader">
                 <img src="leader.jpg" alt="our leader">
                 

               </marquee>;
        </div>
        <div class="mid-column">
          <div class="title">
            <h1>El Sombrero</h1>
            <div class="account">
              <input type="checkbox" id="nav-toggle">
              <label for="nav-toggle" class="user_icon">
                <i class="fas fa-user-circle"></i>

            </div>
          </div>
          <div class="navbar">
            <p><a href="index.php?groovy=go">Get groovy</a> | <a href="index.php">Stop<a/> | <a href="menu.php">Menu</a> | <a href="log_in.php">Log In</a>
            </p>

          </div>
          <div class="main_content">
            <h2>Our glorious leader</h2>
            <img src="leader.jpg" alt="our leader">
          </div>
        </div>
        <div class="right-column">
          <marquee behavior="scroll" scrollamount="30" direction="up" scrollamount="30">
            <img src="leader.jpg" alt="our leader">
            <img src="leader.jpg" alt="our leader">
            <img src="leader.jpg" alt="our leader">
            <img src="leader.jpg" alt="our leader">
            <img src="leader.jpg" alt="our leader">
            <img src="leader.jpg" alt="our leader">
            <img src="leader.jpg" alt="our leader">
            <img src="leader.jpg" alt="our leader">
          </marquee>
        </div>
      </div>
      <?php
        if(isset($_GET['groovy'])) {
          echo '</marquee>';
        }
       ?>
  </body>
</html>
