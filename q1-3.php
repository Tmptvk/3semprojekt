<!--
<?php
print_r($_POST);
?>
-->
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
            <label class="listwrapper"> <li id="q1-1"> <input type ="radio" value="1" name="select-q1" >1</li> </label>
            <label class="listwrapper"> <li id="q1-2"> <input type ="radio" value="2" name="select-q1" >2</li> </label>
            <label class="listwrapper"> <li id="q1-3"> <input type ="radio" value="3" name="select-q1" >3</li> </label>
            <label class="listwrapper"> <li id="q1-4"> <input type ="radio" value="4" name="select-q1" >4</li> </label>
            <label class="listwrapper"> <li id="q1-5"> <input type ="radio" value="5" name="select-q1" >5</li> </label>
            <label class="listwrapper"> <li id="q1-6"> <input type ="radio" value="6" name="select-q1" >6</li> </label>
            <label class="listwrapper"> <li id="q1-7"> <input type ="radio" value="7" name="select-q1" >7</li> </label>
            <label class="listwrapper"> <li id="q1-8"> <input type ="radio" value="8" name="select-q1" >8</li> </label>
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
