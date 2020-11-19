<?php
print_r($_POST);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include 'psecs/head.php';?>
    <script src="javascript/li.js" defer></script>
    <title></title>
  </head>
  <body>
    <form action="q2-4.php" method="post">
    <div class="bodywrapper">
      <div class="bgwrapper3">
          <!--baggrund to biledder, i et grid, det ene over det andet, brug z indeks, og øverste billed hus-->
          <div class="paperwrapper2">
            <div class="counterwrapper">
              <p>1/7</p>
            </div>
            <div class="headingwrapper">
              <h1>Velkommen, <br>
              hvor mange bliver I?</h1>
            </div>
            <div class="selectwrapper">
            <ul>
              <li id="q1-1" class="listyle">1</li>
              <li id="q1-2" class="listyle">2</li>
              <li id="q1-3" class="listyle">3</li>
              <li id="q1-4" class="listyle">4</li>
              <li id="q1-5" class="listyle">5</li>
              <li id="q1-6" class="listyle">6</li>
              <li id="q1-7" class="listyle">7</li>
              <li id="q1-8" class="listyle">8</li>
              <li> <input type ="checkbox" name="amount[1]" ></li>
              <li> <input type ="checkbox" name="amount[2]" ></li>
            </ul>
            </div>
            <div class="btnwrapper3">
           <a href="house2.php"> <button type="button" class="tilbage btn-style" name="btn-tilbage">Tilbage</button> </a>
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
