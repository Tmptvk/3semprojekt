<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include 'psecs/head.php';?>
    <title></title>
  </head>
  <body>
    <form  action="q3-5.php" method="post">


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
            <div class="selectwrapper">
            <ul>
              <label class="listwrapper2">Under 30 min.<input id="q2-1" type ="checkbox" value="1" name="select-q2" ><span class="underline"></span> </label>
              <label class="listwrapper2">30 - 60 min.<input id="q2-2" type ="checkbox" value="1" name="select-q2" ><span class="underline"></span> </label>
              <label class="listwrapper2">60 -120 min.<input id="q2-3" type ="checkbox" value="1" name="select-q2" ><span class="underline"></span> </label>
              <label class="listwrapper2">Over 120 min.<input id="q2-4" type ="checkbox" value="1" name="select-q2" ><span class="underline"></span> </label>
            </ul>
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
