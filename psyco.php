<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css" type="text/css" />

<script src="js/funcoes.js"></script>

</head>
<body>

 <div w3-include-html="include/content.html"></div> 

<div class="content">
  

<script>
includeHTML();
</script>
  <div id="myOverlay" class="overlay">
  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">x</span>
  <div class="overlay-content">
    <form action="action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>     

<br>
<br>
<input type="text" id="myInput" onkeyup="mybusca()" placeholder="Procure o Nome.." style="width:100%;height:40px">

<table id="myTable" class="searc-content"><br>
<th></th>
<?php
$path1 = "./psicologia/";

$diretorio1 = dir($path1);

echo "";
echo "";
while($arquivo = $diretorio1 -> read()){
	if(strlen($arquivo)>2){
		 
	echo "<tr><td>
      <div class='bg-psy'>
	   </div><div class='bg-text glow'><a href='".$path1.$arquivo."'><p style='color:green'>".strtr(strtr($path1,"/"," "),"."," ")."  </p><p><b style='color:white;font-size:35px'>".strtr(substr_replace($arquivo,"",-5),"-"," ")."</b></p><p>". date ("d-m-Y H:i:s.", filemtime($path1.$arquivo)). "</p></a></div></td></tr>";

}
}


echo "";
echo "</table>";
$diretorio1 -> close();


?>











