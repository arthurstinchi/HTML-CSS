<?php

    $nome = addslashes($_POST['nome-box']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);

    $para = "arthur.stinchi@gmail.com";
    $assunto = "Coleta de dados - formulário";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone;

    $cabeca = "From arthur@gmail.com"."\n"."Replay-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o E-mail!");
    }
?>