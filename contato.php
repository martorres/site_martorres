<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Marcelo Torres" />
    <meta name="description" content="Apresenta informações do Desenvolvedor Front-End Marcelo Torres como sua paixão pela Internet. " />
    <meta name="keywords" content="sites, web, professor web, desenvolvimento, html, css, design, webdesigner, marcelo torres, frond-end" />
	<meta name="robots" content="index,follow" />
	<title>WEBDESIGNER | Marcelo Torres</title>
	<link type="image/x-icon" rel="icon" href="img/favicon.png" />
    <link type="image/x-icon" rel="shortcut icon" href="img/favicon.ico" />
    <link type="image/ico" rel="icon" href="img/favicon.png" />
    <link type="image/ico" rel="shortcut icon" href="img/favicon.ico" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
    
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>

	
</head>

<body id="home" onLoad="MM_preloadImages('img/bt_facebook_hover.png','img/bt_twitter_hover.png','img/bt_gmail_hover.png','img/bt_feeds_hover.png')">
<div id="wrapper">
<div class="alinha">
  <div class="nav">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="#">Servi&Ccedil;os</a></li>
      <li><a href="#">Portf&Oacute;lio</a></li>
      <li id="active"><a href="contato.html">Contato</a></li>
      </ul>
  </div><!--Fim do menu de navegação-->
</div>
<div id="header" class="clear">
  <div id="controle" class="alinha">
    <div id="logo">
      <a href="index.html" title="Página Inicial"> <h1>Webdesigner - Marcelo Torres</h1></a>
    </div><!--fim da logo-->
    <div id="social_media">
    <a href="http://www.facebook.com/martorres.tec" title="Facebook" target="_blank" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('facebook','','img/bt_facebook_hover.png',1)"><img src="img/bt_facebook.png" alt="Facebook" name="facebook" width="48" height="48" border="0"></a>
	<a href="http://www.twitter.com/martorres_tec" title="Twitter" target="_blank" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('twitter','','img/bt_twitter_hover.png',1)"><img src="img/bt_twitter.png" alt="Twitter" name="twitter" width="48" height="48" border="0"></a>
    <a href="https://plus.google.com/u/0/105710661314490463842/about" title="Google+" target="_blank" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Google+','','img/bt_gmail_hover.png',1)"><img src="img/bt_gmail.png" alt="Google +" name="Google+" width="48" height="48" border="0"></a>
    <a href="#" title="Feeds" target="_blank" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Feeds','','img/bt_feeds_hover.png',1)"><img src="img/bt_feeds.png" alt="Feeds" name="Feeds" width="48" height="48" border="0"></a>

    </div><!--fim da social media-->
  </div>
</div> 
<!--Fim do Cabeçalho-->
<div id="content" class="clear alinha">

 <div class="formContato">
	  <?
      $hoje_tmp = getdate();
      $hoje = ($hoje_tmp[hours].":".$hoje_tmp[minutes].":".$hoje_tmp[seconds]);
      
      $nome = $_POST["nome"]; //trata a variável nome
      $email = $_POST["email"]; //trata a variável e-mail
      $telefone = $_POST["telefone"]; //trata a variável telefone
      $servico = $_POST["servico"]; //trata a variável servico
      $mensagem = $_POST["mensagem"]; //trata a variável mensagem
      
      global $email; //transforma em variavel global a variável e-mail
      
      $enviou = mail("martorres.tec@gmail.com", // aqui voce coloca o seu e-mail
      "$servico", // Assunto da mensagem
      "Nome: $nome
      Telefone: $telefone
      Tipo de Serviço: $servico
      E-mail: $email
      Mensagem: $mensagem",
      "From: $email $nome");
      
      if ($enviou){
      echo "<p><strong>$nome</strong>, sua mensagem foi efetuada com sucesso.<br />Em breve entraremos em contato.</p>";
      }
      
      else {
      echo "<p><strong>$nome</strong>, não foi possível enviar sua mensagem.<br />Tente novamente.</p>";
      }
      ?>
    </div> <!--Fim do formContato-->

</div>
<!--Fim do content-->
<div id="footer">
        <div class="alinha">
          <p> &copy; 2012 - Alguns direitos reservados para www.martorres.com.br</p>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Servi&Ccedil;os</a></li>
                <li><a href="#">Portf&Oacute;lio</a></li>
                <li><a href="contato.html">Contato</a></li>
            </ul>
         
    	</div>
  </div><!-- Fim do footer-->
    
</div> 
<!--Fim da wrapper-->
</body>
</html>
