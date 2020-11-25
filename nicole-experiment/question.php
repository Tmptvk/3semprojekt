<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="get">
        <input type="checkbox" name="options[]" value="1"/> Politics<br/>
        <input type="checkbox" name="options[]" value="2"/> Movies<br/>
        <input type="checkbox" name="options[]" value="3"/> World<br/>
        <input type="submit" value="Go!" />
    </form>
  </body>
</html>


<?php
$checked = $_GET['options'];

if (count($checked) > 1) {
  $first = $checked[0];
  $other ="";

  for($i=1; $i < count($checked); $i++){
      $other = $other . " OR Pstyle = " . $checked[$i];
  }

  $_SESSION['pstyleselect'] = "(PStyle = " . $first . $other . ")";
  echo $_SESSION['pstyleselect'];
}

//for($i=1; $i < count($checked); $i++){
//    echo $checked[$i];
//}
echo "<br>";
echo count($checked);
?>
