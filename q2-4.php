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
                <li id="q2-1"> <input type ="checkbox" name="amount[1]" > Under 30 .min</li>
                <li id="q2-2"> <input type ="checkbox" name="amount[2]" >30 - 60 .min</li>
                <li id="q2-3"> <input type ="checkbox" name="amount[3]" >60 - 120 .min</li>
                <li id="q2-4"> <input type ="checkbox" name="amount[3]" >Over 120 .min</li>
            </ul>
            </div>
            <div class="btnwrapper3">
           <a href="q1-3.php"> <button type="button"  class="tilbage btn-style" name="btn-videre">Tilbage</button> </a>
          </div>
            <div class="btnwrapper2">
           <a href="q3-5.php"> <button type="button" class="videre btn-style" name="btn-videre">Videre</button> </a>
          </div>

          </div>
      </div>
    </div>
    </form>
  </body>
</html>
