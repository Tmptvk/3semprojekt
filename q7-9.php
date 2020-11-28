<?php session_start() ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include 'psecs/head.php';?>
    <script defer src="javascript/li2.js" charset="utf-8"></script>
      <script src="javascript/updown.js" defer></script>

    <title></title>
  </head>
  <body>
    <form  action="final-10.php" method="get">
    <div class="bodywrapper">
      <div class="bgwrapper4">
          <!--baggrund to biledder, i et grid, det ene over det andet, brug z indeks, og øverste billed hus-->
          <div class="Cecilia">
            <img src="media\Guru1.png" alt="">
          </div>
          <div class="Malik">
            <img src="media\guru-2.png" alt="">
          </div>
          <div class="Sarah">
            <img src="media\guru-3.png" alt="">
          </div>
          <div class="paperwrapper5">
            <div class="counterwrapper">
              <p>7/7</p>
            </div>
            <div class="headingwrapper">
              <h1>Valg af udfordrings niveau</h1>
            </div>

            <div class="txtwrapperit">
              <!--Udskriftlig tekst-->
              <p>
                Template
              </p>
            </div>
            <div class="selectwrapper">
            <ul>
              <label id="q7-1" class="listwrapper3">Lige ud af vejen<input  type ="checkbox" value="1" name="select-q7[]" ><span class="underline"></span> </label>
              <label id="q7-2" class="listwrapper3">Lidt op af bakke<input  type ="checkbox" value="2" name="select-q7[]" ><span class="underline"></span> </label>
              <label id="q7-3" class="listwrapper3">Helt op af bakke<input type ="checkbox" value="3" name="select-q7[]" ><span class="underline"></span> </label>



            </ul>
            </div>
            <div class="btnwrapper3">
           <a href="q6-8.php"> <button class="tilbage btn-style" type="button" name="btn-start">Tilbage</button> </a>
          </div>
            <div class="btnwrapper2">
              <input type ="submit" class="videre btn-style" name="btn-videre" value="Videre">
          </div>

          </div>
      </div>
    </div>
  </body>
</html>

<?php


if (isset($_GET['select-q7'])) {
  echo "yay";
$checked = $_GET['select-q7'];

//if more than one option is chosen but not all
if (count($checked) > 1 and count($checked) < 3) {
  $first = $checked[0];
  $other ="";

  for($i=1; $i < count($checked); $i++){
      $other = $other . " OR GameChallengeID = " . $checked[$i];
  }

  $_SESSION['challengeSelect'] = " AND (GameChallengeID = " . $first . $other . ")";
}

// if only 1 is chosen
elseif (count($checked) == 1) {
  $_SESSION['challengeSelect'] = " AND GameChallengeID = " . $checked[0];

}

// if all or none are chosen
else {
  $_SESSION['challengeSelect'] = "";
}
  echo $_SESSION['challengeSelect'];

}
else {
  $_SESSION['challengeSelect'] = "";
  echo $_SESSION['challengeSelect'];
}
?>
