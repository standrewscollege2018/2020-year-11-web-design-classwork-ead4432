<?php
  session_start();

  if(!isset($_SESSION['login'])) {
    header("Location: log_in.php");
  } else {
    $username = $_SESSION['login'];
  }
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <script src="https://kit.fontawesome.com/fdce1b35a4.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="el_sombrero.css">
     <title>El Sombrero</title>
   </head>
   <body>

       <div class="body">
         <div class="left-column">
            <marquee behavior="scroll" scrollamount="30" direction="up" >
                 <img src="flag.gif" alt="Flag gif">
                 <img src="flag.gif" alt="Flag gif">
                 <img src="flag.gif" alt="Flag gif">
                 <img src="flag.gif" alt="Flag gif">
                 <img src="flag.gif" alt="Flag gif">
                 <img src="flag.gif" alt="Flag gif">
                 <img src="flag.gif" alt="Flag gif">
                 <img src="flag.gif" alt="Flag gif">
                </marquee>;
         </div>
         <div class="mid-column">
           <div class="title">
             <h1>El Sombrero Log in</h1>
             <div class="account">
               <input type="checkbox" id="nav-toggle">
               <label for="nav-toggle" class="user_icon">
                 <i class="fas fa-user-circle"></i>
             </div>
           </div>
           <div class="navbar">
             <p><a href="log_in.php?groovy=go">Get groovy</a> | <a href="log_in.php">Stop<a/></p>

           </div>
           <div class="card">
             <?php
               echo "Welcome, $username";
              ?>
              <p><a href="logout.php">Logout</p>
               <a href="index.php">Home</a>
               <a href="menu.php">Order from home</a>
               <a href="booking.php">Book Now!</a>
           </div>
         </div>
         <div class="right-column">
           <marquee behavior="scroll" scrollamount="30" direction="up" scrollamount="30">
             <img src="flag.gif" alt="Flag gif">
             <img src="flag.gif" alt="Flag gif">
             <img src="flag.gif" alt="Flag gif">
             <img src="flag.gif" alt="Flag gif">
             <img src="flag.gif" alt="Flag gif">
             <img src="flag.gif" alt="Flag gif">
             <img src="flag.gif" alt="Flag gif">
             <img src="flag.gif" alt="Flag gif">
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
