<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/funcoes.js"></script>

</head>
<body>

 <div w3-include-html="include/content.html"></div> 

<div class="content">
  

<script>
includeHTML();
</script>
   

<br>
<br>
<input type="text" id="myInput" onkeyup="mybusca()" placeholder="Procure o Nome.." style="width:100%;height:40px">

<table id="myTable" class="searc-content">
<th></th>
<?php
$path = "./blog/";
$diretorio = dir($path);

while($arquivo = $diretorio -> read()){
	if(strlen($arquivo)>2){
		 echo "<tr>";
		echo "<td>";
echo "<a href='".$path.$arquivo."'><h3 style='color:white'>".strtr(substr_replace($arquivo,"",-4),"-"," ")."</h3></td></a><br />";
echo "</tr>";
}
}
echo "</table>";
$diretorio -> close();

?>










