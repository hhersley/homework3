<?php require_once('header.php'); ?>

    
<table class="table table-striped">
  <thead>
    <tr>
      <th>Author ID</th>
      <th>Name</th>
      <th>Series</th>
        <th>Book title</th>
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

$sql = "SELECT A.author_id, author_name, series_name, title FROM Author A Join Series S on A.author_id = S.author_id Join Book B on S.series_id = B.series_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["author_id"]?></td>
    <td><?=$row["author_name"]?></td>
    <td><?=$row["series_name"]?></td>
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
