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
   

<br>
<br>
<input type="text" id="myInput" onkeyup="mybusca()" placeholder="Procure o Nome.." style="width:100%;height:40px">

<table id="myTable" class="searc-content">
<th></th>
<?php
$path1 = "./psicologia/";
$path2 = "./tech/";
$path3 = "./teologia/";
$path4 = "./diversos/";
$diretorio1 = dir($path1);
$diretorio2 = dir($path2);
$diretorio3 = dir($path3);
$diretorio4 = dir($path4);

while($arquivo = $diretorio1 -> read()){
	if(strlen($arquivo)>2){
		 
		
echo "<tr><td><div class='card'>
      <div class='bg-psy'>
	   </div><div class='bg-text glow'><a href='".$path1.$arquivo."'><p style='color:green'>".strtr(strtr($path1,"/"," "),"."," ")."  </p><p><b style='color:white;font-size:35px'>".strtr(substr_replace($arquivo,"",-5),"-"," ")."</b></p><p>". date ("d-m-Y H:i:s.", filemtime($path1.$arquivo)). "</p></a></div></div></td></tr>";

}
}
while($arquivo = $diretorio2 -> read()){
	if(strlen($arquivo)>2){
		 
	echo "<tr><td><div class='card'>
      <div class='bg-tec'>
	   </div><div class='bg-text glow'><a href='".$path2.$arquivo."'><p style='color:green'>".strtr(strtr($path2,"/"," "),"."," ")."  </p><p><b style='color:white;font-size:35px'>".strtr(substr_replace($arquivo,"",-5),"-"," ")."</b></p><p>". date ("d-m-Y H:i:s.", filemtime($path2.$arquivo)). "</p></a></div></div></td></tr>";
}
}
while($arquivo = $diretorio3 -> read()){
	if(strlen($arquivo)>2){
		
	echo "<tr><td><div class='card'>
      <div class='bg-teo'>
	   </div><div class='bg-text glow'><a href='".$path3.$arquivo."'><p style='color:green'>".strtr(strtr($path3,"/"," "),"."," ")."  </p><p><b style='color:white;font-size:35px'>".strtr(substr_replace($arquivo,"",-5),"-"," ")."</b></p><p>". date ("d-m-Y H:i:s.", filemtime($path3.$arquivo)). "</p></a></div></div></td></tr>";
}
}
while($arquivo = $diretorio4 -> read()){
	if(strlen($arquivo)>2){
		 
		echo "<tr><td><div class='card'>
      <div class='bg-vari'>
	   </div><div class='bg-text glow'><a href='".$path4.$arquivo."'><p style='color:green'>".strtr(strtr($path4,"/"," "),"."," ")."  </p><p><b style='color:white;font-size:35px'>".strtr(substr_replace($arquivo,"",-5),"-"," ")."</b></p><p>". date ("d-m-Y H:i:s.", filemtime($path4.$arquivo)). "</p></a></div></div></td></tr>";
}
}
echo "</td></tr>";
echo "</table>";
$diretorio1 -> close();
$diretorio2 -> close();
$diretorio3 -> close();
$diretorio4 -> close();
?>











