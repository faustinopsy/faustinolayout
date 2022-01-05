function acender(x) {
 var element = document.body;
   element.classList.toggle("dark-mode");
  x.classList.toggle("fa-moon-o");
  if(x.style.color=='black')
  {
  x.style.color='grey';
  }else{
 
  x.style.color='black';
  }
}

var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

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

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}



function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}