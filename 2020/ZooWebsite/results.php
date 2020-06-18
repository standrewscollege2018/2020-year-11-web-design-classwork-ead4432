<?php
  include 'dbconnect.php';

 ?>
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
          <?php
            include 'column.php';
           ?>
        </div>
        <div class="mid-column">
          <div class="title">
            <h1>Zoo Search For animals Results</h1>
            <?php
              include 'navbar.php';
             ?>
             
          </div>
          <div class="navbar">

            <?php
              if (!isset($_GET['habitatid'])) {
                header('Location: search.php');
              }else {
                $habitatid = $_GET['habitatid'];
                $link_sql = "SELECT animals.*, habitat.habitat, species.species FROM animals
                             JOIN habitat ON animals.habitatid=habitat.habitatid
                             JOIN species ON animals.speciesid=species.speciesid
                             WHERE animals.habitatid=$habitatid";

                $link_qry = mysqli_query($dbconnect, $link_sql);
                if(mysqli_num_rows($link_qry)==0) {

                  echo "<h2> NO RESULTS FOUND </h2>";
                } else {
                  $link_aa = mysqli_fetch_assoc($link_qry);

                  do {
                      $habitat = $link_aa['name'];
                      $species = $link_aa['species'];
                      echo "<h1>$habitat the $species</h1>";
                  } while ($link_aa = mysqli_fetch_assoc($link_qry));
              }
            }
            ?>
          </div>
          <div class="main-content">
            <div class="resultstable">

            </div>
          </div>
        </div>
        <div class="right-column">
          <?php
            include 'column.php';
           ?>
        </div>
      </div>
  </body>
</html>
