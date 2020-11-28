<?php session_start() ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include 'psecs/head.php';?>
      <script src="javascript/updown.js" defer></script>
    <title></title>
  </head>
  <body>
    <form  action="q3-5.php" method="get">


    <div class="bodywrapper">
      <div class="bgwrapper3">
          <!--baggrund to biledder, i et grid, det ene over det andet, brug z indeks, og øverste billed hus-->
          <div class="paperwrapper2">
            <div class="counterwrapper">
              <p>2/7</p>
            </div>
            <div class="headingwrapper">
              <h1>Hvor lang tid må spillet tage?</h1>
            </div>
            <div class="arrow-upwrapper">
              <div class="pilop">
                <img id="pilopimg"src="media\Pil-op.png" alt="">

              </div>

            </div>
            <div class="selectwrapper">
            <ul>
              <label class="listwrapper2">Under 30 min.<input id="q2-1" type ="checkbox" value="1" name="select-q2[]" ><span class="underline"></span> </label>
              <label class="listwrapper2">30 - 60 min.<input id="q2-2" type ="checkbox" value="2" name="select-q2[]" ><span class="underline"></span> </label>
              <label class="listwrapper2">60 -120 min.<input id="q2-3" type ="checkbox" value="3" name="select-q2[]" ><span class="underline"></span> </label>
              <label class="listwrapper2">Over 120 min.<input id="q2-4" type ="checkbox" value="4" name="select-q2[]" ><span class="underline"></span> </label>
            </ul>
            </div>
            <div class="arrow-downwrapper">
              <div class="nedad">
                <img id="pilnedimg"src="media\Pil-ned.png" alt="">
              </div>

            </div>
            <div class="btnwrapper3">
           <a href="q1-3.php"> <button type="button"  class="tilbage btn-style" name="btn-videre">Tilbage</button> </a>
          </div>
            <div class="btnwrapper2">
             <input type ="submit" class="videre btn-style" name="btn-videre" value="Videre">
          </div>

          </div>
      </div>
    </div>
    </form>
  </body>
</html>
<?php


if (isset($_GET['select-q2'])) {
  echo "yay";
$checked = $_GET['select-q2'];

//if more than one option is chosen but not all
if (count($checked) > 1 and count($checked) < 4) {
  $first = $checked[0];
  $other ="";

  for($i=1; $i < count($checked); $i++){
      $other = $other . " OR PTimeID = " . $checked[$i];
  }

  $_SESSION['pTimeSelect'] = " AND (PTimeID = " . $first . $other . ")";
}

// if only 1 is chosen
elseif (count($checked) == 1) {
  $_SESSION['pTimeSelect'] = " AND PTimeID = " . $checked[0];

}

// if all or none are chosen
else {
  $_SESSION['pTimeSelect'] = "";
}
  echo $_SESSION['pTimeSelect'];

}
else {
  $_SESSION['pTimeSelect'] = "";
}
?>
