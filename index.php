<?php require_once('header.php'); ?>

  <body>
    
    <h2>Book Series</h2>
    
<table class="table table-striped">
  <thead>
    <tr>
      <th>Series ID</th>
      <th>Name</th>
      <th>Main Character</th>
    </tr>
  </thead>
  <tbody>
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

$sql = "SELECT series_id, series_name, main_character from Series";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["series_id"]?></td>
    <td><a href="Series-Book.php?id=<?=$row["series_id"]?>"><?=$row["series_name"]?></a></td>
    <td><?=$row["main_character"]?></td>
  </tr>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
      </tbody>
    </table>
    
    
