<?php

if (isset($_POST['nome']) && !empty($_POST['nome'])) {

    $assunto = addslashes($_POST['assunto']); // fale, carreira, imprensa
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);   
    $empresa = addslashes($_POST['empresa']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['mensagem']);
    $assinar = addslashes($_POST['assinar']);

    
    $assunto = addslashes($_POST['assunto']); // fale, carreira, imprensa
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);   
    $empresa = addslashes($_POST['empresa']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['mensagem']);
    $assinar = addslashes($_POST['assinar']);
    if(!empty($assinar)){
        $assinar = "Sim, desejo receber newsletter";
    } else {
        $assinar = "Não, muito obrigado";
    }

    $preview = "";
    
    
    $preview =  '$assunto: '.$assunto. "<br>" .
                '$nome: '.$nome. "<br>" .
                '$email: '.$email. "<br>" .
                '$empresa: '.$empresa. "<br>" .
                '$telefone: '.$telefone. "<br>" .
                '$Newsletter: '.$assinar. "<br>" .
                '$mensagem: '.$mensagem;

    echo $preview;

// Quarta feira, 4 de agosto.

// Sol, temperatura alta durante o dia.

// Temperatura baixa durante a noite.



}