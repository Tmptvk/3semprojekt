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
              <label class="listwrapper3">Alle imod alle .<input id="q3-1" type ="radio" value="1" name="select-q3" ><span class="underline"></span> </label>
              <label class="listwrapper3">Hold imod hold<input id="q3-2" type ="radio" value="1" name="select-q3" ><span class="underline"></span> </label>
              <label class="listwrapper3">Alle imod spillet<input id="q3-3" type ="radio" value="1" name="select-q3" ><span class="underline"></span> </label>

            </ul>
            </div>
            <div class="btnwrapper3">
           <a href="q2-4.php"> <button type="button" class="tilbage btn-style" name="btn-start">Tilbage</button> </a>
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
