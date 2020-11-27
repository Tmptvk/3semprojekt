<?php session_start() ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "boardgamequiz";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$genreSelect = $_SESSION['genreSelect'];
$genreSelect = $_SESSION['challengeSelect'];

$sql = "SELECT ga.GameID, ga.Name FROM games AS ga INNER JOIN gamegenre AS gg ON ga.GameID = gg.GameID WHERE MinPlayers <= 4 AND MaxPlayers >= 4 $genreSelect;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo $row['GameID'] . "<br>";
  }

}
else {
  echo "0 results";
}

$conn->close();
 ?>
