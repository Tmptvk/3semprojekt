<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include 'psecs/head.php';?>
    <script src="javascript/validate.js" defer></script>
    <title></title>
  </head>
  <body>
    <form name="myForm2" onsubmit="return validateForm2()" action="q5-7.php" method="post">
    <div class="bodywrapper">
      <div class="bgwrapper3">
        <div class="validate">
          <div class="pwrapper">
            <p> Vælg venligst, <br>
              et spil, <br> eller en uddybende snak med en guru </p>
          </div>
        </div>
          <!--baggrund to biledder, i et grid, det ene over det andet, brug z indeks, og øverste billed hus-->
          <div class="paperwrapper3 hej">
            <div class="counterwrapper">
              <p>4/7</p>
            </div>
            <div class="headingwrapper">
              <h1>To veje</h1>
            </div>
            <div class="txtwrapperit">
              <p>
                Et par spil er nu klar,
                til at blive spillet i min bar. <br>
                Vil du gøre dit ønske mere klart, <br>
                er guruen en go' kammerat!
              </p>
            </div>
            <div class="selectwrapper">
            <ul>
              <label class="listwrapper3">Yes! Giv mig et spil!<input id="q4-1" type ="radio" value="1" name="select-q4" ><span class="underline"></span> </label>
              <label class="listwrapper3">Jeg vil gerne snakke med en Guru først<input id="q4-2" type ="radio" value="1" name="select-q4" ><span class="underline"></span> </label>

            </ul>
            </div>
            <div class="btnwrapper3">
           <a href="q3-5.php"> <button type="button" class="tilbage btn-style" name="btn-start">Tilbage</button> </a>
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
