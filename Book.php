<?php require_once('header.php'); ?>

  <body>
    
    <h1>Homework 3</h1>
    <h1>All Books</h1>
    
<table class="table table-striped">
  <thead>
    <tr>
      <th>Book ID</th>
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

$sql = "SELECT book_id, title from Book";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td><?=$row["book_id"]?></td>
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
