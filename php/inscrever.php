<?php

//1 – Definimos Para quem vai ser enviado o email
$para = "gcarlossantana329@gmail.com";
//2 - resgatar os campos digitados no formulário e grava nas variaveis

$assunto = "Contato do Curso de Marketing";
$email = $_POST['email'];
$nome = $email;
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
    window.location.href='../obrigado.html';
    </SCRIPT>");
}else{
    echo "A mensagem não pode ser enviada";
}


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
Para acessar é só clicar nesse link: "
$mensagemC .= "<br> LINK AULA 01 ->: </strong> https://go.hotmart.com/H48483774R?ap=7144";
$mensagemC .= "<br> LINK AULA 02 ->: </strong> https://go.hotmart.com/H48483774R?ap=225b";
$mensagemC .= "<br> LINK AULA 03 ->: </strong> https://go.hotmart.com/H48483774R?ap=2f25";
$mensagemC .= "<br>  <strong>E para acelerar ainda mais seus resultados e te ajudar a criar seu negócio online, eu
preparei algumas coisas especiais pra você!
Desde 2016, eu tenho ajudado pessoas a ganharem dinheiro com o Marketing Digital.
Já foram mais de 7 MIL alunos que eu tive a honra de contribuir para conquistarem a 
sua independência financeira. Por isso, eu quero dizer o que você pode esperar de mim
agora que está na minha lista.
Eu vou te enviar um material que vai te dar a possibilidade de dar seu primeiro passo
para alcançar a sua liberdade. Saindo do zero, você vai aprender a utilizar as duas
ferramentas que usei para começar do nada, sem quase nenhum conhecimento de
marketing digital, para faturar mais de UM MILHÃO de reais sem ter que aparecer.
E eu sei que isso é extremamente importante para você porque eu já me senti
exatamente como você! Eu já vivi a frustração de não ter a vida que eu desejava e
sentia a necessidade de poder me libertar. Além disso, tinha muita vergonha de
aparecer e medo do que as pessoas pensariam de mim.
Tanto que no próximo email que eu vou te enviar, eu vou te mostrar como criar, na
prática, a primeira campanha de FacebookAds. Uma ferramenta que vai te permitir ter
uma renda trabalhando como afiliado, sem ter que se expor na internet!
";

//5 – agora inserimos as codificações corretas e  tudo mais.
$headersC =  "Content-Type:text/html; charset=UTF-8\n";
$headersC .= "From:  ".$nomeC."<$emailC>\n";
//Vai ser //mostrado que  o email partiu deste email e seguido do nome
//email do servidor //que enviou
$headersC .= "X-Mailer: PHP  v".phpversion()."\n";
$headersC .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
$headersC .= "Return-Path:  <$emailC>\n";
//caso a msg //seja respondida vai para  este email.
$headersC .= "MIME-Version: 1.0\n";
$envioCliente = mail($paraC, $assuntoC, $mensagemC, $headersC);  //função que faz o envio do email.

?>

