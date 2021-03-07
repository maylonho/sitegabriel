<?php

//1 – Definimos Para quem vai ser enviado o email
$para = "gcarlossantana329@gmail.com";
//2 - resgatar os campos digitados no formulário e grava nas variaveis
$nome = "Cliente";
$assunto = "Contato do Curso de Marketing";
$email = $_POST['email'];
$tel = $_POST['tel'];

 //4 – Agora definimos a  mensagem que vai ser enviado no e-mail

$mensagem .= "E-mail: </strong>".$email;
$mensagem .= "<br>  <strong>Telefone: </strong>".$tel;

//5 – agora inserimos as codificações corretas e  tudo mais.
$headers =  "Content-Type:text/html; charset=UTF-8\n";
$headers .= "From:  ".$nome."<$email>\n";
//Vai ser //mostrado que  o email partiu deste email e seguido do nome
//email do servidor //que enviou
$headers .= "X-Mailer: PHP  v".phpversion()."\n";
$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headers .= "Return-Path:  <$email>\n";
//caso a msg //seja respondida vai para  este email.
$headers .= "MIME-Version: 1.0\n";

$envio = mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.

if($envio){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Mensagem enviada com sucesso')
    window.location.href='https://paginadelocalizacao';
    </SCRIPT>");
}else{
    echo "A mensagem não pode ser enviada";
}

?>

