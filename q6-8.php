<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include 'psecs/head.php';?>
    <title></title>
    <script defer src="javascript/li.js" charset="utf-8"></script>
  </head>
  <body>
    <form  action="q7-9.php" method="post">
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
              <p>6/7</p>
            </div>
            <div class="headingwrapper">
              <h1>Valg af genre</h1>
            </div>
            <div class="txtwrapperit">
              <p>
              </p>
            </div>
            <div id="alittleup" class="selectwrapper">
            <ul id="ul-on">
              <!--RETTE UNDERLINE LÆNGDE VIS DET KAN NÅET I RETTE UGERNE-->
              <label id="q6-1" class="listwrapper3">Fantasy<input  type ="checkbox" value="1" name="select-q6" ><span class="underline"></span> </label>
              <label id="q6-2" class="listwrapper3">Horror<input type ="checkbox" value="1" name="select-q6" ><span class="underline"></span> </label>
              <label id="q6-3" class="listwrapper3">Sci-fi<input  type ="checkbox" value="1" name="select-q6" ><span class="underline"></span> </label>
              <label id="q6-4" class="listwrapper3">Puzzle<input  type ="checkbox" value="1" name="select-q6" ><span class="underline"></span> </label>
              <label id="q6-5" class="listwrapper3">Trivia<input  type ="checkbox" value="1" name="select-q6" ><span class="underline"></span> </label>
              <label id="q6-6" class="listwrapper3">Kortspil<input type ="checkbox" value="1" name="select-q6" ><span class="underline"></span> </label>
              <label id="q6-7" class="listwrapper3">Selskabspil<input type ="checkbox" value="1" name="select-q6" ><span class="underline"></span> </label>


            </ul>
            </div>
            <div class="btnwrapper3">
           <a href="q5-7.php"> <button class="tilbage btn-style" type="button" name="btn-start">Tilbage</button> </a>
          </div>
            <div class="btnwrapper2">
             <input type ="submit" class="videre btn-style" name="btn-videre" value="Videre">
          </div>

          </div>
      </div>
    </div>
    </form
  </body>
</html>
