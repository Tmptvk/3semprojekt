<script type="text/javascript">

var guruText = [
    ['Du er der næsten!', 'Overrask mig', 'Det er den vej jeg foretrækker', 'Puuuh, jeg kan godt men er ikke vild med det', 'Jøsses, du er da ikke bange for noget'],
    ['Jeg kan lide uendelige eventyr', 'Overrask mig', 'Jo da, ikke alle dage kan være lige store eventyr', 'Det går an, makker', 'Ja! Nu sker der noget'],
    ['Alt med måde', 'Overrask mig', 'Hmm, det er fint', 'Ahh en perfekt balance', 'Det er en udfordring, men jeg tror du kan klare det']
];

var templateText = document.getElementById('template');

function btnFunction(){
  templateText.innerHTML= guruText [<?php echo $_SESSION['guruNum']; ?>] [0];
}

</script>
