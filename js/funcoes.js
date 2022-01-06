function acender(x) {
 var element = document.body;
   element.classList.toggle("dark-mode");
  x.classList.toggle("fa-moon-o");
  if(x.style.color=='black')
  {
  x.style.color='grey';
  localStorage.setItem("dark", "grey");
  }else{
 
  x.style.color='black';
  localStorage.setItem("dark", "black");
  }
}

var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;


function listagrid(x) {

  x.classList.toggle("fa-th");
  if(x.style.color=='black')
  {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "90%";
	
  }
  localStorage.setItem("cor", "grey");
   x.style.color='grey';
  }else{
 for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "30%";
  }
  x.style.color='black';
  localStorage.setItem("cor", "black");
  }
  }



// List ou Grid
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "90%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "30%";
  }
}





function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}

function darkmode(){
	var element = document.body;
   
	var x =localStorage.getItem("dark");
	if(x=='grey'){
		element.classList.toggle("dark-mode");
	}
}
