function validateForm() {
  var x = document.forms["myForm"]["select-q1"].value;
  if (x == "") {


    document.querySelector('.validate').style.display = "block";
    return false;
  }
}


function validateForm2() {
  var x = document.forms["myForm2"]["select-q4"].value;
  if (x == "") {


    document.querySelector('.validate').style.display = "block";
    return false;
  }}

  function validateForm3() {
    var x = document.forms["myForm3"]["select-q5"].value;
    if (x == "") {


      document.querySelector('.validate2').style.display = "block";
      return false;
    }}



  let spilnu = document.getElementById('q4-1');

  function finalChange(){
        $('form').attr('action', 'final-10.php');
        console.log('yay');

  }


    spilnu.addEventListener('click', finalChange);




      let spilnu2 = document.getElementById('q4-2');

      function finalChange2(){
            $('form').attr('action', 'q5-7.php');
            console.log('yay');

      }

      spilnu2.addEventListener('click', finalChange2);
