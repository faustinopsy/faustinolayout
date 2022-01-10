<body>
<?php
 
$nomeremetente     = $_POST['nomeremetente'];
$emailremetente    = $_POST['emailremetente'];
$emaildestinatario = "contato@rodrigofaustino.com.br";

$assunto           = $_POST['assunto'];
$mensagem          = $_POST['mensagem'];

 if($nomeremetente==''||$emailremetente==''||$mensagem==''){

print "<h4>o email não poderá ser enviado, falta dados no formulário<br><br>


<p><a href='".$_SERVER["HTTP_REFERER"]."'>Voltar</a></p></h4>";

}
else{
	
 
/* Verifica qual éo sistema operacional do servidor para ajustar o cabeçalho de forma correta.  */
if(PATH_SEPARATOR == ";") $quebra_linha = "\r\n"; //Se for Windows
else $quebra_linha = "\n"; //Se "nÃ£o for Windows"
 
// Passando os dados obtidos pelo formulário para as variáveis abaixo

 
 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<P>Contato do site PHP mail();!</P>
<P>Aqui está a mensagem postada; formatada em HTML:</P>
<p><b>Nome: <i>'.$nomeremetente.'</i></b></p>
<p><b>email: <i>'.$emailremetente.'</i></b></p>
<p><b>Assunto: <i>'.$assunto.'</i></b></p>
<p><b>Mensagem: <i>'.$mensagem.'</i></b></p>
<hr>';
 
 
/* Montando o cabeÃ§alho da mensagem */
$headers = "MIME-Version: 1.1" .$quebra_linha;
$headers .= "Content-type: text/html; charset=iso-8859-1" .$quebra_linha;
// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
$headers .= "From: " . $emailsender.$quebra_linha;
$headers .= "Cc: " . $comcopia . $quebra_linha;
$headers .= "Bcc: " . $comcopiaoculta . $quebra_linha;
$headers .= "Reply-To: " . $emailremetente . $quebra_linha;
// Note que o e-mail do remetente será usado no campo Reply-To (Responder Para)
 
/* Enviando a mensagem */

//É obrigatório o uso do parâmetro -r (concatenação do "From na linha de envio"), aqui na Locaweb:

if(!mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender)){ // Se for Postfix
    $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
    mail($emaildestinatario, $assunto, $mensagemHTML, $headers );
}
 
/* Mostrando na tela as informações enviadas por e-mail */
print "<br><br><br><br>Assunto <b>$assunto</b> enviada com sucesso!<br><br>
<p>Em breve entrarei em contato</p><br>
<p><a href='".$_SERVER["HTTP_REFERER"]."'>Voltar</a></p>";

echo "<meta http-equiv='Refresh' content='2;url=#'>";	
	
}
?>
</body>