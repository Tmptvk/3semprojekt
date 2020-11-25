let cecilia = document.querySelector('.Cecilia');
let malik = document.querySelector('.Malik');
let sarah = document.querySelector('.Sarah');

let ceciliaBtn = document.getElementById('q5-1');
let malikBtn = document.getElementById('q5-2');
let sarahBtn = document.getElementById('q5-3');

function ceciliaSelectFunction(){
  cecilia.style.gridColumn= "2/3";
  malik.style.gridColumn= "1/2";
  sarah.style.gridColumn= "3/4";

};

function malikSelectFunction(){
  cecilia.style.gridColumn= "1/2";
  malik.style.gridColumn= "2/3";
  sarah.style.gridColumn= "3/4";

};

function sarahSelectFunction(){
  cecilia.style.gridColumn= "1/2";
  malik.style.gridColumn= "3/4";
  sarah.style.gridColumn= "2/3";

};

ceciliaBtn.addEventListener('click', ceciliaSelectFunction);
malikBtn.addEventListener('click', malikSelectFunction);
sarahBtn.addEventListener('click', sarahSelectFunction);
