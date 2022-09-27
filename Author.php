

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

$sql = "SELECT author_id, author_name from Author";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
 ?>
   <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?=$row["author_name"]?></h5>
      <p class="card-text"><ul>
<?php
    $section_sql = "SELECT series_name FROM Author A Join Series S on A.author_id = S.author_id where S.author_id=" . $row["author_id"];
    $section_result = $conn->query($section_sql);
    
    while($section_row = $section_result->fetch_assoc()) {
      echo "<li>" . $section_row["series_name"] . "</li>";
       
    }
?>
      </ul></p>
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

<h1> Looking for a specific book?</h1>
 <form action="handlepost.php" method="post">
Name: <input type="text" name="name"><br>
Title: <input type="text" name="title"><br>
<input id="submit" type="submit">
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
   
