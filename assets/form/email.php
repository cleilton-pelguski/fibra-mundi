<?php

if(isset($_POST['name']) && !empty($_POST['name'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['phone']);
$mensagem = addslashes($_POST['message']);

$to = "cleilton.pelguski@sounet.com.br";
$subject = "Contato Site Fibra Mundi";
$body = "Nome: " .$nome. "\r\n".
        "email: " .$email. "\r\n".
        "telefone: " .$telefone. "\r\n".
        "mensagem: " .$mensagem; 

$header = "from: cleiltonpelguski@gmail.com" ."\r\n".
        "reply-to:".$email. "\r\n".
        "X=Mailer:PHP/" .phpversion();

if(mail($to, $subject, $body, $header)){
    echo=("email enviado com sucesso!");
}
else{
echo=("O email não pode ser enviado :(");
}
?>