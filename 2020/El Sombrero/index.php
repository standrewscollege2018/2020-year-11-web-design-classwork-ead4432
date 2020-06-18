<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/fdce1b35a4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="el_sombrero.css">
    <title>El Sombrero</title>
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
                 <img src="sombrero_cat.gif" alt="Cat gif" class="cat">
                 <img src="sombrero_cat.gif" alt="Cat gif" class="cat">
                 <img src="sombrero_cat.gif" alt="Cat gif" class="cat">
                 <a href="hehe.php"> <img src="sombrero_cat.gif" alt="Cat gif" class="cat"></a>
                 <img src="sombrero_cat.gif" alt="Cat gif" class="cat">
                 <img src="sombrero_cat.gif" alt="Cat gif" class="cat">
                 <img src="sombrero_cat.gif" alt="Cat gif" class="cat">
                 <img src="sombrero_cat.gif" alt="Cat gif" class="cat">
               </marquee>;
        </div>
        <div class="mid-column">
          <div class="bannercontainer">
            <div class="title">
              <h1>El Sombrero</h1>
              <div class="account">
                <input type="checkbox" id="nav-toggle">
                <label for="nav-toggle" class="user_icon">
                  <i class="fas fa-user-circle"></i>

              </div>
            </div>
            <div class="navbar">
              <p><a href="index.php?groovy=go">Get groovy</a> | <a href="index.php">Stop<a/> |
                <a href="menu.php">Menu</a> | <a href="log_in.php">Log In</a> |
                 <a href="about_us.php">About Us</a> | <a href="sign_up.php">Create An Account</a>
              </p>
            </div>
          </div>
          <div class="Whats_On">

              <div class="picture">
              <img src="whats_on.jpg" alt="Whats on" class="picture">
            </div>
            <div class="text">
              <marquee direction="down">The description goes here.</marquee>
              <h2>Whats on</h2>
            </div>
          </div>
          <div class="Specials">
            <div class="text">
              <p>The description goes here</p>
              <h2>Specials go here</h2>
            </div>
            <div class="picture">

              <img src="specials.jpg" alt="Our Specials" class="picture">
            </div>
          </div>
          <div class="Our_Vibe">

            <div class="picture">
              <img src="vibe.jpg" alt="Our Vibe" class="picture">
            </div>
            <div class="text">
              <p>The description goes here</p>
              <h2>Our Vibe</h2>
            </div>
          </div>
          <div class="Picture">
            <img src="picture.jfif" alt="Restaurant" class="picture">
          </div>
        </div>
        <div class="right-column">
          <marquee behavior="scroll" scrollamount="30" direction="up" scrollamount="30">
            <img src="sombrero_cat.gif" alt="Cat gif">
            <img src="sombrero_cat.gif" alt="Cat gif">
            <img src="sombrero_cat.gif" alt="Cat gif">
            <img src="sombrero_cat.gif" alt="Cat gif">
            <img src="sombrero_cat.gif" alt="Cat gif">
            <img src="sombrero_cat.gif" alt="Cat gif">
            <img src="sombrero_cat.gif" alt="Cat gif">
            <img src="sombrero_cat.gif" alt="Cat gif">
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
