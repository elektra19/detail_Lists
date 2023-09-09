
<?php
include_once __DIR__ . '/layouts/header.php';
include_once __DIR__ . '/controller/tutorialsController.php';


$tuto_controller = new tutorialsController();
$iostutorials = $tuto_controller->getIOSDetail();

?>

<div class="container mt-3">
<div class="card bg-dark text-white">
    <div class="card-body">
      <h3>IOS Detail List</h3>
    </div>
  </div>
  <br>
  <?php
 
 if (!empty($iostutorials)) { // Check if there is data in $basictutorials
   foreach ($iostutorials as $row) {
     echo '<div class="card bg-primary text-white">';
     echo '<div class="card-body">' . $row["title"] . '</div>'; // Replace "title" with the actual column name containing your data
     echo '</div>';
     echo '<br>';
   }
 } else {
   echo "No data found in the database.";
 }
?>
</div>

<?php
include_once __DIR__ . '/layouts/footer.php';
?>