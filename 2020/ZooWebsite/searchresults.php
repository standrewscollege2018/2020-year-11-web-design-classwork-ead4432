
<link rel="stylesheet" href="results.css">
<div class ="table">
<?php
  include("dbconnect.php");
  $animal = $_POST['animalsearch'];

  $search_sql = "SELECT* FROM animals WHERE speciesid=(SELECT speciesid FROM species WHERE species LIKE '%$animal%')";

  $search_qry = mysqli_query($dbconnect, $search_sql);

  if(mysqli_num_rows($search_qry)==0) {
    // header("Location: results.php?error=error");
    echo "empty";
  } else {
    $search_aa = mysqli_fetch_assoc($search_qry);

    do {
      $animal = $search_aa['name'];
      $habitat = $search_aa['habitatid'];
      $search_habitat_sql = "SELECT habitat FROM habitat WHERE habitatid = $habitat";
      $search_habitat_qry = mysqli_query($dbconnect, $search_habitat_sql);
      $search_habitat_sql = mysqli_fetch_assoc($search_habitat_qry);
      $animal_habitat = $search_habitat_sql['habitat'];



      ?>

        <div class="results">
          <p><?php echo "$animal"; ?></p>
          <p><?php echo "habitat = $animal_habitat"; ?></p>

        </div>

      <?php
    } while ($search_aa = mysqli_fetch_assoc($search_qry));
    // header("Location: results.php");
  }
 ?>
</div>
