<?

# alterar a variavel abaixo colocando o seu email

$destinatario = "rafaelbrandaomkt@gmail.com";

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$mensagem = $_REQUEST['mensagem'];
$assunto = $_REQUEST['assunto'];

 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "Informações" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Zap: " . $zap . "\n";
$body = $body . "Email: " . $email . "\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");

// redireciona para a página 2
header("location:page2.html");


?>