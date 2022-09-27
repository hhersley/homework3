<?php require_once('header.php'); ?>

  <body>
<div class="card-group">
    <?php
$servername = "localhost";
$username = "hahersle_homework3";
$password = "Hello10513!!";
$dbname = "hahersle_homework3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 $sid = $_GET['id'];
      $sql = "SELECT S.series_id, series_name, title, image from Series S join Book B on S.series_id = B.series_id where S.series_id=" . $sid;


$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
     <h1>Books in <?php . $sid ?></h1>
  
   <div id="card" class="card"  style="width: 15rem; height: 30rem;">
  <img  src=<?=$row["image"]?> class="card-img-top" alt="...">
  <div  class="card-body">
    <h5 class="card-title"><?=$row["title"]?></h5>
  </div>

  </div>
    </div>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
      </card-group>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
    
