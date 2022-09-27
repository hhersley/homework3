<?php require_once('header.php'); ?>

    
<table class="table table-striped">
  <thead>
    <tr>
      <th>Adaptation ID</th>
      <th>Title</th>
      <th>Format</th>
      <th>Year</th>
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

$sql = "SELECT adaptation_id, format, year from Adaptation";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["adaptation_id"]?></td>
          <td><?=$row["format"]?></td>
          <td><?=$row["year"]?></td>


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
    
