<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de envio de email</title>
</head>
<body>
    <form action="" method="post">
        <strong>Formato</strong> 
        <br>
        <label for="html">
            <input type="radio" name="formato" value="html" id="html"> html
        </label>
        <br>
        <label for="txt">
            <input type="radio" name="formato" value="txt" id="txt"> txt
        </label>
        <!-- 
        Content-type: 
        Formato do envio de mensagens, use 
        “text/plain” para texto ou 
        “text/html” para HTML.
         -->
        <br><br>

        Destino
        <br>
        <label for="gmail">
            <input type="radio" name="destino" value="betoside@gmail.com" id="gmail"> betoside@gmail.com
        </label>
        <br>
        <label for="html">
            <input type="radio" name="destino" value="developer@peck.law" id="peck"> developer@peck.law
        </label>

        <br><br>


        <input type="hidden" name="pagina" value="index.html">
        <div class="box-campo">
            <label for="assunto">Assunto *</label> <br>
            <select name="assunto">
                <option value="Fale Conosco">
                    Fale conosco – Mais informações, agenda de atendimento ou parceria estratégica, entre em contato.
                </option>
                <option value="Carreira">
                    Carreira – Se você tem o DNA do Direito + Tecnologia + Inovação venha fazer parte do nosso Dream Team! 
                </option>
                <option value="Imprensa">
                    Imprensa – Oportunidades de pautas e entrevistas
                </option>
            </select>
        </div> 

        <div class="box-inputs">
            <div class="box-campo">
                <label for="nome">Seu nome *</label> <br>
                <input type="text" name="nome" required>
            </div> 
            <div class="box-campo">
                <label for="email">Seu email *</label> <br>
                <input type="email" name="email">
            </div> 
        </div>

        <div class="box-inputs">
            <div class="box-campo">
                <label for="telefone">Empresa *</label> <br>
                <input type="text" name="empresa" required>
            </div> 
            <div class="box-campo">
                <label for="telefone">Telefone *</label> <br>
                <input type="text" name="telefone" required>
            </div> 
        </div>

        <div class="box-campo">
            <label for="mensagem">Dúvidas | Comentários *</label> <br>
            <textarea name="mensagem" class="Montserrat" required></textarea>
        </div> 

        <div class="box-assine-enviar">
            <div class="assine">
                <p>
                    Assine a nossa newsletter, receba nossos conteúdos exclusivos e fique por dentro de tudo sobre novidades, eventos e informações.
                </p>
                <br>
                <label for="inscrever">
                    <input type="checkbox" name="assinar" id="assinar"> sim, quero receber.
                </label>                            
            </div>
            <div class="bt-box">
                <button>>> Enviar</button>
            </div>
        </div>


    </form>

</body>
</html>