<link rel="stylesheet" href="results.css">
<div class="navbar">
  <p>Welcome to our search page where you can seach for any of the animals in our database <br> or you can select what habitat you want to see the results for. </p>
  <?php
    include 'dbconnect.php';
    $habitatnav_sql = "SELECT* FROM habitat";
    $habitatnav_qry = mysqli_query($dbconnect, $habitatnav_sql);
    $habitatnav_aa = mysqli_fetch_assoc($habitatnav_qry);
    ?>
    <p>
    <?php
    do {
      $habitat_button = $habitatnav_aa['habitat'];
      $habitat_id = $habitatnav_aa['habitatid'];
      echo " <a  href='results.php?habitatid=$habitat_id'>$habitat_button</a>  |";
    } while ($habitatnav_aa = mysqli_fetch_assoc($habitatnav_qry));

   ?>
 </p>
</div>
