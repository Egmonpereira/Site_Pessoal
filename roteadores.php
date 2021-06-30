<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8" http-equiv="refresh" content="20; url=roteadores.php">
    <meta name="viewport" content="width=device-width" initial-scale=1>
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="sortcut icon" href="imagens/favicon.png" type="image/x-icon" />;    
    <title> Egmon Pereira - Roteadores</title>
    <style type="text/css">
        .imagem img{
            width:100%;
            height:220px;
            border: 0px solid red;
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
    <a href="<?php echo $image_rand; ?>" target="_blank"> <img src="<?php echo $image_rand; ?>" /></a>
  </div>

  <div class="container">
    <a target="_blank" href="https://dashboard.tawk.to/login"><img width="80" src="imagens/tawk.png"></a>
    <a target="_blank" href="https://www.minhaconexao.com.br/"><img width="80" src="imagens/minha-conexao.png"></a>
    <a target="_blank" href="http://simet.nic.br/simet-app.html"><img width="80" src="imagens/simet.png"></a>
    <a target="_blank" href="http://www.speedtest.net/"><img width="83" src="imagens/speedtest.png"></a>
    <a target="_blank" href="https://macvendors.com/"><img width="80" src="imagens/mac-address.png"></a>
    <a target="_blank" href="http://localhost/phpmyadmin/"><img width="80" src="imagens/mysql.png"></a>
    <a target="_blank" href="http://localhost/dashboard/"><img width="80" src="imagens/php.png"></a>
    <a target="_blank" href="https://flathub.org/home"><img width="80" src="imagens/flathub-logo.png"></a>
    <a target="_blank" href="https://ytson.io"><img width="80" src="imagens/YTS.png"></a>
  </div>

  <div class="container">
    <a target="_blank" href="http://10.0.0.1"><img width="80" src="imagens/roteador10001.png"></a>
    <a target="_blank" href="http://10.0.254.254"><img width="80" src="imagens/roteador100254254.png"></a-->
    <a target="_blank" href="http://192.168.2.1"><img width="80" src="imagens/roteador19216821.png"></a>
    <a target="_blank" href="http://192.168.1.1"><img width="80" src="imagens/roteador19216811.png"></a>
    <a target="_blank" href="http://192.168.0.1"><img width="80" src="imagens/roteador19216801.png"></a>
    <a target="_self" href="index.php"><img width="80" src="imagens/inicio3.png"></a>
  </div>
    
   </center>
  </td>
  </tr>
 </table>
 </center>

 </body>
 </html>
