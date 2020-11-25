<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include 'psecs/head.php';?>
    <title></title>
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
            <div class="selectwrapper">
            <ul>
              <li id="q6-1"> <input type ="checkbox" name="amount[1]" >Fantasy</li>
              <li id="q6-2"> <input type ="checkbox" name="amount[2]" >Horror</li>
              <li id="q6-3"> <input type ="checkbox" name="amount[3]" >Sci-fi</li>
              <li id="q6-4"> <input type ="checkbox" name="amount[4]" >Selvskabsspil</li>
              <li id="q6-5"> <input type ="checkbox" name="amount[1]" >Kortspil</li>
              <li id="q6-6"> <input type ="checkbox" name="amount[1]" >Trivia</li>
              <li id="q6-7"> <input type ="checkbox" name="amount[1]" >Puzzle</li>


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
