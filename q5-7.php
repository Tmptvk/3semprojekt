<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include 'psecs/head.php';?>
    <title></title>
        <script defer src="javascript/guruselect.js" charset="utf-8"></script>
  </head>
  <body>
    <form  action="q6-8.php" method="post">
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
          <div class="paperwrapper4">
            <div class="counterwrapper">
              <p>5/7</p>
            </div>
            <div class="headingwrapper">
              <h1>Valg af guru</h1>
            </div>
            <div class="txtwrapperit">
              <p>
                Guruerne er til for at hjælpe dig med at finde et mere defineret spil.
              </p>
            </div>
            <div class="selectwrapper">
            <ul>
              <label class="listwrapper3">Cecilia den Trygsomme<input id="q5-1" type ="radio" value="1" name="select-q5" ><span class="underline"></span> </label>
              <label class="listwrapper3">Maalik den Modige <input id="q5-2" type ="radio" value="1" name="select-q5" ><span class="underline"></span> </label>
              <label class="listwrapper3">Sarah den Gådefulde<input id="q5-3" type ="radio" value="1" name="select-q5" ><span class="underline"></span> </label>

            </ul>
            </div>
            <div class="btnwrapper3">
           <a href="q4-6.php"> <button class="tilbage btn-style" type="button" name="btn-start">Tilbage</button> </a>
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
