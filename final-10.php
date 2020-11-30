<?php session_start() ?>
<?php
echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';

echo $_SESSION['numPlayersSelect'];


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

$numPlayersSelect = $_SESSION['numPlayersSelect'];
$pTimeSelect = $_SESSION['pTimeSelect'];
$pStyleSelect = $_SESSION['pStyleSelect'];
$genreSelect = $_SESSION['genreSelect'];
$challengeSelect = $_SESSION['challengeSelect'];
echo $numPlayersSelect;

$sql = "SELECT ga.GameID, ga.Name FROM games AS ga INNER JOIN gamegenre AS gg ON ga.GameID = gg.GameID WHERE MinPlayers <= $numPlayersSelect AND MaxPlayers >= $numPlayersSelect $pTimeSelect $genreSelect $challengeSelect;";
echo $sql;
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo $row['GameID'] . "<br>";
    echo $row['Name'] . "<br>";
  }

}
else {
  echo "0 results";

}

$conn->close();


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include 'psecs/head.php';?>
    <title></title>
  </head>
  <body>
    <div class="bodywrapper">
      <div class="bgwrapper3">
          <!--baggrund to biledder, i et grid, det ene over det andet, brug z indeks, og øverste billed hus-->
          <div class="Cecilia">
          </div>
          <div class="Malik">
          </div>
          <div class="Sarah">
          </div>
          <div class="paperwrapper6">
            <div class="headingwrapper">
              <h1>Pappa anbefaler</h1>
            </div>
            <div class="txtwrapperit">
              <!--Udskriftlig tekst-->
              <p>
                Et par spil er nu valgt helt specielt til jer!
              </p>
            </div>
            <div class="displaywrapper">

            </div>
            <div class="btnwrapper3">
           <a href="q7-9.php"> <button  class="tilbage btn-style" type="button" name="btn-start">Tilbage</button> </a>
          </div>
            <div class="btnwrapper2">
           <a href="index.php"> <button type="button" class="tilbage-til-start btn-style2 "name="btn-start">Til start</button> </a>
          </div>

          </div>
      </div>
    </div>
  </body>
</html>
