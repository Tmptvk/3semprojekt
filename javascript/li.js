let fantasyBtn = document.getElementById('q6-1');
let horrorBtn = document.getElementById('q6-2');
let sciBtn = document.getElementById('q6-3');
let puzzleBtn = document.getElementById('q6-4');
let triviaBtn = document.getElementById('q6-5');
let kortspilBtn = document.getElementById('q6-6');
let selvskabBtn = document.getElementById('q6-7');

let bg = document.querySelector('.bgwrapper4');
let cecilia = document.querySelector('.Cecilia');
let malik = document.querySelector('.Malik');
let sarah = document.querySelector('.Sarah');



function fantasyFunction(){
  bg.style.backgroundImage = "url('media/fantasi.png')";
  sarah.style.display= "none";
  cecilia.style.display= "none";
  malik.style.display= "none";
  bg.style.backgroundSize = "100%";
};

function horrorFunction(){
  bg.style.backgroundSize = "100%";
  bg.style.backgroundImage = "url('media/horror.png')";
  sarah.style.display= "none";
  cecilia.style.display= "none";
  malik.style.display= "none";
};
function sciFunction(){
  bg.style.backgroundSize = "100%";
  bg.style.backgroundImage = "url('media/sci.png')";
  sarah.style.display= "none";
  cecilia.style.display= "none";
  malik.style.display= "none";
};

function puzzleFunction(){
  bg.style.backgroundImage = "url('media/Maze.png')";
  bg.style.backgroundSize = "120%";
  sarah.style.display= "none";
  cecilia.style.display= "none";
  malik.style.display= "none";
};
function triviaFunction(){
  bg.style.backgroundImage = "url('media/Quiz.png')";
  bg.style.backgroundSize = "120%";
  sarah.style.display= "none";
  cecilia.style.display= "none";
  malik.style.display= "none";
};
function kortspilFunction(){
  bg.style.backgroundImage = "url('media/Cards.png')";
  bg.style.backgroundSize = "120%";
  sarah.style.display= "none";
  cecilia.style.display= "none";
  malik.style.display= "none";
};

function selvskabspilFunction(){
  bg.style.backgroundImage = "url('media/Party.png')";
  bg.style.backgroundSize = "120%";
  sarah.style.display= "none";
  cecilia.style.display= "none";
  malik.style.display= "none";
};




fantasyBtn.addEventListener('click', fantasyFunction);
horrorBtn.addEventListener('click', horrorFunction);
sciBtn.addEventListener('click', sciFunction);
puzzleBtn.addEventListener('click', puzzleFunction);
triviaBtn.addEventListener('click', triviaFunction);
kortspilBtn.addEventListener('click', kortspilFunction);
selvskabBtn.addEventListener('click', selvskabspilFunction);
