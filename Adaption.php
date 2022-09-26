<?php require_once('header.php'); ?>

  <body>
    
    <h1>Homework 3</h1>
    <h1>Book Series</h1>
    
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

$sql = "SELECT adaption_id, title, main_actor, main_character, format, year from Adaption A Join Book B on A.book_id = B.book_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["adaption_id"]?></td>
    <td><?=$row["title"]?></td>
    <td><?=$row["main_actor"]?></td>
    <td><?=$row["main_character"]?></td>
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
