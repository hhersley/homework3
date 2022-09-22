<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homework3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
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
$username = "hahersle_homework3	";
$password = "5n0Y4@&_COA!";
$dbname = "hahersle_homework3	";

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
    <td><?=$row["series_name"]?></td>
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
    <h1>Hello, world!</h1>
    
    
