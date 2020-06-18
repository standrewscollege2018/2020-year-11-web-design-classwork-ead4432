
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/fdce1b35a4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="results.css">
    <title>Zoo</title>
  </head>
  <body>
      <div class="body">
        <div class="left-column">
           <marquee behavior="scroll" scrollamount="30" direction="up" >
                <img src="tiger.gif" alt="tiger gif">
                <img src="tiger.gif" alt="tiger gif">
                <img src="tiger.gif" alt="tiger gif">
                <img src="tiger.gif" alt="tiger gif">
                <img src="tiger.gif" alt="tiger gif">
                <img src="tiger.gif" alt="tiger gif">
                <img src="tiger.gif" alt="tiger gif">
                <img src="tiger.gif" alt="tiger gif">
               </marquee>
        </div>
        <div class="mid-column">
          <div class="title">
            <h1>Zoo Search For animals</h1>
          </div>
          <?php
            include 'navbar.php';
           ?>
          <div class="card">
            <div class="card">
                  <form action="searchresults.php" method="post">
                    <p>Enter Animal:
                    <input type="text" name="animalsearch" placeholder="Enter Animal Species"></p>
                    <button type="submit" name="button">Go</button>
                  </form>

            </div>
          </div>
        </div>
        <div class="right-column">
          <marquee behavior="scroll" scrollamount="30" direction="up" scrollamount="30">
            <img src="tiger.gif" alt="tiger gif">
            <img src="tiger.gif" alt="tiger gif">
            <img src="tiger.gif" alt="tiger gif">
            <img src="tiger.gif" alt="tiger gif">
            <img src="tiger.gif" alt="tiger gif">
            <img src="tiger.gif" alt="tiger gif">
            <img src="tiger.gif" alt="tiger gif">
            <img src="tiger.gif" alt="tiger gif">
          </marquee>
        </div>
      </div>

  </body>
</html>
