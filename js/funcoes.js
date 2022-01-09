function acender(x) {
 var element = document.body;
   element.classList.toggle("dark-mode");
  x.classList.toggle("fa-moon-o");
  if(x.style.color=='black')
  {
  //x.style.color='grey';
  localStorage.setItem("dark", "grey");
  }else{
 
  //x.style.color='black';
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
   //x.style.color='grey';
  }else{
 for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "25%";
  }
  //x.style.color='black';
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


function mybusca() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}


function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";

}
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}
function darkmode(){
	var element = document.body;
   
	var x =localStorage.getItem("dark");
	if(x=='grey'){
		element.classList.toggle("dark-mode");
	}
}

document.getElementById("tempo").innerText=Math.round(readingRate('content')/60)+' min de leitura';
      function readingRate(textContainerID) {
  if (typeof textContainerID !== "string" || textContainerID.length === 0)
    throw new Error("Parametro 'textContainerID' inválido");
  let readingRateInSeconds = 0;
  const textContainer = window.document.getElementById(textContainerID);
  const content = textContainer.innerText;
  const wordCount = content.split(" ").length;
  readingRateInSeconds = (wordCount*60)/200;
  return readingRateInSeconds;
}

function includeHTML() {
  var z, i, elmnt, file, xhttp;
  /*loop through a collection of all HTML elements:*/
  z = document.getElementsByTagName("*");
  for (i = 0; i < z.length; i++) {
    elmnt = z[i];
    /*search for elements with a certain atrribute:*/
    file = elmnt.getAttribute("w3-include-html");
    if (file) {
      /*make an HTTP request using the attribute value as the file name:*/
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
          if (this.status == 200) {elmnt.innerHTML = this.responseText;}
          if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
          /*remove the attribute, and call this function once more:*/
          elmnt.removeAttribute("w3-include-html");
          includeHTML();
        }
      }      
      xhttp.open("GET", file, true);
      xhttp.send();
      /*exit the function:*/
      return;
    }
  }
};