<?php
session_start();

if (isset($_POST['nome']) && !empty($_POST['nome'])) {
    $_SESSION['msgResposta'] = array();

    $pagina = $_POST['pagina'];
    if ($pagina == "index.html") {
        $_SESSION['msgResposta'] = ["Ok, sua mensagem foi enviada. <br> Muito obrigado."];
    }
    if ($pagina == "index_en.html") {
        $_SESSION['msgResposta'] = ["Okay, your message has been sent. <br> Thank you."];
    }
    if ($pagina == "index_es.html") {
        $_SESSION['msgResposta'] = ["De acuerdo, su mensaje ha sido enviado. <br> muchas gracias."];
    }

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
    $emailFromForm = addslashes($_POST['email']);   
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
                '<strong>Email</strong>: '.$emailFromForm. "<br><br>" .
                '<strong>Email Para</strong>: '.$email_to. "<br><br>" .
                '<strong>Empresa</strong>: '.$empresa. "<br><br>" .
                '<strong>Telefone</strong>: '.$telefone. "<br><br>" .
                '<strong>Newsletter</strong>: '.$assinar. "<br><br>" .
                '<strong>Mensagem</strong>: <br>'.$mensagem;
    // echo $preview;
    // exit;

    $msg =  '<strong>Assunto</strong>: '.$assunto. "<br><br>"   .
                '<strong>Nome</strong>: '.$nome. "<br><br>" .
                '<strong>Email</strong>: '.$emailFromForm. "<br><br>" .
                '<strong>Empresa</strong>: '.$empresa. "<br><br>" .
                '<strong>Telefone</strong>: '.$telefone. "<br><br>" .
                '<strong>Newsletter</strong>: '.$assinar. "<br><br>" .
                '<strong>Mensagem</strong>: <br>'.$mensagem;

    // contato@peckadv.com.br
    $emailsender = "developer@peck.law";
    $quebra_linha = "\r\n";
    $assunto = "Contato do site: " . $assunto;

        $headers = "MIME-Version: 1.1\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
        $headers .= "X-Mailer: PHP/".phpversion();
        $headers .= "From: ".$emailsender."\r\n"; // remetente
        $headers .= "Return-Path: ".$emailsender."\r\n"; // return-path
        $headers .= "Reply-To: ".$emailFromForm."\r\n";
        // $envio = mail("destinatario@algum-email.com", "Assunto", "Texto", $headers);
        // if($envio)
        //     echo "Mensagem enviada com sucesso";
        // else
        //     echo "A mensagem não pode ser enviada";


        // TESTE EMAIL FORMATO HTML
        // $email_to = "developer@peck.law";

    try {
        // $mail($email_to, $assunto, $msg, $headers);
        if(!mail($email_to, $assunto, $msg, $headers ,"-r".$emailsender)){ // Se for Postfix
            // $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
            mail($email_to, $assunto, $msg, $headers );
        }
        header("Location: index.html?Email_success=1");
    } catch (\Throwable $th) {
        header("Location: index.html?Email_Error=1");
    }
    // $mail($email_to, $assunto, $msg, $headers);
    // echo "<h2>Ok! Você receberá um email com o link para confirmar seu cadastro</h2>";
    // exit;


// Quinta feira, 12 de agosto.

// Sol, temperatura alta durante o dia.

// Temperatura baixa durante a noite.



}