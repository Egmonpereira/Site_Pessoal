<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8" http-equiv="refresh" content="20; url=roteadores.php">
    <meta name="viewport" content="width=device-width" initial-scale=1>
    <link rel="sortcut icon" href="imagens/favicon.png" type="image/x-icon" />;    
    <title> Roteadores</title>
    <style type="text/css">
        .imagem img{
            width:55%;
            height:220px;
        }
    body  {
            background-image: url('imagens/bg19.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-color: white;
          }
    </style>
 </head>
<body>

 <?php
 $rand = (string) rand(1,115);
// var_dump($rand);

$image_rand = "imagens/bg(".$rand.").jpg";

?>

 <center>
 <table border="0">
   <!--caption><font face="Arial" size="+3" color="green"><b>Egmon - Página pessoal</b></font></caption-->
  <tr>
  <td>
  <center>
    <div class="imagem">

    <!--a href="imagens/bg(6).jpg" target="_blank"> <img src="imagens/bg(6).jpg" /></a></div-->
     <!--a target="_blank" href="http://www.egmon.net/"><img width="610"  height="170" src="bg01.jpeg"><br-->
    <!--img width="610"  height="170" src="javascript:banners();"><br-->
    <a href="<?php echo $image_rand; ?>" target="_blank"> <img src="<?php echo $image_rand; ?>" /></a></div>

    <a target="_blank" href="https://dashboard.tawk.to/login"><img width="80" src="imagens/tawk.png"></a>
    <a target="_blank" href="https://www.minhaconexao.com.br/"><img width="80" src="imagens/minha-conexao.png"></a>
    <a target="_blank" href="http://simet.nic.br/simet-app.html"><img width="80" src="imagens/simet.png"></a>
    <a target="_blank" href="http://www.speedtest.net/"><img width="83" src="imagens/speedtest.png"></a>
    <a target="_blank" href="https://macvendors.com/"><img width="80" src="imagens/mac-address.png"></a>
    <a target="_blank" href="http://localhost/phpmyadmin/"><img width="80" src="imagens/mysql.png"></a>
    <a target="_blank" href="http://localhost/dashboard/"><img width="80" src="imagens/php.png"></a>
    <a target="_blank" href="https://flathub.org/home"><img width="80" src="imagens/flathub-logo.png"></a>
    <br />
    <a target="_blank" href="https://ytson.io"><img width="80" src="imagens/YTS.png"></a>
    <a target="_blank" href="http://10.0.0.1"><img width="80" src="imagens/roteador10001.png"></a>
    <a target="_blank" href="http://10.0.254.254"><img width="80" src="imagens/roteador100254254.png"></a-->
    <a target="_blank" href="http://192.168.2.1"><img width="80" src="imagens/roteador19216821.png"></a>
    <a target="_blank" href="http://192.168.1.1"><img width="80" src="imagens/roteador19216811.png"></a>
    <a target="_blank" href="http://192.168.0.1"><img width="80" src="imagens/roteador19216801.png"></a>
    <a target="_self" href="index.php"><img width="80" src="imagens/inicio3.png"></a>
    
    <!--a target="_blank" href="https://www.google.com/maps"><img width="100" src="maps.png"></a>
    <a target="_blank" href="https://photos.google.com/"><img width="100" src="photos.svg"></a>
    <a target="_blank" href="https://hangouts.google.com/"><img width="100" src="hangouts.png"></a>
    <a target="_blank" href="https://www.blogger.com/"><img width="100" src="blogger.png"></a>
   <br />
    <a target="_blank" href="http://www.egmon.net/"><img src="egmon.png"></a>
    <a target="_blank" href="http://www.ipcentral.com.br/"><img width="100" src="Central.jpg"></a>
    <a target="_blank" href="http://www.egmon.net/p/academico.html/"><img width="100" src="academico.jpg"></a>
    <a target="_blank" href="https://ava.aprovaconcursos.com.br/"><img width="100" src="aprova.png"></a>
    <a target="_blank" href="https://www.sbb.org.br/"><img width="100" src="sbb.png"></a>
    <a target="_blank" href="https://dashboard.tawk.to/login"><img width="100" src="tawk.jpg"></a>
   <br />
    <a target="_blank" href="https://translate.google.com/"><img width="125" src="translate.png"></a>
    <a target="_blank" href="https://mega.nz/"><img width="100" src="mega.png"></a>
    <a target="_blank" href="https://www.overleaf.com/"><img width="100" src="overleaf.png"></a>
    <a target="_blank" href="https://www.projetocaveira.com.br/novo-sistema/"><img width="100" src="projeto-caveira.png"></a-->
   </center>
  </div>
  </td>
  </tr>
 </table>
 </center>

 </body>
 </html>
