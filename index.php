

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
  $email_remetente = "$email"; // deve ser uma conta de email do seu dominio 
  //====================================================
  
  //Configurações do email, ajustar conforme necessidade
  //==================================================== 
  $email_destinatario = "contato@matheussouzapersonal.com.br"; // pode ser qualquer email que receberá as mensagens
  $email_reply = "$email"; 
  $email_assunto = "Contato Site"; // Este será o assunto da mensagem
  //====================================================
  
  //Monta o Corpo da Mensagem
  //====================================================
  $email_conteudo = "<b>Nome :</b> $nome<br> \n"; 
  $email_conteudo .= "<b>Email :</b> $email<br> \n";
  $email_conteudo .= "<b>Telefone :</b> $telefone<br> \n"; 
  $email_conteudo .= "<b>Mensagem :</b> $mensagem<br> \n"; 
  //====================================================
  
  //Seta os Headers (Alterar somente caso necessario) 
  //==================================================== 
  $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
  //====================================================
  
  //Enviando o email 
  //==================================================== 
  if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
          echo"<script type='text/javascript'>";

          echo "alert('Seu formulario foi enviado com sucesso !');";

          echo "</script>";
          } 
      else{ 
          echo "</b>Falha no envio do E-Mail!</b>"; } 
  //====================================================
} 
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Matheus Souza</title>
</head>
<!------------------>
<!-- BLOCO LINK'S -->
<!------------------>
<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
<link rel="stylesheet" type="text/css" href="css/modal.css"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">



<!------------------>
<!-- BLOCO SCRIPT'S-->
<!------------------>


        <!-- ESCALA IPAD  -->
        <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- META FACEBOOK-->
		<meta property="og:locale" content="pt_BR">
		<meta property="og:title" content="Matheus Souza Personal Trainer" />
		<meta property="og:description" content="(43) 99981-2074 | contato@matheussouzapersonal.com.br | Graduado em Educação Física na Universidade Norte do Paraná Londrina | PR e Pós-Graduando em Treinamento Personalizado e Funcional, o Personal Matheus Souza atende a todas as faixas etárias.Atuando também no treinamento desportivo, com praticantes de futebol e lutas." />
		<meta property="og:url" content="http://dgcomunicacao.com/clientes/matheus/" />
		<meta property="og:image" content="facebook1.png" />
		<meta property="og:type" content="website">


        <!-- META GOOGLE-->
		<meta name="description" content="Matheus Souza Personal Trainer - (43) 99981-2074 | contato@matheussouzapersonal.com.br | Graduado em Educação Física na Universidade Norte do Paraná Londrina | PR e Pós-Graduando em Treinamento Personalizado e Funcional, o Personal Matheus Souza atende a todas as faixas etárias.Atuando também no treinamento desportivo, com praticantes de futebol e lutas." xml:lang="pt-BR" lang="pt-BR" />
		<meta name="keywords" content="Matheus, Souza, Personal, Trainer, Londrina, Academia, Fitness, Malhação, Malhar, correr, " xml:lang="pt-BR" lang="pt-BR" />
		<meta name="expires" content="never" />

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8&appId=487668764653681";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


</head>
<body>	
<!------------------>
<!-- BLOCO TOPO   -->
<!------------------>

<div class="bloco_topo" id="topo" name="topo">
    <div class="bloco_topo_meio">
    <img src="images/logo.png">
        <div class="bloco_topo_menu">
            <span><a href="#topo" >Home</a></span><span><a href="#depoimentos" >Depoimentos</a></span><span><a href="#contato" >Contato</a></span>
        </div>
    </div>
</div>

<!-------------------->
<!--BLOCO DESCRICAO-->
<!-------------------->
<div class="bloco_descricao">
    <div class="bloco_descricao_meio">

	<div class="bloco_descricao_img">
    <img src="images/perfil1.png">
    </div>

	<div class="bloco_descricao_texto">
	<span>
	<div class="bloco_descricao_titulo">Matheus Souza</div>
Graduado em Educação Física na <br>Universidade Norte do Paraná<br>Londrina | PR e Pós-Graduando em<br>Treinamento Personalizado e Funcional,<br>o Personal Matheus Souza atende a todas<br>as faixas etárias.Atuando também no<br>treinamento desportivo, com praticantes<br>de futebol e lutas.
</span>
</div>	


<div class="bloco_descricao_img_mobile">
    <img src="images/perfil1.png">
    </div>



</div>

</div>



 <!------------------>
<!-- BLOCO FACEBOOK-->
 <!------------------>
 <div class="bloco_facebook">
 	<div class="bloco_facebook_meio">

 	<div class="bloco_facebook_script">
    <div id="fb-root"></div>
    <div class="fb-page" data-href="https://www.facebook.com/matheussouzapersonal" data-tabs="timeline" data-width="500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/matheussouzapersonal" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/matheussouzapersonal">Matheus Souza Personal Trainer</a></blockquote></div>  
    </div>	

 	<div class="bloco_facebook_img">
    <div class="fb-like face1like" data-href="https://www.facebook.com/matheussouzapersonal" data-width="100" data-layout="box_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>

    <div class="face1like"><img src="images/face.png"></div>
  </div>	


 </div>
 </div>





 <!------------------>
<!-- BLOCO FACEBOOK MOBILE-->
 <!------------------>
 <div class="bloco_facebook_mobile">
    <div class="bloco_facebook_meio">



    <div class="bloco_facebook_svg">
        <a href="https://www.facebook.com/matheussouzapersonal">
        <svg class="svg-icon" viewBox="0 0 20 20">
        <path fill="none" d="M10,0.5c-5.247,0-9.5,4.253-9.5,9.5c0,5.247,4.253,9.5,9.5,9.5c5.247,0,9.5-4.253,9.5-9.5C19.5,4.753,15.247,0.5,10,0.5 M10,18.637c-4.77,0-8.636-3.867-8.636-8.637S5.23,1.364,10,1.364S18.637,5.23,18.637,10S14.77,18.637,10,18.637 M10.858,7.949c0-0.349,0.036-0.536,0.573-0.536h0.719v-1.3H11c-1.38,0-1.866,0.65-1.866,1.743v0.845h-0.86V10h0.86v3.887h1.723V10h1.149l0.152-1.299h-1.302L10.858,7.949z"></path>
        </svg>
        </a>
    </div>



    <div class="bloco_facebook_script">
    <div id="fb-root"></div>
    <div class="fb-page" data-href="https://www.facebook.com/matheussouzapersonal" data-tabs="timeline" data-width="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/matheussouzapersonal" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/matheussouzapersonal">Matheus Souza Personal Trainer</a></blockquote></div>  
    </div>  


    </div>
 </div>
 </div>



<!------------------>
<!-- BLOCO CONSULTORIA -->
<!------------------>
<div class="bloco_consultoria">
<div class="bloco_consultoria_meio">

	<div class="bloco_consultoria_texto">
        <div class="bloco_consul_text_a">Consultoria<br>Online.</div>
        <div class="bloco_consul_text_b">Saiba como<br>Posso te ajudar</div>
         <a id="modal_abre2" onclick="modal_janela2">
        <div class="bloco_consul_botao"><span>Entre em contato</span></div>
        </a>
    </div>

	<div class="bloco_consultoria_img">
    <img src="images/perfil2.png">    
    </div>	

</div>
</div>
<!-- Ver Depoimento -->
<div id="modal_janela2" class="modal">
  <!-- Modal conteudo -->
  <div class="modal_conteudo">
    <span class="close2">&times;</span>
    <div class="modal_nome">Contato</div>
    <div class="modal_texto"><form action="<? $PHP_SELF; ?>" name="BTEnvia" method="POST">
        <div class="form_contato">
        <div class="form_contato_meio">  
            <div class="form2"> 
            <input type="text" name="nome" placeholder="Nome"></input>
            <input type="text" name="email" placeholder="E-mail"></input>
            <input type="text" name="telefone" maxlength="15" onkeypress="mascara(this)" placeholder="Telefone"></input> 
            </div>

            <div class="form1">
            <input class="form1_botao" type="submit" name="BTEnvia"></input>
            <textarea rows="7" cols="50" name="mensagem" placeholder="Mensagem"></textarea>
            </form>
            </div>

        </div>
        </div></div>
  </div>
</div>





<!------------------>
<!-- BLOCO INSTA  -->
<!------------------>
 <div class="bloco_insta">
 <div class="bloco_insta_meio">


       <div class="bloco_facebook_svg">
        <a href="https://www.instagram.com/matheussouzapersonal/">
        <svg class="svg-icon" viewBox="0 0 20 20">
        <path fill="none" d="M9.969,0.594c-5.195,0-9.406,4.211-9.406,9.406c0,5.195,4.211,9.406,9.406,9.406c5.195,0,9.406-4.211,9.406-9.406C19.375,4.805,15.164,0.594,9.969,0.594 M9.969,18.552c-4.723,0-8.551-3.829-8.551-8.552s3.829-8.551,8.551-8.551S18.521,5.277,18.521,10S14.691,18.552,9.969,18.552 M12.534,5.724H7.403c-0.944,0-1.71,0.766-1.71,1.71v5.131c0,0.944,0.766,1.71,1.71,1.71h5.131c0.944,0,1.71-0.766,1.71-1.71V7.435C14.244,6.49,13.479,5.724,12.534,5.724M11.679,7.007h1.283V8.29h-1.283V7.007z M9.969,8.29c0.944,0,1.71,0.766,1.71,1.71s-0.766,1.71-1.71,1.71s-1.71-0.766-1.71-1.71S9.024,8.29,9.969,8.29 M13.39,12.565c0,0.472-0.384,0.854-0.855,0.854H7.403c-0.472,0-0.855-0.383-0.855-0.854V9.573h0.898C7.423,9.712,7.403,9.854,7.403,10c0,1.417,1.149,2.565,2.565,2.565c1.416,0,2.565-1.148,2.565-2.565c0-0.146-0.02-0.288-0.043-0.427h0.898V12.565z"></path>
        </svg>
        </a>
    </div>

 	<div class="bloco_insta_script">
<div id="instafeed">
</div>
<script src="http://matthewelsom.com/assets/js/libs/instafeed.min.js"></script>
<script type="text/javascript">
  var userFeed = new Instafeed({
    get: 'user',
    userId: '145866135',
    clientId: 'a468e4b6ab884ab18735afe95dc9e8c7',
    accessToken: '145866135.1677ed0.b7d6102b96b8446eb64d5ef54265b304',
    resolution: 'standard_resolution',
    template: '<a href="{{link}}" target="_blank" id="{{id}}"><img src="{{image}}" /></a>',
    sortBy: 'most-recent',
    limit: 8,
    links: false
  });
  userFeed.run();
</script>
    </div>	


 	<div class="bloco_insta_img">
 		<img src="images/bloco_insta.png">
 	</div>	


 </div>
 </div>


  <!------------------>
<!-- BLOCO DEPOIMENTOS -->
  <!------------------>
  
  <? require "inc_dep.php"; ?>
   


<!------------------>
<!-- BLOCO CONTATO-->
<!------------------>
<div class="bloco_contato">
<div class="bloco_contato_meio" id="contato">
<form action="<? $PHP_SELF; ?>" name="BTEnvia" method="POST"> 
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
            <input class="form1_botao" type="submit" name="BTEnvia"></input>
            <textarea rows="7" cols="50" name="mensagem" placeholder="Mensagem"></textarea>
            </form>
            </div>

        </div>
        </div>

</div>
</div>






<!------------------>
<!-- BLOCO EMAIL  -->
<!------------------>
<div class="bloco_email">
<div class="bloco_email_meio">
<span>Você pode tambem enviar um email:<br>
<b>contato@matheussouzapersonal.com.br</b></span>    
</div>
</div>


<!------------------>
<!-- BLOCO RODAPE -->
<!------------------>
<div class="bloco_rodape">
<div class="bloco_rodape_meio">

    <div class="rodape">
        <div class="rodape_b">
            <span>Menu Rápido</span>
            <li><a href="#topo">Home</a></li>
            <li><a href="#depoimentos">Depoimentos</a></li>
            <li><a href="#contato">Contato</a></li>
        </div>

        <div class="rodape_b1">
            <span>Desejo Receber Informativos</span>
            <input id="nome_new" name="nome_new" placeholder="Nome"></input>
            <input id="email_new" name="email_new" placeholder="E-mail"></input>
            <input id="tel_new" name="tel_new" placeholder="Telefone"></input>
            <div class="rodape_b1_bt"><span>enviar</span></div>
        </div>

        <div class="rodape_b">
            <span>Fale Comigo</span>
            <li>43 99981-2074 <img src="images/whatsapp.png"></li><br>
            <a href="https://www.facebook.com/matheussouzapersonal"><img src="images/faceic.png"></a>
            <a href="https://www.instagram.com/matheussouzapersonal/"><img src="images/instaic.png"></a>

        </div>
    </div>  

<!-- Logo DG -->
<div class="dg">
<svg class="svg_dg"  id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 191.03 191.03"><defs><style>.cls-1{fill:#fff;}</style></defs><title>dg</title><path class="cls-1" d="M122.78,101.39h16.89a17.93,17.93,0,1,1-5-19.43l8-9A29.92,29.92,0,0,0,94.9,84.54,30,30,0,0,0,67,65.46H37.23v59.85H67A30,30,0,0,0,94.9,106.23a29.92,29.92,0,0,0,57.81-10.84v-6H122.78ZM67,113.31H49.23V77.46H67a17.93,17.93,0,1,1,0,35.85Z"/><path class="cls-1" d="M176.88,145.49a95.58,95.58,0,1,0-31.47,31.44L185,185ZM12,95.51A83.51,83.51,0,1,1,95.51,179,83.61,83.61,0,0,1,12,95.51Z"/></svg>
</div>
<script type="text/javascript">
  $(document).ready(function () {
    $("html").niceScroll();
});
</script>
<script type="text/javascript">
    function mascara(telefone){ 
   if(telefone.value.length == 0)
     telefone.value = '(' + telefone.value; //quando começamos a digitar, o script irá inserir um parênteses no começo do campo.
   if(telefone.value.length == 3)
      telefone.value = telefone.value + ') '; //quando o campo já tiver 3 caracteres (um parênteses e 2 números) o script irá inserir mais um parênteses, fechando assim o código de área.
 
 if(telefone.value.length == 10)
     telefone.value = telefone.value + '-'; //quando o campo já tiver 8 caracteres, o script irá inserir um tracinho, para melhor visualização do telefone.
}
    </script>

</div>
</div>




    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script type="text/javascript">
      jQuery.fn.smoothScroll = function(){
        $(this).each(function(){
          var node = $(this);
          $(node).click(function(e){
            var anchor = $(this).attr('href');
            anchor = anchor.split("#");
            anchor = anchor[1];
            var t = 0;
            var found = false;
            var tName = 'a[name='+anchor+']';
            var tId = '#'+anchor;
            if (!!$(tName).length){
              t = $(tName).offset().top;
              if ($(tName).text() == ""){
                t = $(tName).parent().offset().top;
              }
              found = true;
            } else if(!!$(tId).length){
              t = $(tId).offset().top;
              found = true;
            }
            if (found){
              $("body, html").animate({scrollTop: t}, 500);
            }
            //e.preventDefault();
          });
        });
        var lAnchor = location.hash;
        if (lAnchor.length > 0){
          lAnchor = lAnchor.split("#");
          lAnchor = lAnchor[1];
          if (lAnchor.length > 0){
            $("body, html").scrollTop(0);
            var lt = 0;
            var lfound = false;
            var ltName = 'a[name='+lAnchor+']';
            var ltId = '#'+lAnchor;
            if (!!$(ltName).length){
              lt = $(ltName).offset().top;
              if ($(ltName).text() == ""){
                lt = $(ltName).parent().offset().top;
              }
              lfound = true;
            } else if(!!$(ltId).length){
              lt = $(ltId).offset().top;
              lfound = true;
            }
            if (lfound){
              $("body, html").animate({scrollTop: lt}, 500);
            }
          }
        }
      }
      $('.anchorList a').smoothScroll();
    </script>




  <script>
var modal = document.getElementById("modal_janela1");
var btn = document.getElementById("modal_abre1");
var span = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

  <script>
var modal2 = document.getElementById("modal_janela2");
var btn2 = document.getElementById("modal_abre2");
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the modal 
btn2.onclick = function() {
    modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
    modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
</script>

  <script>
var modal12 = document.getElementById("modal_janela12");
var btn12 = document.getElementById("modal_abre12");
var span12 = document.getElementsByClassName("close12")[0];

// When the user clicks the button, open the modal 
btn12.onclick = function() {
    modal12.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span12.onclick = function() {
    modal12.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal12) {
        modal12.style.display = "none";
    }
}
</script>






</body>
</html>