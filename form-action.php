<?php

if (isset($_POST['nome']) && !empty($_POST['nome'])) {

    $assunto = addslashes($_POST['assunto']); // Fale Conosco, Carreira, Imprensa
    if ($assunto == 'Fale Conosco') {
        $email_to = "contato@peckadv.com.br";
    }
    if ($assunto == 'Carreira') {
        $email_to = "carreira@peckadv.com.br";
    }
    if ($assunto == 'Imprensa') {
        $email_to = "imprensa@peckadv.com.br";
    }

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);   
    $empresa = addslashes($_POST['empresa']);
    $telefone = addslashes($_POST['telefone']);

    $mensagem = addslashes($_POST['mensagem']);
    $mensagem = nl2br($mensagem, false);

    $assinar = addslashes($_POST['assinar']);
    if(!empty($assinar)){
        $assinar = "Sim, desejo receber newsletter";
    } else {
        $assinar = "Não, muito obrigado";
    }

    $preview = "";
    $preview =  '<strong>Assunto</strong>: '.$assunto. "<br><br>"   .
                '<strong>Nome</strong>: '.$nome. "<br><br>" .
                '<strong>Email</strong>: '.$email. "<br><br>" .
                '<strong>Email Para</strong>: '.$email_to. "<br><br>" .
                '<strong>Empresa</strong>: '.$empresa. "<br><br>" .
                '<strong>Telefone</strong>: '.$telefone. "<br><br>" .
                '<strong>Newsletter</strong>: '.$assinar. "<br><br>" .
                '<strong>Mensagem</strong>: <br>'.$mensagem;
    // echo $preview;
    // exit;

    $msg =  '<strong>Assunto</strong>: '.$assunto. "<br><br>"   .
                '<strong>Nome</strong>: '.$nome. "<br><br>" .
                '<strong>Email</strong>: '.$email. "<br><br>" .
                '<strong>Empresa</strong>: '.$empresa. "<br><br>" .
                '<strong>Telefone</strong>: '.$telefone. "<br><br>" .
                '<strong>Newsletter</strong>: '.$assinar. "<br><br>" .
                '<strong>Mensagem</strong>: <br>'.$mensagem;

    // contato@peckadv.com.br

    $assunto = "Contato do site: " . $assunto;
    $headers = "FROM: ".$email."\r\n".
                "X-Mailer: PHP/".phpversion();

    try {
        $mail($email_to, $assunto, $msg, $headers);
        header("Location: index.html?Email_success=1");
    } catch (\Throwable $th) {
        header("Location: index.html?Email_Error=1");
    }
    // $mail($email_to, $assunto, $msg, $headers);
    // echo "<h2>Ok! Você receberá um email com o link para confirmar seu cadastro</h2>";
    // exit;


// Quarta feira, 4 de agosto.

// Sol, temperatura alta durante o dia.

// Temperatura baixa durante a noite.



}