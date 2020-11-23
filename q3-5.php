<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include 'psecs/head.php';?>
    <title></title>
  </head>
  <body>
  <form  action="q4-6.php" method="post">
    <div class="bodywrapper">
      <div class="bgwrapper3">
          <!--baggrund to biledder, i et grid, det ene over det andet, brug z indeks, og øverste billed hus-->
          <div class="paperwrapper2">
            <div class="counterwrapper">
              <p>3/7</p>
            </div>
            <div class="headingwrapper">
              <h1>Hvilken spillestil?</h1>
            </div>
            <div class="selectwrapper">
            <ul>
              <li id="q3-1"> <input type ="checkbox" name="amount[1]" >Alle imod alle</li>
              <li id="q3-2"> <input type ="checkbox" name="amount[2]" > Hold mod hold</li>
              <li id="q3-3"> <input type ="checkbox" name="amount[3]" >Alle imod spillet</li>

            </ul>
            </div>
            <div class="btnwrapper3">
           <a href="q2-4.php"> <button type="button" class="tilbage btn-style" name="btn-start">Tilbage</button> </a>
          </div>
            <div class="btnwrapper2">
           <a href="q4-6.php"> <button type="button" class="videre btn-style" name="btn-videret">Videre</button> </a>
          </div>

          </div>
      </div>
    </div>
  </form>
  </body>
</html>
