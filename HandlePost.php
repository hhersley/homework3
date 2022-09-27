 <?php require_once('header.php'); ?>

  <body>
    Hello <?php echo $_POST["name"]; ?> !<br>
You are looking for: <?php echo $_POST["title"]; ?><br>
    
     <?php
    emptypost();
    ?>
    
   
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
 $title = $_POST["title"];

$sql = "Select title, image from Book where title=" . $title;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
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
  echo "So sorry, that isn't in our library!";
}
$conn->close();
?>
  </card-group>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
