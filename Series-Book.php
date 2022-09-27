<?php require_once('header.php'); ?>

  <body>
    $sid = $_GET['id'];
    <h1>Books in <?$sid?></h1>
    
<table class="table table-striped">
  <thead>
    <tr>
      <th>Series ID</th>
      <th>Series Name</th>
      <th>Main Character</th>
            <th>Title</th>

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

      $sql = "SELECT S.series_id, series_name, main_character, title from Series S join Book B on S.series_id = B.series_id where S.series_id=" . $sid;


$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["series_id"]?></td>
    <td><?=$row["series_name"]?></td>
    <td><?=$row["main_character"]?></td>
        <td><?=$row["title"]?></td>

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
    
