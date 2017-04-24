<?php
if (isset($_POST['BTEnvia'])) {
    
    //Variaveis de POST, Alterar somente se necessário 
    //====================================================
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone']; 
    $mensagem = $_POST['mensagem'];
    //====================================================
    
    //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
    //==================================================== 
    $email_remetente = "dgcomunicacaodigital@gmail.com"; // deve ser uma conta de email do seu dominio 
    //====================================================
    
    //Configurações do email, ajustar conforme necessidade
    //==================================================== 
    $email_destinatario = "$email"; // pode ser qualquer email que receberá as mensagens
    $email_reply = "$email"; 
    $email_assunto = "Contato formmail"; // Este será o assunto da mensagem
    //====================================================
    
    //Monta o Corpo da Mensagem
    //====================================================
    $email_conteudo = "Nome = $nome \n"; 
    $email_conteudo .= "Email = $email \n";
    $email_conteudo .= "Telefone = $telefone \n"; 
    $email_conteudo .= "Mensagem = $mensagem \n"; 
    //====================================================
    
    //Seta os Headers (Alterar somente caso necessario) 
    //==================================================== 
    $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
    //====================================================
    
    //Enviando o email 
    //==================================================== 
    if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
                    echo "</b>E-Mail enviado com sucesso!</b>"; 
                    } 
            else{ 
                    echo "</b>Falha no envio do E-Mail!</b>"; } 
    //====================================================
} 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Teste Email</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
<body>

<!------------------>
<!-- BLOCO CONTATO-->
<!------------------>
<form action="<? $PHP_SELF; ?>" name="BTEnvia" method="POST"> 
<div class="bloco_contato">
<div class="bloco_contato_meio">
        <div class="texto_risco_contato">
        <span>CONTATO</span>    
        </div>
        <div class="form_contato">
        <div class="form_contato_meio">  
            <div class="form2"> 
            <input type="text" name="nome" placeholder="Nome"></input>
            <input type="text" name="email" placeholder="E-mail"></input>
            <input type="text" name="telefone" maxlength="15" onkeypress="mascara(this)" placeholder="Telefone"></input> 
            </div>

            <div class="form1">
            <div class="form1_botao" type="submit" name="BTEnvia">ENVIAR</div>
            <textarea rows="7" cols="50" name="mensagem" placeholder="Mensagem"></textarea>
            </form>
            </div>

        </div>
        </div>

</div>
</div>

</body>
</html>


