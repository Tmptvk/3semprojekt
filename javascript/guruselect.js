let cecilia = document.querySelector('.Cecilia');
let malik = document.querySelector('.Malik');
let sarah = document.querySelector('.Sarah');

let ceciliaBtn = document.getElementById('q5-1');
let malikBtn = document.getElementById('q5-2');
let sarahBtn = document.getElementById('q5-3');

function ceciliaSelectFunction(){
  cecilia.style.gridColumn= "1/3";
  cecilia.style.marginLeft = "95px";
  cecilia.style.marginTop = "5%";
  cecilia.style.zIndex = "3";

  malik.style.gridColumn= "1/2";
  malik.style.gridRow= "2/4";
  malik.style.marginLeft= "0%";
  malik.style.overflow = "visible";
  malik.style.maxWidth= "100%";
  malik.style.zIndex = "2";
  malik.style.marginTop= "0%";


  sarah.style.gridColumn= "3/4";
  sarah.style.gridRow= "2/4";
  sarah.style.marginTop= "0%";
  sarah.style.minWidth= "0%";
  sarah.style.marginLeft= "10%";
    sarah.style.zIndex = "1";

};

function malikSelectFunction(){
  cecilia.style.gridColumn= "1/2";
  cecilia.style.marginLeft = "20px";
  cecilia.style.marginTop = "70%";
  cecilia.style.zIndex = "1";

  malik.style.gridColumn= "1/3";
  malik.style.marginLeft= "20%";
  malik.style.maxWidth= "80%";
  malik.style.gridRow= "1/7";
  malik.style.marginTop = "25%";
  malik.style.overflow = "visible";
  malik.style.zIndex = "3";



  sarah.style.gridColumn= "3/4";
  sarah.style.gridRow= "2/4";
  sarah.style.marginTop= "0%";
  sarah.style.minWidth= "0%";
  sarah.style.marginLeft= "10%";
  sarah.style.zIndex = "2";

};

function sarahSelectFunction(){
  cecilia.style.gridColumn= "1/2";
  cecilia.style.marginLeft = "20px";
  cecilia.style.marginTop = "70%";
  cecilia.style.zIndex = "1";

  malik.style.gridColumn= "2/4";
  malik.style.marginLeft= "40%";
  malik.style.overflow = "hidden";
  malik.style.zIndex = "2";
  malik.style.marginTop = "40%";
  malik.style.gridRow= "1/7";


  sarah.style.gridColumn= "2/3";
  sarah.style.gridRow= "1/4";
  sarah.style.marginTop= "40%";
  sarah.style.minWidth= "130%";
  sarah.style.marginLeft= "0%";
  sarah.style.zIndex = "3";


};

ceciliaBtn.addEventListener('click', ceciliaSelectFunction);
malikBtn.addEventListener('click', malikSelectFunction);
sarahBtn.addEventListener('click', sarahSelectFunction);
