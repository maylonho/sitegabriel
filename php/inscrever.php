<?php

//1 – Definimos Para quem vai ser enviado o email
$para = "gcarlossantana329@gmail.com";
//2 - resgatar os campos digitados no formulário e grava nas variaveis

$assunto = "Contato do Curso de Marketing";
$email = $_POST['email'];
$tel = $_POST['tel'];

 //4 – Agora definimos a  mensagem que vai ser enviado no e-mail

$mensagem .= "E-mail: </strong>".$email;
$mensagem .= "<br>  <strong>Telefone: </strong>".$tel;

$header = "MIME-Version: 1.0\n";
$header .= "Content-type: text/html; charset=utf-8\n";
$header .= "from: $email\n";

$envio = mail($para, $assunto, $mensagem, $header);  //função que faz o envio do email.


//EMAIL PARA O CLIENTE

//1 – Definimos Para quem vai ser enviado o email
$paraC = $email;
//2 - resgatar os campos digitados no formulário e grava nas variaveis

$assuntoC = "Acesse a Aula 01 Agora [Curso Grátis]";
$emailC = "gcarlossantana329@gmail.com";
$nomeC = "Gabriel Carlos";

 //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
$mensagemC = "Aqui está seu acesso à Aula 01 do Curso Grátis, um Curso que vai te ensinar o passo a
passo de como utilizar as duas melhores ferramentas para fazer vendas todos os dias,
sem que precise investir muito dinheiro ou aparecer na internet!
Para acessar é só clicar nesse link: <br> <br>";
$mensagemC .= "<br> <strong>LINK AULA 01 ->: </strong> https://go.hotmart.com/H48483774R?ap=7144";
$mensagemC .= "<br> <strong>LINK AULA 02 ->: </strong> https://go.hotmart.com/H48483774R?ap=225b";
$mensagemC .= "<br> <strong>LINK AULA 03 ->: </strong> https://go.hotmart.com/H48483774R?ap=2f25";


//5 – agora inserimos as codificações corretas e  tudo mais.
$headersC = "MIME-Version: 1.0\n";
$headersC .= "Content-type: text/html; charset=utf-8\n";
$headersC .= "from: gcarlossantana329@gmail.com\n";


$envioCliente = mail($paraC, $assuntoC, $mensagemC, $headersC);  //função que faz o envio do email.

if($envio){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.location.href='../obrigado.html';
    </SCRIPT>");
}else{
    echo "A mensagem não pode ser enviada";
}

?>